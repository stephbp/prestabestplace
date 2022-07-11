
<?php
/**
 * 2007-2015 PrestaShop
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2015 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

include_once(dirname(__FILE__) . '/../../config/config.inc.php');
include_once(_PS_MODULE_DIR_ . 'vanillapay/Classes/ariarynet.php');
require_once(_PS_MODULE_DIR_ . 'vanillapay/Classes/Pusher.php');


/*
 * Instant payment notification class.
 * (wait for ARIARYNET payment confirmation, then validate order)
 */

class AriaryNetIPN extends AriaryNet
{
    private $encrypter;
    private $decrypter;

    public function __construct()
    {
        parent::__construct();
    }

    public function getIPNTransactionDetails()
    {
        
        $this->loadTools();
        $id_paiement_crypter = Tools::getValue("idpaiement");
        $id_paiement = $this->decrypter->decrypt($id_paiement_crypter);
        $params = json_encode(array('idpaiement' => $id_paiement));
        try {
            $params_crypter = $this->encrypter->encrypt($params);
        } catch (Exception $e) {
            throw new Exception('Exception reçue : ', $e->getMessage(), "\n");
        }
        $protocol_link = $this->usingSecureMode() ? 'https://' : 'http://';
        $protocol_link .= htmlspecialchars($_SERVER['HTTP_HOST'], ENT_COMPAT, 'UTF-8') . __PS_BASE_URI__;
        $pusher = new Pusher("cc4f5acb1e289d9a3449", "7669ab34e84ab43a5280", "55320", array('cluster' => 'mt1'));
        $paramstkn = array('client_id' => $this->getARNClientId(), 'client_secret' => $this->getARNClientSecret(), 'grant_type' => $this->arn_grant_type);
        $json = json_decode($this->arn_tools->curl("https://pro.ariarynet.com/oauth/v2/token", $paramstkn));
        if (isset($json->access_token)) $arn_token = $json->access_token;
        $headers = array("Authorization:Bearer " . $arn_token);
        $resultat = $this->decrypter->decrypt(Tools::getValue("resultat"));
        $idpanier = $this->decrypter->decrypt(Tools::getValue("idpanier"));
        $montant = $this->decrypter->decrypt(Tools::getValue("montant"));
        $reference = $this->decrypter->decrypt(Tools::getValue("ref_int"));
        $reference_arn = $this->decrypter->decrypt(Tools::getValue("ref_arn"));
        $code_arn = $this->decrypter->decrypt(Tools::getValue("code_arn"));

        $pusher->trigger('channel_tout', 'notification_tout', array('message' => "Tonga eto"));

        if ($resultat == "success") {
            if ($idpanier == '') {
                $idpanier = $reference;
            }
            $isDispo = (boolean)$this->getdisponibility($idpanier);
            $msgavant = 'AVANT :  -dispo==' . $isDispo . ' - idcart:' . $idpanier . ' - resultat : ' . $resultat . ' - TransId : ' . $reference . ' - Ref_arn:' . $reference_arn . '-  _PS_OS_PAYMENT_: ' . _PS_OS_PAYMENT_ . ' - code_arn:' . $code_arn . '<br />';
            $pusher->trigger('channel_tout', 'notification_tout', array('message' => $msgavant));
            $this->validateOrder($idpanier, _PS_OS_PAYMENT_, $montant, $this->displayName, $msgavant);
            $msgapres = 'APRES : dispo==' . $isDispo . ' - idcart:' . $idpanier . ' - resultat : ' . $resultat . ' - TransId : ' . $reference . ' - Ref_arn:' . $reference_arn . '-  _PS_OS_PAYMENT_: ' . _PS_OS_PAYMENT_ . ' - code_arn:' . $code_arn . '<br />';
            $pusher->trigger('channel_tout', 'notification_tout', array('message' => $msgapres));
            
        }
    }

    protected function loadTools()
    {
        $this->active = true;

        $this->arn_tools = new AriaryNetTools($this->name);

        $arn_private_key = $this->getARNPrivateKey();
        $arn_public_key = $this->getARNPublicKey();

        $this->encrypter = new Crypt_TripleDES();
        $this->encrypter->setKey($arn_public_key);

        $this->decrypter = new Crypt_TripleDES();
        $this->decrypter->setKey($arn_private_key);
    }

    public function checkServer()
    {
        $authorized_ips = array('54.72.131.56');
        $unauthorized_server = true;
        //echo $_SERVER['REMOTE_ADDR'];
        foreach ($authorized_ips as $authorized_ip) {
            if ($_SERVER['REMOTE_ADDR'] == $authorized_ip) {
                $unauthorized_server = false;
                break;
            }
        }
        if ($unauthorized_server) {
            $errors .= 'Unauthorized server : ' . $_SERVER['REMOTE_ADDR'];
            return false;
        }

        return true;
    }

}
$ipn = new AriaryNetIPN();

$ipn->getIPNTransactionDetails();

if (Tools::getIsset('idpaiement')) {
    $ipn = new AriaryNetIPN();
    //$ipn->checkServer();
    if ($ipn->isAriaryNetAvailable()) {

        $ipn->getIPNTransactionDetails();

    }

}