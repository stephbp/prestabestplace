<?php
/* Smarty version 3.1.43, created on 2022-06-27 15:20:39
  from 'C:\wamp64\www\bestplace\themes\theme_optima_electronic\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62b9aea7f037c5_54661555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d2e9c3e2a37f5529a90f1d9dc81a71e52ce5ed' => 
    array (
      0 => 'C:\\wamp64\\www\\bestplace\\themes\\theme_optima_electronic\\templates\\catalog\\product.tpl',
      1 => 1655883512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_62b9aea7f037c5_54661555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180748465862b9aea7d8a0d9_06097409', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48926143062b9aea7d92019_05946214', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76631354262b9aea7dc4fa4_74292479', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_180748465862b9aea7d8a0d9_06097409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_180748465862b9aea7d8a0d9_06097409',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"> 
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_48926143062b9aea7d92019_05946214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_48926143062b9aea7d92019_05946214',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_cover_tumbnails'} */
class Block_114472407662b9aea7dcd244_29088739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_149687575862b9aea7dcb526_72879989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114472407662b9aea7dcd244_29088739', 'product_cover_tumbnails', $this->tplIndex);
?>

					<div class="scroll-box-arrows">
						<i class="material-icons left">&#xE314;</i>
						<i class="material-icons right">&#xE315;</i>
					</div>

					<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_178819810262b9aea7dc97f1_85514964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<section class="page-content" id="content">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149687575862b9aea7dcb526_72879989', 'page_content', $this->tplIndex);
?>

				</section>
				<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_93260092462b9aea7dd9d98_38673029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_206464747462b9aea7dd8098_26041424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<h1 class="h1 namne_details" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93260092462b9aea7dd9d98_38673029', 'page_title', $this->tplIndex);
?>
</h1>
				<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_97559589062b9aea7dd6346_63225961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206464747462b9aea7dd8098_26041424', 'page_header', $this->tplIndex);
?>

				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</p>
				<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_208639871762b9aea7deb6b4_08438031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_161822025062b9aea7df0487_08646054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
					<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_124910700262b9aea7e054f2_88737411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
					<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_198138639962b9aea7e1b0e5_37413076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_190368444462b9aea7e2b6b5_65025983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
								<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_146705933162b9aea7e1fea8_46889015 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
							<section class="product-pack">
								<h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190368444462b9aea7e2b6b5_65025983', 'product_miniature', $this->tplIndex);
?>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</section>
							<?php }?>
							<?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_177221860062b9aea7e3be90_05396821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_128834205362b9aea7e413d8_02497686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_58994077262b9aea7e48b80_86485502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
							<?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_121952804762b9aea7e0fcb0_77885024 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
							<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
							<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
							<input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198138639962b9aea7e1b0e5_37413076', 'product_variants', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146705933162b9aea7e1fea8_46889015', 'product_pack', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177221860062b9aea7e3be90_05396821', 'product_discounts', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128834205362b9aea7e413d8_02497686', 'product_add_to_cart', $this->tplIndex);
?>


							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58994077262b9aea7e48b80_86485502', 'product_refresh', $this->tplIndex);
?>

						</form>
						<?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_74187467162b9aea7e84845_35553198 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
						<?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_47618950362b9aea7e8b3e0_30456188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_207974859062b9aea7e91f92_17566677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
					<div class="tab-pane fade in" id="attachments">
						<section class="product-attachments">
							<h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
							<div class="attachment">
								<h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
								<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
								</a>
							</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</section>
					</div>
					<?php }?>
					<?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_miniature'} */
class Block_69938808162b9aea7edb340_35991086 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="item-product">
								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
							</div>
						<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_136359575962b9aea7ed17c2_82242127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
			<div class="pos_title">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'related products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
			</div>
			<div class="pos_content">
				<div class="product_accessoriesslide">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69938808162b9aea7edb340_35991086', 'product_miniature', $this->tplIndex);
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_185554266162b9aea7ee4241_48335726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

	<?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_97555624462b9aea7eea6b2_82280377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_54912308062b9aea7ef1370_24840328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<!-- Footer content -->
		<?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_54054339462b9aea7eef521_67832227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<footer class="page-footer">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54912308062b9aea7ef1370_24840328', 'page_footer', $this->tplIndex);
