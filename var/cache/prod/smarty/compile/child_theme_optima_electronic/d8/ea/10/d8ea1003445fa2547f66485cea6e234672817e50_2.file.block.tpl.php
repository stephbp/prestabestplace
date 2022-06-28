<?php
/* Smarty version 3.1.43, created on 2022-06-27 14:51:01
  from 'C:\wamp64\www\bestplace\modules\posstaticblocks\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9a7b53b3793_00839740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ea1003445fa2547f66485cea6e234672817e50' => 
    array (
      0 => 'C:\\wamp64\\www\\bestplace\\modules\\posstaticblocks\\block.tpl',
      1 => 1655883511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9a7b53b3793_00839740 (Smarty_Internal_Template $_smarty_tpl) {
?>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staticblocks']->value, 'block', false, 'key');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	  <?php if ($_smarty_tpl->tpl_vars['block']->value['active'] == 1) {?>
		  <p class ="title_block"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['block']->value['title'];
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable1),$_smarty_tpl ) );?>
 </p>
		
	  <?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

	  <?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module'] == 1) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

	   <?php }?>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
