<?php
/* Smarty version 3.1.43, created on 2022-06-27 14:51:02
  from 'C:\wamp64\www\bestplace\themes\theme_optima_electronic\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9a7b6d70d57_61038240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55aecb5111c7b6be2670e5b98316164b69cdd43' => 
    array (
      0 => 'C:\\wamp64\\www\\bestplace\\themes\\theme_optima_electronic\\templates\\_partials\\footer.tpl',
      1 => 1655883512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9a7b6d70d57_61038240 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer-container">

	<div class="container">	
		<div class=" footer-middle">
			  <div class="row">	
					<div class="col-sm-12 col-md-12 col-lg-4 col-xs-12">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 col-xs-12">
						<div class="row">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 col-xs-12">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

					</div>
			  </div>
		</div>
	
		
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockFooter1'),$_smarty_tpl ) );?>

</div><?php }
}
