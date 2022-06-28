<?php
/* Smarty version 3.1.43, created on 2022-06-27 15:22:42
  from 'C:\wamp64\www\bestplace\themes\theme_optima_electronic\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9af22e31213_10267623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c436d09c22eac299cf98648ca8911e853040557' => 
    array (
      0 => 'C:\\wamp64\\www\\bestplace\\themes\\theme_optima_electronic\\templates\\catalog\\listing\\category.tpl',
      1 => 1655883512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9af22e31213_10267623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138357169462b9af22e13df4_08268233', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_138357169462b9af22e13df4_08268233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_138357169462b9af22e13df4_08268233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-category card card-block hidden-sm-down">
		<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
		<div class="category-desc">
		  	<h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
			<div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
		</div>
		<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?>
        <div class="category-cover">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
        </div>
      <?php }?>
	  <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    </div>
    <div class="text-sm-center hidden-md-up">
      <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
