<?php
/* Smarty version 3.1.43, created on 2022-06-27 14:51:01
  from 'C:\wamp64\www\bestplace\themes\theme_optima_electronic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9a7b5151b62_85096747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e43ab5118482cd5af8e5e86ee1d0181b805f2b' => 
    array (
      0 => 'C:\\wamp64\\www\\bestplace\\themes\\theme_optima_electronic\\templates\\_partials\\header.tpl',
      1 => 1655883512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9a7b5151b62_85096747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67750650462b9a7b5105f60_70838460', 'header_top');
?>

<?php }
/* {block 'header_top'} */
class Block_67750650462b9a7b5105f60_70838460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_67750650462b9a7b5105f60_70838460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="mobile_header">
	<div class="container">
		<div class="hidden-lg-up  mobile">
			<div class="row row-mobile">
				<div class="mobile-left col-mobile col-md-4 col-xs-4">
					<div class="float-xs-left" id="menu-icon">
						<i class="material-icons d-inline">&#xE5D2;</i>
					</div>
					<div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
						
						<div id="_mobile_staticnav"></div>	
						<div id="_mobile_language_selector"></div>	
						<div id="_mobile_currency_selector"></div>	
						<div class="menu-close"> 
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <i class="material-icons float-xs-right">arrow_back</i>
						</div>
						<div class="menu-tabs">							
							<div class="js-top-menu-bottom">												
								<div id="_mobile_megamenu"></div>
								<div id="_mobile_vegamenu"></div>
								
							</div>
						</div>
					 </div>
				</div>
				<div class="mobile-center col-mobile col-md-4 col-xs-4">
					<div id="_mobile_logo"></div>
				</div>
				<div class="mobile-right col-mobile col-md-4 col-xs-4">
					<div id="_mobile_cart_block"></div>
					<div id="_mobile_user_info"></div>
				</div>
				<div id="_mobile_search_category"></div>
				<div id="_mobile_staticnav1"></div>	
			</div>
			
		</div>
	</div>
</div>
<div class="nav hidden-md-down">
	<div class="container">
		 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

	</div>
</div>

 <div class="header-top hidden-md-down">
	<div class="container">
		<div class="row">
			
			<div class="header_logo col col-left col-md-2" id="_desktop_logo">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
						<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
					</a>
					<?php } else { ?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
						<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
					</a>
				<?php }?>
			</div>
			
			<div class=" col col-right col-md-10 col-sm-12 position-static">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
 </div>
 <div class="bottom_header hidden-md-down">
	<div class="container">
		<div class="row">
			<div class="col col-left col-md-3">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayVegamenu'),$_smarty_tpl ) );?>

			</div>
			<div class=" col col-right col-md-9 col-sm-12 ">			
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenu'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
 </div>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
