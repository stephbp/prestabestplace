{*
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
*  @author    BUSINESS INFORMATICS <ariary@ariary.net>
*  @copyright 2016 BUSINESS INFORMATICS 
*  @license	http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="ariarynet-wrapper">

	{* AriaryNet configuration page header *}

	<div class="box half left">
		{if isset($logo_ariarynet)}
			<img src="{$logo_ariarynet}" alt="" style="margin-bottom: -5px" />
		{/if}
		<p id="ariarynet-slogan"> <span class="light">{$arn_content_online_payment}</span></p>
	</div>
	
	<div class="clear"></div><hr />
	<div class="box">
	{l s='Download the ' mod='ariarynet'}<a href="http://www.ariarynet.com/integration" target="_blank"> {l s='AriaryNet Integration Guide' mod='ariarynet'}</a> {l s=' and follow the configuration step by step.' mod='ariarynet'}
		
	</div>
	<div class="clear"></div><hr>

	<form method="post" action="{$smarty.server.REQUEST_URI|escape:'htmlall':'UTF-8'}" id="ariarynet_configuration">
		{* AriaryNet configuration blocks *}

		{* ENABLE YOUR ONLINE SHOP TO PROCESS PAYMENT *}
		<div class="box " id="credentials">
			<div id="configuration">
				<div class="clear"></div>

				<h4>ARIARY.NET CONFIGURATION : </h4>

				<div>
					
					<div id="ariarynet_login_configuration">
						
						<dl>
							<dt>
								{$arn_content_client_id|escape:'htmlall':'UTF-8'}
							</dt>
							<dd>
								<input type="text" name="arn_client_id" value="{$arn_client_id}" autocomplete="off" size="85">
							</dd>
							<dt>
								{$arn_content_client_secret|escape:'htmlall':'UTF-8'}
							</dt>
							<dd>
								<input type="text" name="arn_client_secret" value="{$arn_client_secret}" autocomplete="off" size="85">
							</dd>
							
							<dt>
								{$arn_content_client_private_key|escape:'htmlall':'UTF-8'}
							</dt>
							<dd>
								<input type="text" name="arn_client_private_key" value="{$arn_client_private_key}" autocomplete="off" size="85">
							</dd>
							
							<dt>
								{$arn_content_client_public_key|escape:'htmlall':'UTF-8'}
							</dt>
							<dd>
								<input type="text" name="arn_client_public_key" value="{$arn_client_public_key}" autocomplete="off" size="85">
							</dd>
						</dl>
						<div class="clear"></div>
					</div>
				</div>
				<br />
			</div>

			<input type="hidden" name="submitAriarynet" value="ariarynet_configuration" />
			<input type="submit" name="submitButton" value=" {$arn_save} " id="ariarynet_submit" />
			
			{if isset($AriaryNet_save_success)}
			<div class="box " id="ariarynet-save-success">
				<h3>{$arn_content_congratulation_title|escape:'htmlall':'UTF-8'}</h3>
				<p>{$arn_content_congratulation_live_mode|escape:'htmlall':'UTF-8'}</p>
				
			</div>
			{/if}
			{if isset($AriaryNet_save_failure)}
			<div class="box " id="ariarynet-save-failure">
				<h3>{l s='Error !' mod='ariarynet'}</h3>
				<p>{$arn_content_error_message|escape:'htmlall':'UTF-8'}</p>
			</div>
			{/if}

			<hr />
		</div>
	</form>

</div>
