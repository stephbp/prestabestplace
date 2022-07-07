<?php
/**
 * 2016 ARIARY.NET
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @author    ARIARY.NET <ariary@ariary.net>
 * @copyright Avril 2016 ARIARY.NET
 */

if (!defined('_PS_VERSION_'))
    exit;
include_once(_PS_MODULE_DIR_ . 'vanillapay/Crypt/TripleDES.php'); // pour l'encryptage des données
include_once(_PS_MODULE_DIR_ . 'vanillapay/Classes/ariarynet_tools.php');
require_once(_PS_MODULE_DIR_ . 'vanillapay/Classes/Pusher.php');


class AriaryNet extends PaymentModule
{
    const BACKWARD_REQUIREMENT = '0.4';
    const DEFAULT_COUNTRY_ISO = 'FR';
    public $arn_grant_type = 'client_credentials';
    public $_errors = array();
    public $context;
    public $iso_code;
    public $default_country;
    public $arn_tools;
    public $module_key = '';
    protected $_html = '';
    private $arn_public_key = '';
    private $arn_private_key = '';
    private $arn_client_id = '';
    private $arn_client_secret = '';
    private $arn_token = '';
    private $encrypteur;
    private $decrypteur;
    private $plateforme = 'https://pro.ariarynet.com/';

    public function __construct()
    {
        $this->name = 'vanillapay';
        $this->tab = 'payments_gateways';
        $this->version = '1.17.1';
        $this->author = 'ARIARY.NET';
        $this->is_eu_compatible = 0;

        $this->currencies = true;
        $this->currencies_mode = 'radio';

        parent::__construct();

        $this->displayName = $this->l('vanillapay');
        $this->description = $this->l('Accepts online payments by mobile money (Airtel Money, MVola, Orange Money) and by e-voucher Ariary.Net.');
        $this->confirmUninstall = $this->l('Are you sure you want to delete your details?');

        $this->page = basename(__FILE__, '.php');
        $this->loadDefaults();
    }

    public function getnom() {
        return $this->plateforme;
    }
    /**
     * Initialize default values
     */
    protected function loadDefaults()
    {
        $this->active = true;
        $this->loadLangDefault();
        $this->arn_tools = new AriaryNetTools($this->name);

        $this->arn_private_key = Configuration::get('ARYARYNET_CLIENT_PRIVATE_KEY');
        $this->arn_public_key = Configuration::get('ARYARYNET_CLIENT_PUBLIC_KEY');

        $this->encrypteur = new Crypt_TripleDES();
        $this->encrypteur->setKey($this->arn_public_key);

        $this->decrypteur = new Crypt_TripleDES();
        $this->decrypteur->setKey($this->arn_private_key);
    }

    private function loadLangDefault()
    {
        $arn_country_default = (int)Configuration::get('ARN_COUNTRY_DEFAULT');
        $this->default_country = ($arn_country_default ? (int)$arn_country_default : (int)Configuration::get('PS_COUNTRY_DEFAULT'));
        $this->iso_code = $this->getCountryDependency(Tools::strtoupper($this->context->language->iso_code));
    }

    public function getCountryDependency($iso_code)
    {
        $localizations = array(
            'AU' => array('AU'), 'BE' => array('BE'), 'CN' => array('CN', 'MO'), 'CZ' => array('CZ'), 'DE' => array('DE'), 'ES' => array('ES'),
            'FR' => array('FR'), 'GB' => array('GB'), 'HK' => array('HK'), 'IL' => array('IL'), 'IN' => array('IN'), 'IT' => array('IT', 'VA'),
            'US' => array('US'));

        foreach ($localizations as $key => $value)
            if (in_array($iso_code, $value))
                return $key;

        return $this->getCountryDependency(self::DEFAULT_COUNTRY_ISO);
    }

