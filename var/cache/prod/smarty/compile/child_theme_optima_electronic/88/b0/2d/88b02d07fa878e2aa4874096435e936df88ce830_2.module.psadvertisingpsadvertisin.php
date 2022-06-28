<?php
/* Smarty version 3.1.43, created on 2022-06-27 15:22:44
  from 'module:psadvertisingpsadvertisin' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9af2411b5b5_68534251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b02d07fa878e2aa4874096435e936df88ce830' => 
    array (
      0 => 'module:psadvertisingpsadvertisin',
      1 => 1655883512,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9af2411b5b5_68534251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="advertising">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"/></a>
</div>
<?php }
}
