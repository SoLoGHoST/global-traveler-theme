<?php get_header(); ?>

<div class="full-width" id="404Template">
	<div class="container-fluid">
		<div class="inner col-xs-24">
			
			<h2 class="entry-title"><?php _e( 'We are sorry, the content you are looking for is not found or the page does not exist.  Please check the url or visit another page.', 'tif-wordpress' ); ?></h2>
			<div class="entry-content">
				<p class="text-center"><a href="<?php echo site_url(); ?>"><?php _e('Go Home', 'trazee'); ?></a></p>
			</div>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>