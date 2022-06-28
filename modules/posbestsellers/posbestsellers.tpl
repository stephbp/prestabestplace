
<div class="pos_bestseller_product product_block_container">
		
	
		<div class="block-content">
			<div class="pos_title">
				<h2>{l s='Best Sellers' mod='posbestsellers'}</h2>
				<span class="text">{l s='Add best sellers to your weekly lineup' mod='posbestsellers'}</span>
			</div>
			
			<div class="pos_content ">
				{if count($products) > 0 && $products != null}
					{$rows= $config['POS_HOME_SELLER_ROWS']}
					<div class="row">
						<div class="bestsellerSlide owl-carousel">
						
								{foreach from=$products item=product name=myLoop}
									{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
										<div class="item-product">
									{/if}
										
										{include file="catalog/_partials/miniatures/product.tpl" product=$product}
									{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
										</div>
									{/if}
								{/foreach}
						</div>
					</div>
				{else}
					<p>{l s='No best sellers at this time' mod='posbestsellers'}</p>	
				{/if}	
			</div>
		</div>

</div>


