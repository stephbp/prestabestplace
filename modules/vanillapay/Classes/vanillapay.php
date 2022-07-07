<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Vanillapay extends PaymentModule
{
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

        $this->displayName = $this->l('AriaryNet');
        $this->description = $this->l('Accepts online payments by mobile money (Airtel Money, MVola, Orange Money) and by e-voucher Ariary.Net.');
        $this->confirmUninstall = $this->l('Are you sure you want to delete your details?');


        $this->page = basename(__FILE__, '.php');

//        if (self::isInstalled($this->name)) {
            //$this->loadDefaults();
//        }
    }
}

