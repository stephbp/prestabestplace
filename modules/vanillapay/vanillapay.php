<?php
/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    lie.lucas.razafindrambo@esti.mg
 *  @copyright 2020 RAZAFINDRAMBOA Lié Lucas Angie
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class vanillapay extends PaymentModule
{
    protected $_html;

    public function __construct()
    {
        $this->author    = 'Vanilla Pay';
        $this->name      = 'vanillapay';
        $this->tab       = 'payment_gateways';
        $this->version   = '1.1.0';
        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Vanilla Pay');
        $this->description = $this->l('Accepts online payments by mobile money (Airtel Money, MVola, Orange Money) and by e-voucher Ariary.Net.');
    }

    public function install()
    {
        if (!parent::install()
            || !$this->registerHook('paymentOptions')
            || !$this->registerHook('paymentReturn')
        ) {
            return false;
        }
        return true;
    }

    /**
     * Uninstall this module and remove it from all hooks
     *
     * @return bool
     */
    public function uninstall()
    {
        return parent::uninstall();
    }

    /**
     * Affichage du paiement dans le checkout
     * PS 17
     * @param type $params
     * @return type
     */
    public function hookPaymentOptions($params) {

        if (!$this->active) {
            return;
        }

        //Paiement Standard sans passerelle
        $standardPayment = new PaymentOption();

        //Inputs supplémentaires (utilisé idéalement pour des champs cachés )
        $inputs = [
            [
                'name' => 'custom_hidden_value',
                'type' => 'hidden',
                'value' => '30'
            ],
            [
                'name' => 'id_customer',
                'type' => 'hidden',
                'value' => $this->context->customer->id,
            ],
        ];
        //var_dump($this->context->link->getModuleLink($this->name, 'api', array(), true));
        $standardPayment->setModuleName($this->name)
            //Logo de paiement
                        ->setLogo($this->context->link->getBaseLink().'/modules/vanillapay/views/img/logo.png')
                        ->setInputs($inputs)
            //->setBinary() Utilisé si une éxécution de binaire est nécessaires ( module atos par ex )
            //Texte de description
                        ->setCallToActionText($this->l('Vanilla Pay'))
                        ->setAction($this->context->link->getModuleLink($this->name, 'api', array(), true))
            //Texte informatif supplémentaire
                        ->setAdditionalInformation($this->fetch('module:vanillapay/views/templates/hook/displayPayment.tpl'));


        //Paiement API type bancaire
        //Variables pour paiement API
        $this->smarty->assign(
            $this->getPaymentApiVars()
        );


        return [$standardPayment];
    }

    /**
     * Information de paiement api
     * @return array
     */
    public function getPaymentApiVars()
    {
        return  [
            'arn_client_id' => Configuration::get('ARYARYNET_CLIENT_ID'),
            'arn_client_secret' => Configuration::get('ARYARYNET_CLIENT_SECRET'),
            'arn_client_private_key' => Configuration::get('ARYARYNET_CLIENT_PRIVATE_KEY'),
            'arn_client_public_key' => Configuration::get('ARYARYNET_CLIENT_PUBLIC_KEY'),
            'id_cart' => $this->context->cart->id,
            'cart_total' =>  $this->context->cart->getOrderTotal(true, Cart::BOTH),
            'id_customer' => $this->context->cart->id_customer,
        ];
    }

    /**
     * Affichage du message de confirmation de la commande
     * @param type $params
     * @return type
     */
    public function hookDisplayPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        $this->smarty->assign(
            $this->getTemplateVars()
        );
        return $this->fetch('module:vanillapay/views/templates/hook/payment_return.tpl');
    }

    /**
     * Configuration admin du module
     */
    public function getContent()
    {
        $this->_html .=$this->postProcess();
        $this->_html .= $this->renderForm();

        return $this->_html;

    }

    /**
     * Traitement de la configuration BO
     * @return type
     */
    public function postProcess()
    {
        if ( Tools::isSubmit('SubmitPaymentConfiguration'))
        {
            Configuration::updateValue('ARYARYNET_CLIENT_ID', trim(Tools::getValue('ARYARYNET_CLIENT_ID')));
            Configuration::updateValue('ARYARYNET_CLIENT_SECRET', trim(Tools::getValue('ARYARYNET_CLIENT_SECRET')));
            Configuration::updateValue('ARYARYNET_CLIENT_PRIVATE_KEY', trim(Tools::getValue('ARYARYNET_CLIENT_PRIVATE_KEY')));
            Configuration::updateValue('ARYARYNET_CLIENT_PUBLIC_KEY', trim(Tools::getValue('ARYARYNET_CLIENT_PUBLIC_KEY')));
            Configuration::updateValue('ARYARYNET_SITE_URL', trim(Tools::getValue('ARYARYNET_SITE_URL')));
            Configuration::updateValue('ARYARYNET_HEXA', trim(Tools::getValue('ARYARYNET_HEXA')));
        }
        return $this->displayConfirmation($this->l('Configuration updated with success'));
    }

    /**
     * Formulaire de configuration admin
     */
    public function renderForm()
    {
        $fields_form = [
            'form' => [
                'legend' => [
                    'title' => $this->l('Payment Configuration'),
                    'icon' => 'icon-cogs'
                ],
                'description' => $this->l('Sample configuration form'),
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('Client Id'),
                        'name' => 'ARYARYNET_CLIENT_ID',
                        'required' => true,
                        'empty_message' => $this->l('Please fill the payment api url'),
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Client Secret'),
                        'name' => 'ARYARYNET_CLIENT_SECRET',
                        'required' => true,
                        'empty_message' => $this->l('Please fill the payment api success url'),
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Client Private Key'),
                        'name' => 'ARYARYNET_CLIENT_PRIVATE_KEY',
                        'required' => true,
                        'empty_message' => $this->l('Please fill the payment api error url'),
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Client Public Key'),
                        'name' => 'ARYARYNET_CLIENT_PUBLIC_KEY',
                        'required' => true,
                        'empty_message' => $this->l('Please fill the payment api error url'),
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Site URL'),
                        'name' => 'ARYARYNET_SITE_URL',
                        'required' => true,
                        'empty_message' => $this->l('Please fill the payment api error url'),
                    ],
                    [
                        'type' => 'switch',
                        'label' => $this->l('Type Hexa'),
                        'name' => 'ARYARYNET_HEXA',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'include_category_product_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'include_category_product_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        )
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Save'),
                    'class' => 'button btn btn-default pull-right',
                ],
            ],
        ];

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->id = 'vanillapay';
        $helper->identifier = 'vanillapay';
        $helper->submit_action = 'SubmitPaymentConfiguration';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = [
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        ];

        return $helper->generateForm(array($fields_form));
    }

    /**
     * Récupération des variables de configuration du formulaire admin
     */
    public function getConfigFieldsValues()
    {
        return [
            'ARYARYNET_CLIENT_ID' => Tools::getValue('ARYARYNET_CLIENT_ID', Configuration::get('ARYARYNET_CLIENT_ID')),
            'ARYARYNET_CLIENT_SECRET' => Tools::getValue('ARYARYNET_CLIENT_SECRET', Configuration::get('ARYARYNET_CLIENT_SECRET')),
            'ARYARYNET_CLIENT_PRIVATE_KEY' => Tools::getValue('ARYARYNET_CLIENT_PRIVATE_KEY', Configuration::get('ARYARYNET_CLIENT_PRIVATE_KEY')),
            'ARYARYNET_CLIENT_PUBLIC_KEY' => Tools::getValue('ARYARYNET_CLIENT_PUBLIC_KEY', Configuration::get('ARYARYNET_CLIENT_PUBLIC_KEY')),
            'ARYARYNET_SITE_URL' => Tools::getValue('ARYARYNET_SITE_URL', Configuration::get('ARYARYNET_SITE_URL')),
            'ARYARYNET_HEXA' => Tools::getValue('ARYARYNET_HEXA', Configuration::get('ARYARYNET_HEXA')),
        ];
    }


    /**
     * Récupération des informations du template
     * @return array
     */
    public function getTemplateVars()
    {
        return [
            'shop_name' => $this->context->shop->name,
            'custom_var' => $this->l('My custom var value'),
            'payment_details' => $this->l('custom details'),
        ];
    }

}