?>

	</footer>
	<?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_76631354262b9aea7dc4fa4_74292479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_76631354262b9aea7dc4fa4_74292479',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_178819810262b9aea7dc97f1_85514964',
  ),
  'page_content' => 
  array (
    0 => 'Block_149687575862b9aea7dcb526_72879989',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_114472407662b9aea7dcd244_29088739',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_97559589062b9aea7dd6346_63225961',
  ),
  'page_header' => 
  array (
    0 => 'Block_206464747462b9aea7dd8098_26041424',
  ),
  'page_title' => 
  array (
    0 => 'Block_93260092462b9aea7dd9d98_38673029',
  ),
  'product_prices' => 
  array (
    0 => 'Block_208639871762b9aea7deb6b4_08438031',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_161822025062b9aea7df0487_08646054',
  ),
  'product_customization' => 
  array (
    0 => 'Block_124910700262b9aea7e054f2_88737411',
  ),
  'product_buy' => 
  array (
    0 => 'Block_121952804762b9aea7e0fcb0_77885024',
  ),
  'product_variants' => 
  array (
    0 => 'Block_198138639962b9aea7e1b0e5_37413076',
  ),
  'product_pack' => 
  array (
    0 => 'Block_146705933162b9aea7e1fea8_46889015',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_190368444462b9aea7e2b6b5_65025983',
    1 => 'Block_69938808162b9aea7edb340_35991086',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_177221860062b9aea7e3be90_05396821',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_128834205362b9aea7e413d8_02497686',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_58994077262b9aea7e48b80_86485502',
  ),
  'product_description' => 
  array (
    0 => 'Block_74187467162b9aea7e84845_35553198',
  ),
  'product_details' => 
  array (
    0 => 'Block_47618950362b9aea7e8b3e0_30456188',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_207974859062b9aea7e91f92_17566677',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_136359575962b9aea7ed17c2_82242127',
  ),
  'product_footer' => 
  array (
    0 => 'Block_185554266162b9aea7ee4241_48335726',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_97555624462b9aea7eea6b2_82280377',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_54054339462b9aea7eef521_67832227',
  ),
  'page_footer' => 
  array (
    0 => 'Block_54912308062b9aea7ef1370_24840328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
	<div class="primary_block">
		<div class="row">
			<div class="col-md-5">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178819810262b9aea7dc97f1_85514964', 'page_content_container', $this->tplIndex);
?>

			</div>
			<div class="col-md-7">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97559589062b9aea7dd6346_63225961', 'page_header_container', $this->tplIndex);
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewsProduct'),$_smarty_tpl ) );?>

					
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208639871762b9aea7deb6b4_08438031', 'product_prices', $this->tplIndex);
?>

				
				<div class="product-information">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161822025062b9aea7df0487_08646054', 'product_description_short', $this->tplIndex);
?>


					<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124910700262b9aea7e054f2_88737411', 'product_customization', $this->tplIndex);
?>

					<?php }?>

					<div class="product-actions">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121952804762b9aea7e0fcb0_77885024', 'product_buy', $this->tplIndex);
?>


					</div>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				</div>
			</div>
		
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="tabs">
				<ul class="nav nav-tabs">
	
					<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
					<li class="nav-item">
						<a class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab" href="#description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
					</li>
					<?php }?>
					<li class="nav-item">
						<a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab" href="#product-details"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
					</li>
		
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ProductTab'),$_smarty_tpl ) );?>

			
					<?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
					</li>
					<?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>

				<div class="tab-content" id="tab-content">
					<div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="description">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74187467162b9aea7e84845_35553198', 'product_description', $this->tplIndex);
?>

					</div>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47618950362b9aea7e8b3e0_30456188', 'product_details', $this->tplIndex);
?>

					<div class="tab-pane fade in" id="idTab5">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ProductTabContent'),$_smarty_tpl ) );?>

					</div>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207974859062b9aea7e91f92_17566677', 'product_attachments', $this->tplIndex);
?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
					<div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
						<?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

					</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	</div>
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136359575962b9aea7ed17c2_82242127', 'product_accessories', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185554266162b9aea7ee4241_48335726', 'product_footer', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97555624462b9aea7eea6b2_82280377', 'product_images_modal', $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54054339462b9aea7eef521_67832227', 'page_footer_container', $this->tplIndex);
?>

<?php echo '<script'; ?>
>
	// productcomments
	$(document).on('click','#product_comments_block_extra ul.comments_advices a', function(e){
		$('*[class^="tab-pane"]').removeClass('active');
		$('*[class^="tab-pane"]').removeClass('in');
		$('div#idTab5').addClass('active');
		$('div#idTab5').addClass('in');

		$('ul.nav-tabs a[href^="#"]').removeClass('active');
		$('a[href="#idTab5"]').addClass('active');
	});
	(function(){
		$(window).on("load",function(){
			
			/* Page Scroll to id fn call */
			$("#product_comments_block_extra ul.comments_advices a.reviews ").mPageScroll2id({
				highlightSelector:"#product_comments_block_extra ul.comments_advices a.reviews ",
				offset:100,
			});
		});
	})(jQuery);
<?php echo '</script'; ?>
>
</section>
<?php
}
}
/* {/block 'content'} */
}
