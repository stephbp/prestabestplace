{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="images-container">
{block name='product_images'}
    <div class="js-qv-mask mask pos_content">
      <div class="product-images js-qv-product-images owl-carousel">
        {foreach from=$product.images item=image name=myLoop}
         {if $smarty.foreach.myLoop.index % 4 == 0 || $smarty.foreach.myLoop.first }
			<div class="thumb-container">
		  {/if}
             <img
              class="thumb js-thumb {if $image.id_image == $product.default_image.id_image} selected {/if}"
              data-image-medium-src="{$image.bySize.medium_default.url}"
              data-image-large-src="{$image.bySize.large_default.url}"
              src="{$image.bySize.home_default.url}"
              alt="{$image.legend}"
              title="{$image.legend}"
              width="100"
              itemprop="image"
            >
        {if $smarty.foreach.myLoop.iteration % 4 == 0 || $smarty.foreach.myLoop.last  }
        </div>
		{/if}
        {/foreach}
      </div>
    </div>
  {/block}
  {block name='product_cover'}
    <div class="product-cover">
     <img class="js-qv-product-cover" src="{$product.default_image.bySize.large_default.url}" alt="{$product.default_image.legend}" title="{$product.default_image.legend}" style="width:100%;" itemprop="image">
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
	  {block name='product_flags'}
		<ul class="product-flag">
		  {foreach from=$product.flags item=flag}
			<li class="{$flag.type}"><span>{$flag.label}</span></li>
		  {/foreach}
		</ul>
	  {/block}
    </div>
  {/block}

  
</div>
{hook h='displayAfterProductThumbs'}
<script type="text/javascript"> 
		$(document).ready(function() {
			var owl = $("#product .images-container .product-images");
			owl.owlCarousel({
				loop: true,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				autoPlay : false ,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				nav: true,
				dots : false,	
				responsive:{
					0:{
						items:1,
					},
					480:{
						items:1,
					},
					768:{
						items:1,
						nav:false,
					},
					992:{
						items:1,
					},
					1200:{
						items:1,
					}
				}
			}); 
			var owl = $(".quickview .images-container .product-images");
			owl.owlCarousel({
				loop: true,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				autoPlay : false ,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				nav: true,
				dots : false,	
				responsive:{
					0:{
						items:1,
					},
					480:{
						items:1,
					},
					768:{
						items:1,
						nav:false,
					},
					992:{
						items:1,
					},
					1200:{
						items:1,
					}
				}
			}); 
		});
</script>