    public static function getShopDomainSsl($http = false, $entities = false)
    {
        if (method_exists('Tools', 'getShopDomainSsl'))
            return Tools::getShopDomainSsl($http, $entities);
        else {
            if (!($domain = Configuration::get('PS_SHOP_DOMAIN_SSL')))
                $domain = self::getHttpHost();
            if ($entities)
                $domain = htmlspecialchars($domain, ENT_COMPAT, 'UTF-8');
            if ($http)
                $domain = (Configuration::get('PS_SSL_ENABLED') ? 'https://' : 'http://') . $domain;
            return $domain;
        }
    }

    public function install()
    {
        if (!parent::install() || !$this->registerHook('payment') ||
            !$this->registerHook('displayPayment') || !$this->registerHook('paymentReturn') || //displayPaymentEU
            !$this->registerHook('rightColumn') || !$this->registerHook('header')
        )
            return false;
        // displayBeforePayment
        Configuration::updateValue('ARYARYNET_CLIENT_ID', '');
        Configuration::updateValue('ARYARYNET_CLIENT_SECRET', '');
        Configuration::updateValue('ARYARYNET_CLIENT_PRIVATE_KEY', '');
        Configuration::updateValue('ARYARYNET_CLIENT_PUBLIC_KEY', '');
        return true;
    }

    public function uninstall()
    {
        Configuration::deleteByName('ARYARYNET_CLIENT_ID');
        Configuration::deleteByName('ARYARYNET_CLIENT_SECRET');
        Configuration::deleteByName('ARYARYNET_CLIENT_PRIVATE_KEY');
        Configuration::deleteByName('ARYARYNET_CLIENT_PUBLIC_KEY');
        return parent::uninstall();
    }

    public function getContent()
    {
        $this->_postProcess();
        $this->isAriaryNetAvailable();
        if (($id_lang = Language::getIdByIso('FR')) == 0)
            $english_language_id = (int)$this->context->employee->id_lang;
        else
            $english_language_id = (int)$id_lang;

        $this->context->smarty->assign(array(
            'arn_client_id' => $this->arn_client_id,
            'arn_client_secret' => $this->arn_client_secret,
            'arn_client_private_key' => $this->arn_private_key,
            'arn_client_public_key' => $this->arn_public_key,
            'Countries' => Country::getCountries($english_language_id),
            'default_lang_iso' => Language::getIsoById($this->context->employee->id_lang),
            'logo_ariarynet' => _MODULE_DIR_ . $this->name . '/ariarynet_50x50.png',
            'arn_save' => $this->l('Save'),
            'arn_content_online_payment' => $this->l('This module allows you to accept online payments in Ariary.'),
            'arn_content_client_id' => $this->l('AriaryNet Client ID '),
            'arn_content_client_secret' => $this->l('AriaryNet Client Secret '),
            'arn_content_client_private_key' => $this->l('AriaryNet Client Private Key '),
            'arn_content_client_public_key' => $this->l('AriaryNet Client Public Key '),
            'arn_content_congratulation_title' => $this->l(' Congratulation!! '),
            'arn_content_congratulation_live_mode' => $this->l('Your website can accept ARIARY payment now.'),
            'arn_content_error_message' => $this->l('Error on module parameters.')
        ));

        //$this->getTranslations();
        $output = $this->fetchTemplate('/views/templates/admin/back_office.tpl');
        return $output;
    }

    private function _postProcess()
    {
        if (Tools::isSubmit('submitAriarynet')) {
            if ($this->_preProcess()) {
                Configuration::updateValue('ARYARYNET_CLIENT_ID', trim(Tools::getValue('arn_client_id')));
                Configuration::updateValue('ARYARYNET_CLIENT_SECRET', trim(Tools::getValue('arn_client_secret')));
                Configuration::updateValue('ARYARYNET_CLIENT_PRIVATE_KEY', trim(Tools::getValue('arn_client_private_key')));
                Configuration::updateValue('ARYARYNET_CLIENT_PUBLIC_KEY', trim(Tools::getValue('arn_client_public_key')));

                $this->context->smarty->assign('AriaryNet_save_success', true);
            } else {
                $this->_html = $this->displayError(implode('<br />', $this->_errors)); // Not displayed at this time
                $this->context->smarty->assign('AriaryNet_save_failure', true);
            }
        }
        return $this->loadLangDefault();
    }

