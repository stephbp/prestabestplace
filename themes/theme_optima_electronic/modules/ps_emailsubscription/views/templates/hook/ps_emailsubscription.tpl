<div class="footer_block links">
	<div class="ft_newsletter">
		<div class="content_newsletter">
			
			<h3>
				{l s='Newsletter' d='Shop.Theme.Global'}
			</h3>
			
			<div class="block_content">
				<p class="newletter-header">{l s='Sign up for our e-mail to get latest news.' d='Shop.Theme.Global'}</p>
				
				<form action="{$urls.pages.index}#footer" method="post">
					<div class="input-wrapper">
						<input
							class="input_txt"
							name="email"
							type="email"
							value="{$value}"
							placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
						>
						<input type="hidden" name="blockHookName" value="{$hookName}" />
						<input type="hidden" name="action" value="0">
						<div class="clearfix"></div>
					</div>
					<button class="btn btn-primary" name="submitNewsletter" type="submit" value=""><span>{l s='Sign Up' d='Shop.Theme.Actions'}</span></button>
					<input type="hidden" name="action" value="0">
				</form>
				
				<div class="col-xs-12">
				  {if $msg}
					<p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
					  {$msg}
					</p>
				  {/if}
				</div>
			</div>
		</div>
	</div>
</div>