<?php
// home-cta.php
if (!defined('ABSPATH')) exit;

global $global_site; 

/*
Possible variables...
$cta_image, $cta_headline, $cta_buttonurl, $cta_buttontext

*/

?>

<div id="cta" class="col-24 offset-sm-1 col-sm-22 offset-md-1 col-md-22 offset-lg-2 col-lg-20<?php echo !empty($wrapper_classes) ? ' ' . $wrapper_classes : ''; ?>">
	<div class="row align-items-center justify-content-center py-sm-5 mt-sm-5 mx-sm-4 px-3 px-sm-2 mb-5 mb-sm-0">
		<?php
		if (!empty($cta_image)):
			$image = wp_get_attachment_image_src($cta_image, 'cta_thumbnail');
			$image_alt = get_post_meta($cta_image, '_wp_attachment_image_alt', true);
			if (!empty($image) && !empty($image[0])): ?>
			<img src="<?php echo $image[0]; ?>" alt="<?php echo !empty($image_alt) ? $image_alt : ''; ?>" class="box-image" />
		<?php
			endif;
		endif; ?>
		<div class="cta-inner d-flex justify-content-around align-items-center col-sm-18 py-4">
			<?php
			if (!empty($cta_headline)): ?>
			<div class="headline">
				<h3 class="my-0"><?php echo apply_filters('the_title', $cta_headline); ?></h3>
			</div>
			<?php
			endif;
			if (!empty($cta_buttonurl) && !empty($cta_buttontext)): ?>
			<a href="<?php echo $cta_buttonurl; ?>" class="btn btn-primary" target="_blank"><?php echo $cta_buttontext; ?></a>
			<?php
			endif; ?>
		</div>
	</div>
</div>