    private function _preProcess()
    {
        if (Tools::isSubmit('submitAriarynet')) {
            $business = Tools::getValue('arn_client_id') != '' ? Tools::getValue('arn_client_id') : false;
            $payment_method = Tools::getValue('arn_client_secret') != '' ? Tools::getValue('arn_client_secret') : false;
            $payment_capture = Tools::getValue('arn_client_private_key') != '' ? Tools::getValue('arn_client_private_key') : false;
            $sandbox_mode = Tools::getValue('arn_client_public_key') != '' ? Tools::getValue('arn_client_public_key') : false;

            if ($this->default_country === false || $sandbox_mode === false || $payment_capture === false || $business === false || $payment_method === false)
                $this->_errors[] = $this->l('Some fields are empty.');
        }

        return !count($this->_errors);
    }

    public function isAriaryNetAvailable()
    {
        if (!is_null(Configuration::get('ARYARYNET_CLIENT_PUBLIC_KEY')) && !is_null(Configuration::get('ARYARYNET_CLIENT_SECRET')) &&
            !is_null(Configuration::get('ARYARYNET_CLIENT_PRIVATE_KEY')) && !is_null(Configuration::get('ARYARYNET_CLIENT_ID'))
        ) {
            $this->arn_client_id = Configuration::get('ARYARYNET_CLIENT_ID');
            $this->arn_client_secret = Configuration::get('ARYARYNET_CLIENT_SECRET');
            return true;
        }
        return false;
    }
    
    

    public function fetchTemplate($name)
    {
        if (version_compare(_PS_VERSION_, '1.4', '<'))
            $this->context->smarty->currentTemplate = $name;
        elseif (version_compare(_PS_VERSION_, '1.5', '<')) {
            $views = 'views/templates/';
            if (@filemtime(dirname(__FILE__) . '/' . $name))
                return $this->display(__FILE__, $name);
            elseif (@filemtime(dirname(__FILE__) . '/' . $views . 'hook/' . $name))
                return $this->display(__FILE__, $views . 'hook/' . $name);
            elseif (@filemtime(dirname(__FILE__) . '/' . $views . 'front/' . $name))
                return $this->display(__FILE__, $views . 'front/' . $name);
            elseif (@filemtime(dirname(__FILE__) . '/' . $views . 'admin/' . $name))
                return $this->display(__FILE__, $views . 'admin/' . $name);
        }

        return $this->display(__FILE__, $name);
    }

    /**
     * Hooks methods
     */
    public function hookHeader()
    {

        if (method_exists($this->context->controller, 'addCSS'))
            $this->context->controller->addCSS(_MODULE_DIR_ . $this->name . '/views/css/ariarynet.css');
        else
            Tools::addCSS(_MODULE_DIR_ . $this->name . '/views/css/ariarynet.css');

        if (isset($this->context->cart) && $this->context->cart->id)
            $this->context->smarty->assign('id_cart', (int)$this->context->cart->id);

        $process = '';
        return $process;
    }

    public function getLocale()
    {
        switch (Language::getIsoById($this->context->language->id)) {
            case 'fr':
                return 'fr-fr';
            default :
                return 'fr-fr'; //'en-gb';
        }
    }

    public function hookDisplayPayment($params)
    {
        if (!$this->active)
            return;

        return $this->hookPayment($params);
    }

