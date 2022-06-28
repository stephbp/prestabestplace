<?php
/* Smarty version 3.1.43, created on 2022-06-27 15:07:04
  from 'module:poslistcateproductviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9ab78368da1_13885329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe812a12ccbffa04c0ebdb69e5e979e04e19ab3' => 
    array (
      0 => 'module:poslistcateproductviewste',
      1 => 1655883512,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_62b9ab78368da1_13885329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('count', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productCates']->value, 'productCate', false, NULL, 'poslistcateproduct', array (
));
$_smarty_tpl->tpl_vars['productCate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->do_else = false;
?>
<div class="poslistcateproduct poslistcateproduct_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8');?>
 product_container"
		data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['number_item'], ENT_QUOTES, 'UTF-8');?>
" 
		data-speed="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide'], ENT_QUOTES, 'UTF-8');?>
"
		data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_play'], ENT_QUOTES, 'UTF-8');?>
"
		data-time="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_time'], ENT_QUOTES, 'UTF-8');?>
"
		data-arrow="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_arrow'], ENT_QUOTES, 'UTF-8');?>
"
		data-pagination="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_pagination'], ENT_QUOTES, 'UTF-8');?>
"
		data-move="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['move'], ENT_QUOTES, 'UTF-8');?>
"
		data-pausehover="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['pausehover'], ENT_QUOTES, 'UTF-8');?>
"
		data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_md'], ENT_QUOTES, 'UTF-8');?>
"
		data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_sm'], ENT_QUOTES, 'UTF-8');?>
"
		data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
"
		data-xxs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xxs'], ENT_QUOTES, 'UTF-8');?>
">
		
			<div class="pos_title">
					<h2>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productCate']->value['category_name'], ENT_QUOTES, 'UTF-8');?>

						<span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add listcateproduct to weekly line up','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
					</h2>
				
				
					<?php if ($_smarty_tpl->tpl_vars['productCate']->value['list_subcategories']) {?>
						<ul class="subcategories-list">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productCate']->value['list_subcategories'], 'subcategories');
$_smarty_tpl->tpl_vars['subcategories']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategories']->value) {
$_smarty_tpl->tpl_vars['subcategories']->do_else = false;
?>
							<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategories']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategories']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					
					<?php }?>
			</div>
				
			<div class="pos_content">		
					<div class="row">
						
						<div class="col-xs-12 col-md-12 col-lg-4 box1">
							<?php if ($_smarty_tpl->tpl_vars['productCate']->value['description']) {?>
							  <div class="description-list">
								<?php echo $_smarty_tpl->tpl_vars['productCate']->value['description'];?>

							  </div>
							<?php }?>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-8  box2">
							<div class="listcateSlide owl-carousel">		
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productCate']->value['product'], 'product', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>					
									<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%$_smarty_tpl->tpl_vars['slider_options']->value['rows'] == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
									<div class="item-product">
									<?php }?>
										<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>

									<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['slider_options']->value['rows'] == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
										</div>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								
							</div>
						</div>
						
					</div>
			</div>
	
						
	</div>
	<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
