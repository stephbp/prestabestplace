<?php
/* Smarty version 3.1.43, created on 2022-06-27 14:51:03
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9a7b70ee9a7_33814335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1655883512,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9a7b70ee9a7_33814335 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer_block links">
	<div class="ft_newsletter">
		<div class="content_newsletter">
			
			<h3>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</h3>
			
			<div class="block_content">
				<p class="newletter-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our e-mail to get latest news.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
				
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="input-wrapper">
						<input
							class="input_txt"
							name="email"
							type="email"
							value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
							placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
						>
						<input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" />
						<input type="hidden" name="action" value="0">
						<div class="clearfix"></div>
					</div>
					<button class="btn btn-primary" name="submitNewsletter" type="submit" value=""><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
					<input type="hidden" name="action" value="0">
				</form>
				
				<div class="col-xs-12">
				  <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
					<p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
					  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

					</p>
				  <?php }?>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