    public function hookPayment($parametres)
    {
        return true;
        if (!$this->active)
            return;

        //get ARIARYNET access token
        if ($this->isAriaryNetAvailable()) {
            $params = array('client_id' => $this->arn_client_id, 'client_secret' => $this->arn_client_secret, 'grant_type' => $this->arn_grant_type);
            
            $json = json_decode($this->arn_tools->curl($this->plateforme . "oauth/v2/token", $params));
            
            if (isset($json->access_token)) {
                $this->arn_token = $json->access_token;
            }
        }
        
        $customer = $this->context->customer;//new Customer(intval($cart->id_customer));
        $payment_type = "FACTURE";
        $ref_payment = $this->context->cart->id . ';' . $payment_type . ';' . date('Y-m-d-H:i:s');
        $params = json_encode(array(
            "unitemonetaire" => "Ar",
            "adresseip" => (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '0'),
            "date" => date('Y-m-d H:i:s'),
            "idpanier" => $this->context->cart->id,
            "montant" => number_format($this->context->cart->getOrderTotal(true, 3), 0, '', ''),
            "nom" => $customer->firstname . ' ' . $customer->lastname,
            "email" => $customer->email,
            "reference" => $ref_payment // ou A PERSONNALISER SUIVANT VOTRE Réf interne
        ));

        $pr = $params;
        if ($this->arn_token != '') {
            $headers = array("Authorization:Bearer " . $this->arn_token);
            $this->loadDefaults();
            $params_crypter = "";

            try {
                $params_crypter = $this->encrypteur->encrypt($params);
            } catch (Exception $e) {
                echo 'Exception reçue : ', $e->getMessage(), "\n";
            }


            $protocol_link = $this->usingSecureMode() ? 'https://' : 'http://';
            $protocol_link .= htmlspecialchars($_SERVER['HTTP_HOST'], ENT_COMPAT, 'UTF-8') . __PS_BASE_URI__;

            // STEPHANE > METTRE UN TRIM, C'EST NECESSAIRE
            $protocol_link = trim($protocol_link, '/');

			// STEPHANE > UTILISER UNE VALEUR DYNAMIQUE, C'EST AUSSI NECESSAIRE
            $params = array('site_url' => $protocol_link, 'params' => $params_crypter);
            $json = $this->arn_tools->curl($this->plateforme . "api/paiements", $params, $headers);  // *****************************************************
            
            $id_paiement = 0;
            if (isset($json) && $json) $id_paiement = $this->decrypteur->decrypt($json);

            $action_url = 'https://moncompte.ariarynet.com/payer/' . $id_paiement;

            $this->context->smarty->assign(array(
                'idpaiement' => $id_paiement, 'action_url' => $action_url
            ));
            return $this->fetchTemplate('ariarynet.tpl');
        } else {
            return $this->l("Some ARIARY.NET's parameters are missing. Please, contact the webmaster.");
        }

    }
    public function getCle() {
        return $this->arn_private_key;
    }
    
    public function getActionUrl() {
        if (!$this->active)
            return;

        //get ARIARYNET access token
        if ($this->isAriaryNetAvailable()) {

            $params = array('client_id' => $this->arn_client_id, 'client_secret' => $this->arn_client_secret, 'grant_type' => $this->arn_grant_type);

            $json = json_decode($this->arn_tools->curl($this->plateforme . "oauth/v2/token", $params));

            if (isset($json->access_token)) {
                $this->arn_token = $json->access_token;
            }
        }
        
        $customer = $this->context->customer;//new Customer(intval($cart->id_customer));
        $payment_type = "FACTURE";
        $ref_payment = $this->context->cart->id . ';' . $payment_type . ';' . date('Y-m-d-H:i:s');
        
        $params = json_encode(array(
            "unitemonetaire" => "Ar",
            "adresseip" => (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '0'),
            "date" => date('Y-m-d H:i:s'),
            "idpanier" => $this->context->cart->id,
            "montant" => number_format($this->context->cart->getOrderTotal(true, 3), 0, '', ''),
            "nom" => $customer->firstname . ' ' . $customer->lastname,
            "email" => $customer->email,
            "reference" => $ref_payment // ou A PERSONNALISER SUIVANT VOTRE Réf interne
        ));

        $pr = $params;
        if ($this->arn_token != '') {
            $headers = array("Authorization:Bearer " . $this->arn_token);
            $this->loadDefaults();
            $params_crypter = "";

            try {
                $params_crypter = $this->encrypteur->encrypt($params);
            } catch (Exception $e) {
                echo 'Exception reçue : ', $e->getMessage(), "\n";
            }


            $protocol_link = $this->usingSecureMode() ? 'https://' : 'http://';
            $protocol_link .= htmlspecialchars($_SERVER['HTTP_HOST'], ENT_COMPAT, 'UTF-8') . __PS_BASE_URI__;

            // MAHEFA > METTRE UN TRIM, C'EST NECESSAIRE
            $protocol_link = trim($protocol_link, '/');

            // MAHEFA > UTILISER UNE VALEUR DYNAMIQUE, C'EST AUSSI NECESSAIRE
            $params = array('site_url' => $protocol_link, 'params' => $params_crypter);
            $json = $this->arn_tools->curl($this->plateforme . "api/paiements", $params, $headers);  // *****************************************************
            
            $id_paiement = 0;
            if (isset($json) && $json) $id_paiement = $this->decrypteur->decrypt($json);

            $action_url = 'https://moncompte.ariarynet.com/payer/' . $id_paiement;

            return $action_url;
        } else {
            return NULL;
        }
    }

