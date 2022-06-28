<div class="home_blog_post_area {$xipbdp_designlayout} product_block_container">
	<div class="container">
		<div class="home_blog_post">
			<div class="page_title_area pos_title">
				{if isset($xipbdp_title)}
					<a href="{xipblog::XipBlogLink()}" class="header_title"><h2>
						{$xipbdp_title}
					
					</h2></a>
					<span class="text">{l s='N\'oubliez pas de consulter notre dernier article de blog de ce trimestre-ci.' mod='xipblogdisplayposts'}</span>
					
				{/if}
			</div>
			<div class="home_blog_post_inner block-content">
			{if (isset($xipblogposts) && !empty($xipblogposts))}
				<div class="row pos_content">
				<div class="blog_slider owl-carousel">
					{foreach from=$xipblogposts item=xipblgpst}
						<div class="item">
							<article class="blog_post">
								<div class="blog_post_content_top">
									<div class="post_thumbnail">
										{if $xipblgpst.post_format == 'video'}
											{assign var="postvideos" value=','|explode:$xipblgpst.video}
											{if $postvideos|@count > 1 }
												{include file="module:xipblogdisplayposts/views/templates/front/post-video.tpl" videos=$postvideos width='370' height="256" class="carousel"}
											{else}
												{include file="module:xipblogdisplayposts/views/templates/front/post-video.tpl" videos=$postvideos width='370' height="316" class=""}
											{/if}
										{elseif $xipblgpst.post_format == 'audio'}
											{assign var="postaudio" value=','|explode:$xipblgpst.audio}
											{if $postaudio|@count > 1 }
												{include file="module:xipblogdisplayposts/views/templates/front/post-audio.tpl" audios=$postaudio width='370' height="316" class="carousel"}
											{else}
												{include file="module:xipblogdisplayposts/views/templates/front/post-audio.tpl" audios=$postaudio width='370' height="316" class=""}
											{/if}
										{elseif $xipblgpst.post_format == 'gallery'}
											{if $xipblgpst.gallery_lists|@count > 1 }
												{include file="module:xipblogdisplayposts/views/templates/front/post-gallery.tpl" gallery=$xipblgpst.gallery_lists imagesize="home_default" class="carousel"}
											{else}
												{include file="module:xipblogdisplayposts/views/templates/front/post-gallery.tpl" gallery=$xipblgpst.gallery_lists imagesize="home_default" class=""}
											{/if}
										{else} 
											<a href="{$xipblgpst.link}" class="img_content"><img class="xipblog_img img-responsive" src="{$xipblgpst.post_img_home_default}" alt="{$xipblgpst.post_title}"></a>
											
												
										{/if}
									</div>
								</div>
								<div class="post_content">
									<div class="meta_category">
										<a href="{$xipblgpst.category_default_arr.link}">{$xipblgpst.category_default_arr.name}</a>
									</div>

									<h4><a href="{$xipblgpst.link}" class="post_title">{$xipblgpst.post_title}</a></h4>
									<!-- <div class="post_meta"> -->
									  <!-- <span class="meta_date"> -->
									   <!-- <i class="fa-calendar"></i> -->
									   <!-- {$xipblgpst.post_date|date_format:"%b %d, %Y"} -->
									  <!-- </span> <span class="meta_author"> -->
									  
									   <!-- {$xipblgpst.post_author_arr.firstname} {$xipblgpst.post_author_arr.lastname} -->
									  <!-- </span> -->
									<!-- </div> -->
									
									<p class="post_description">
										{if isset($xipblgpst.post_excerpt) && !empty($xipblgpst.post_excerpt)}
											{$xipblgpst.post_excerpt|truncate:150:' ...'|escape:'html':'UTF-8'}
										{else}
											{$xipblgpst.post_content|truncate:150:' ...'|escape:'html':'UTF-8'}
										{/if}
									</p>
									<a href="{$xipblgpst.link}" class="read-more">{l s=' Read More' mod='xipblogdisplayposts'}</a>
									
								</div>
							</article>
						</div>
					{/foreach}
				</div>
				</div>
			{else}
				<p>{l s='No Blog Post Found' mod='xipblogdisplayposts'}</p>
			{/if}
			</div>
		</div>
		</div>
</div>