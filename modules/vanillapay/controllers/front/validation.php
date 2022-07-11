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
 */
include_once(_PS_MODULE_DIR_ . 'vanillapay/Crypt/TripleDES.php');
include_once(_PS_MODULE_DIR_ . 'vanillapay/Classes/ariarynet.php'); 
include_once(_PS_MODULE_DIR_ . 'vanillapay/Classes/validation.php'); 
include_once(_PS_MODULE_DIR_ . 'vanillapay/Classes/Pusher.php'); 
class vanillapayvalidationModuleFrontController extends ModuleFrontController
{
    /**
     * Validation du paiement standard
     * Puis redirection vers la page de succès de commande
     */
    public function postProcess()
    {
        $pusher = new Pusher("cc4f5acb1e289d9a3449", "7669ab34e84ab43a5280", "55320", array('cluster' => 'mt1'));
        $encrypteur = new Crypt_TripleDES();
        $encrypteur->setKey(Configuration::get('ARYARYNET_CLIENT_PUBLIC_KEY'));
        $decrypteur = new Crypt_TripleDES();
        $decrypteur->setKey(Configuration::get('ARYARYNET_CLIENT_PRIVATE_KEY'));
        $id_paiement_crypter = $_GET['idpaiement'];
        $id_paiement = $decrypteur->decrypt($id_paiement_crypter);
        $paramstkn = array('client_id' => Configuration::get('ARYARYNET_CLIENT_ID'), 'client_secret' => Configuration::get('ARYARYNET_CLIENT_SECRET'), 'grant_type' => 'client_credentials');
        $json = json_decode($this->curl("https://pro.ariarynet.com/oauth/v2/token", $paramstkn));

        if (Configuration::get('ARYARYNET_HEXA') == 1) {
            $resultat = $decrypteur->decrypt(hex2bin(Tools::getValue("resultat")));
            $idpanier = $decrypteur->decrypt(hex2bin(Tools::getValue("idpanier")));
            $montant = $decrypteur->decrypt(hex2bin(Tools::getValue("montant")));
            $reference = $decrypteur->decrypt(hex2bin(Tools::getValue("ref_int")));
            $reference_arn = $decrypteur->decrypt(hex2bin(Tools::getValue("ref_arn")));
            $code_arn = $decrypteur->decrypt(hex2bin(Tools::getValue("code_arn")));
        } else {
            $resultat = $decrypteur->decrypt(Tools::getValue("resultat"));
            $idpanier = $decrypteur->decrypt(Tools::getValue("idpanier"));
            $montant = $decrypteur->decrypt(Tools::getValue("montant"));
            $reference = $decrypteur->decrypt(Tools::getValue("ref_int"));
            $reference_arn = $decrypteur->decrypt(Tools::getValue("ref_arn"));
            $code_arn = $decrypteur->decrypt(Tools::getValue("code_arn"));
        }

        $cart = new Cart($idpanier);
        $customer = new Customer($cart->id_customer);
        $ariarynet = new AriaryNet();
        $currency=new Currency($ariarynet->context->currency->id);
        $this->module->validateOrder((int)$cart->id, Configuration::get('PS_OS_PAYMENT'), $montant, $this->module->displayName, null, array(), (int)$currency->id, false, $customer->secure_key);
        $pusher->trigger('channel_lucas', 'notification_lucas', array('message' => 'Payment success'));
        
    }
    
    public function curl($url,$params,$headers=array())
	{
		$curl=curl_init();
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($curl, CURLOPT_POST,1);
		curl_setopt($curl, CURLOPT_POSTFIELDS,$params);
		curl_setopt($curl, CURLOPT_URL, $url);
		$result=curl_exec($curl);
		curl_close($curl);
		return $result;
	}
    
    

}