    /**
     * Check if the current page use SSL connection on not
     *
     * @return bool uses SSL
     */
    public function usingSecureMode()
    {
        if (isset($_SERVER['HTTPS']))
            return ($_SERVER['HTTPS'] == 1 || Tools::strtolower($_SERVER['HTTPS']) == 'on');
        
        if (isset($_SERVER['SSL']))
            return ($_SERVER['SSL'] == 1 || Tools::strtolower($_SERVER['SSL']) == 'on');

        return false;
    }

    public function hookPaymentReturn()
    {
        if (!$this->active)
            return null;
        $this->context->smarty->assign(array('module_template_dir' => _MODULE_DIR_ . $this->name . '/'));
        return $this->fetchTemplate('column.tpl');
    }

    public function hookLeftColumn()
    {
        return $this->hookRightColumn();
    }

    public function hookRightColumn()
    {
        $this->context->smarty->assign(array('module_template_dir' => _MODULE_DIR_ . $this->name . '/'));
        return $this->fetchTemplate('column.tpl');
    }

    public function setAriaryNetAsConfigured()
    {
        Configuration::updateValue('ARIARYNET_CONFIGURATION_OK', true);
    }

    public function getTranslations()
    {
        return false;
    }

    public function getAriaryNetURL()
    {
        return $this->plateforme;
    }

    public function getAriarynetStandardUrl()
    {
        return $this->plateforme . 'paiement/interne/';
    }

    public function getCountryCode()
    {
        $cart = new Cart((int)$this->context->cookie->id_cart);
        $address = new Address((int)$cart->id_address_invoice);
        $country = new Country((int)$address->id_country);

        return $country->iso_code;
    }

    public function formatMessage($response, &$message)
    {
        foreach ($response as $key => $value)
            $message .= $key . ': ' . $value . '<br>';
    }

    public function validateOrder($id_cart, $id_order_state, $amount_paid, $payment_method = 'ariary.net', $message = null, $transaction = array(), $currency_special = null, $dont_touch_amount = false, $secure_key = false, Shop $shop = null)
    {
        if ((int)$id_order_state != 2) {
            if ((int)$id_order_state == 9 || (int)$id_order_state == 13) {
                $id_order_state = '7';
            } else {
                $id_order_state = '2';
            }
        }
        if ($this->active) {
            
            if (version_compare(_PS_VERSION_, '1.5', '<'))
                parent::validateOrder((int)$id_cart, (int)$id_order_state, (float)$amount_paid, $payment_method, $message, $transaction, $currency_special, $dont_touch_amount, $secure_key);
            else
                $this->module->validateOrder((int)$id_cart, Configuration::get('PS_OS_PAYMENT'), (float)$amount_paid, $this->module->displayName, null, array(), $currency_special, false, $secure_key);
                
        }
    }

