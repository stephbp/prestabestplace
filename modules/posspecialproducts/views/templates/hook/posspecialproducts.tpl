	
		<div class="pos-special-products " 
			data-items="{$slider_options.number_item}" 
			data-speed="{$slider_options.speed_slide}"
			data-autoplay="{$slider_options.auto_play}"
			data-time="{$slider_options.auto_time}"
			data-arrow="{$slider_options.show_arrow}"
			data-pagination="{$slider_options.show_pagination}"
			data-move="{$slider_options.move}"
			data-pausehover="{$slider_options.pausehover}"
			data-md="{$slider_options.items_md}"
			data-sm="{$slider_options.items_sm}"
			data-xs="{$slider_options.items_xs}"
			data-xxs="{$slider_options.items_xxs}">
			{if $title}
			<div class="timeiner">
		
			<div class="pos_title">
				<h2>	
					{$title}
				</h2>
				<span class="text">{l s='Add hot deals to your weekly lineup' d='posspecialproducts'}</span>
			</div>
			
			{/if}
			{$rows= $slider_options.rows}
			<div class="special-products">
				<div class="row pos_content">
					<div class="special-item owl-carousel">
					{foreach from=$products item=product name=myLoop}
						{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
						<div class="item-product">
						{/if}	
							
							 <article class="js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
								<div class="img_block">
									{block name='product_thumbnail'}
										<a href="{$product.url}" class="thumbnail product-thumbnail">
										  <img
											src = "{$product.cover.bySize.home_default.url}"
											alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
											data-full-size-image-url = "{$product.cover.large.url}"
										  >
										  {hook h="rotatorImg" product=$product}	
										</a>
									  {/block}
									{block name='product_flags'}
										<ul class="product-flag">
											{if $product.show_price}
											   {if $product.has_discount}
												   {if $product.discount_type === 'percentage'}
													  <li class="discount-percentage">{$product.discount_percentage}</li>
													{/if}
												{/if}
											{/if}
											{foreach from=$product.flags item=flag}
												<li class=" {$flag.type}">{$flag.label}</li>
											{/foreach}
										</ul>
									 {/block}
									<ul class="hover">
										
										<li class="quick_view">
											<a href="#" class="quick-view" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">{l s='Quick view' d='Shop.Theme.Actions'}</a>
										</li>
									</ul> 
									
									
								</div>
								<div class="product_desc">
									<div class="desc_info">
										{if isset($product.id_manufacturer)}
										 <div class="manufacturer"><a href="{url entity='manufacturer' id=$product.id_manufacturer }">{Manufacturer::getnamebyid($product.id_manufacturer)}</a></div>
										{/if}
										{block name='product_name'}
											<h4><a href="{$product.url}" title="{$product.name}" itemprop="name" class="product_name">{$product.name|truncate:30:'...'}</a></h4>
										{/block}
										
										
											{block name='product_reviews'}
												<div class="hook-reviews">
													{hook h='displayProductListReviews' product=$product}
												</div>
											{/block}
											{block name='product_price_and_shipping'}
											  {if $product.show_price}
												<div class="product-price-and-shipping">
												   <span itemprop="price" class="price {if $product.has_discount} price_sale {/if}">{$product.price}</span>
												  {if $product.has_discount}
													{hook h='displayProductPriceBlock' product=$product type="old_price"}

													<span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
													<span class="regular-price">{$product.regular_price}</span>
													{if $product.discount_type === 'percentage'}
													  <span class="discount-percentage">{$product.discount_percentage}</span>
													{/if}
												  {/if}

												  {hook h='displayProductPriceBlock' product=$product type="before_price"}

												  <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
											  

												  {hook h='displayProductPriceBlock' product=$product type='unit_price'}

												  {hook h='displayProductPriceBlock' product=$product type='weight'}
												</div>
											  {/if}
											{/block}
											<div class="add-to-links">
												{include file='catalog/_partials/customize/button-cart.tpl' product=$product}
											</div>	
											
										{block name='product_description_short'}
											<div class="product-desc" itemprop="description">{$product.description_short nofilter}</div>
										{/block}
										{block name='product_variants'}
											{if $product.main_variants}
											  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
											{/if}
										{/block}
									</div>	
									<div class="availability"> 
										{if $product.show_availability }
											{if $product.quantity > 0}
											<div class="availability-list in-stock">{l s='Availability' d='Shop.Theme.Actions'}: <span>{$product.quantity} {l s='In Stock' d='Shop.Theme.Actions'}</span></div>

											{else}

											<div class="availability-list out-of-stock">{l s='Availability' d='Shop.Theme.Actions'}: <span>{l s='Out of stock' d='Shop.Theme.Actions'}</span></div> 
											{/if}
										{/if}
									</div>
									<div class="time" >
										<div class="text">{l s='Hurry Up!' d='Shop.Theme.Actions'}<span>{l s='Offer ends in:' d='Shop.Theme.Actions'}</span></div>
									
										{hook h='timecountdown' product=$product }
										<span class="future_date_{$product.id_category_default}_{$product.id_product} id_countdown"></span>
										<div class="clearfix"></div>
									</div>	
								</div>
							</article>
						{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
						</div>
						{/if}
					{/foreach}
					</div>
				</div>
			</div>
			</div>

			</div>
	