    /**
     * Use $this->comp instead of bccomp which is not added in all versions of PHP
     * @param float $num1 number 1 to compare
     * @param float $num2 number 2 to compare
     * @param [type] $scale [description]
     */
    public function comp($num1, $num2, $scale = null)
    {
        // check if they're valid positive numbers, extract the whole numbers and decimals
        if (!preg_match("/^\+?(\d+)(\.\d+)?$/", $num1, $tmp1) || !preg_match("/^\+?(\d+)(\.\d+)?$/", $num2, $tmp2))
            return ('0');

        // remove leading zeroes from whole numbers
        $num1 = ltrim($tmp1[1], '0');
        $num2 = ltrim($tmp2[1], '0');

        // first, we can just check the lengths of the numbers, this can help save processing time
        // if $num1 is longer than $num2, return 1.. vice versa with the next step.
        if (Tools::strlen($num1) > Tools::strlen($num2))
            return 1;
        else {
            if (Tools::strlen($num1) < Tools::strlen($num2))
                return -1;

            // if the two numbers are of equal length, we check digit-by-digit
            else {

                // remove ending zeroes from decimals and remove point
                $dec1 = isset($tmp1[2]) ? rtrim(Tools::substr($tmp1[2], 1), '0') : '';
                $dec2 = isset($tmp2[2]) ? rtrim(Tools::substr($tmp2[2], 1), '0') : '';

                // if the user defined $scale, then make sure we use that only
                if ($scale != null) {
                    $dec1 = Tools::substr($dec1, 0, $scale);
                    $dec2 = Tools::substr($dec2, 0, $scale);
                }

                // calculate the longest length of decimals
                $d_len = max(Tools::strlen($dec1), Tools::strlen($dec2));

                // append the padded decimals onto the end of the whole numbers
                $num1 .= str_pad($dec1, $d_len, '0');
                $num2 .= str_pad($dec2, $d_len, '0');

                // check digit-by-digit, if they have a difference, return 1 or -1 (greater/lower than)
                for ($i = 0; $i < Tools::strlen($num1); $i++) {
                    if ((int)$num1{$i} > (int)$num2{$i})
                        return 1;
                    elseif ((int)$num1{$i} < (int)$num2{$i})
                        return -1;
                }

                // if the two numbers have no difference (they're the same).. return 0
                return 0;
            }
        }
    }

    protected function getCurrentUrl()
    {
        $protocol_link = $this->usingSecureMode() ? 'https://' : 'http://';
        $request = $_SERVER['REQUEST_URI'];
        $pos = strpos($request, '?');

        if (($pos !== false) && ($pos >= 0))
            $request = Tools::substr($request, 0, $pos);

        $params = urlencode($_SERVER['QUERY_STRING']);

        return $protocol_link . Tools::getShopDomainSsl() . $request . '?' . $params;
    }

    protected function getARNPrivateKey()
    {
        return $this->arn_private_key;
    }

    protected function getARNPublicKey()
    {
        return $this->arn_public_key;
    }

    protected function getARNClientId()
    {
        return $this->arn_client_id;
    }

    protected function getARNClientSecret()
    {
        return $this->arn_client_secret;
    }

    private function checkCurrency($cart)
    {
        $currency_module = $this->getCurrency((int)$cart->id_currency);

        if ((int)$cart->id_currency == (int)$currency_module->id)
            return true;
        else
            return false;
    }
    public function getdisponibility($idcart){
        $ret=true;
        $idp=array();
        $cart = new Cart((int)$idcart);
        $products=$cart->getProducts($refresh = true, $id_product = false, $id_country = null);
        foreach ($products as $p){
            array_push($idp, $p['id_product']);
        }
        foreach ($idp as $i){
            $sa= new StockAvailable();
            $qty=$sa->getQuantityAvailableByProduct($i);
            if($qty<1){
                $ret=false;
            }
        }

        return $ret;
    }
}
