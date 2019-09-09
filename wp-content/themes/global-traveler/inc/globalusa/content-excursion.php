<?php

defined('ABSPATH') || exit;

// content-excursion.php
// description:  shows the body copy for single excursion posts

global $post, $page_id, $global_site, $wpdb;

$post_id = $post->ID;

$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group" OR slug = "single-post-group" LIMIT 1');
$posts_group_id2 = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group 2" OR slug = "single-post-group-2" LIMIT 1');

if (function_exists('get_ad_group')) {
	$the_ad = !empty($posts_group_id) && group_has_ads($posts_group_id) ? get_ad_group((int) $posts_group_id) : '';
	$the_ad2 = !empty($posts_group_id2) && group_has_ads($posts_group_id2) ? get_ad_group((int) $posts_group_id2) : '';
} ?>
<div id="content">
	<div class="container-fluid">
		<div id="posts-section" class="section content">
			<div class="single-wrapper no-pad row">
				<div id="body-content" class="col-22 offset-1 col-sm-17 offset-sm-0 py-2 my-sm-5 px-3 px-md-5">
					<?php
					$excursion_details = get_field('fx_single_details', $post_id);
					if (!empty($excursion_details)): ?>
					<p class="excursion-details"><?php echo $excursion_details; ?></p>
					<?php
					endif; ?>
					<h3 class="mb-4"><?php the_title(); ?></h3>
					<?php
					the_content(); 

					$button = array(
						'url' => get_field('fx_single_button_url', $post_id),
						'target' => get_field('fx_single_new_tab', $post_id) ? '_blank' : '',
						'title' => get_field('fx_single_button_text', $post_id)
					);
					$button = array_filter($button);

					if (!empty($button) && isset($button['url'], $button['title'])): ?>
					<div class="button-section d-flex justify-content-center align-items-center my-5 py-3">
						<a href="<?php echo $button['url']; ?>"<?php echo !empty($button['target']) ? ' target="' . $button['target'] . '"' : ''; ?> class="btn btn-primary btn-large">
							<?php echo $button['title']; ?>
						</a>
					</div>
					<?php
					endif; ?>
					<?php // Itinerary/Highlights... etc. etc. 

						$half_sections = array(
							'itinerary' => array(
								'title' => get_field('fx_single_right_title', $post_id),
								'copy' => get_field('fx_single_right_copy', $post_id)
							),
							'highlights' => array(
								'title' => get_field('fx_single_left_title', $post_id),
								'copy' => get_field('fx_single_left_copy', $post_id)
							)
						);

						foreach($half_sections as $half_key => $half_value)
							$half_sections[$half_key] =  array_filter(array_map('trim', $half_sections[$half_key]));

						$half_sections = array_filter($half_sections);
					?>
					<div class="excursions-single-content">
						<?php
						if (!empty($half_sections)): ?>
							<div class="itinerary-highlights row">
							<?php
							foreach($half_sections as $half_key => $half_section): ?>
								<div class="col-24 col-sm-12 <?php echo $half_key; ?>">
									<?php 
									if (!empty($half_section['title'])): ?>
									<h3><?php echo $half_section['title']; ?></h3>
									<?php
									endif; ?>
									<?php 
									if (!empty($half_section['copy'])):
										echo $half_section['copy'];
									endif; ?>
								</div>
							<?php
							endforeach; ?>
							</div>
						<?php
						endif; ?>
					</div>
					<hr class="my-5" />

					<?php if (have_rows('fx_single_section_setup')) : ?>
					<div class="day-list">
						<?php while (have_rows('fx_single_section_setup')) : the_row(); ?>
						<div class="day-item mb-5">
							<div class="content">
								<h3 class="mb-4"><?php the_sub_field('fx_section_title'); ?></h3>
								<?php the_sub_field('fx_section_copy'); ?>
							</div>
							
							<?php if (have_rows('fx_section_media_setup')) : ?>
							<div class="images d-block d-sm-flex w-100 px-0">
								<?php while (have_rows('fx_section_media_setup')) : the_row();
								if (get_sub_field('fx_section_media_media_type') == 'image') { ?>
								<div class="col-24 col-sm px-0 image-half">
									<?php $image = get_sub_field('fx_section_media_image'); ?>
									<div class="image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
									<span><?php the_sub_field('fx_section_media_caption'); ?></span>
								</div>
								<?php } else { ?>
								<div class="col-24 col-sm px-0 gmap-half">
									<?php $location = get_sub_field('fx_section_media_google_map');
									if (!empty($location)) : ?>
									<div class="acf-map">
										<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
									</div>
									<?php endif; ?>
								</div>
								<?php } ?>
								<?php endwhile; ?>
							</div>
							<?php endif; ?>
							
						</div>
						<?php endwhile; ?>
					</div>
					<script type="text/javascript">
					(function($) {
						function new_map( $el ) {
							
							var $markers = $el.find('.marker');
							
							var args = {
								zoom		: 16,
								center		: new google.maps.LatLng(0, 0),
								mapTypeId	: google.maps.MapTypeId.ROADMAP
							};
							
							var map = new google.maps.Map( $el[0], args);
							map.markers = [];
							$markers.each(function(){
						    	add_marker( $(this), map );
							});
							center_map( map );
							return map;
						}

						function add_marker( $marker, map ) {

							var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
							var marker = new google.maps.Marker({
								position	: latlng,
								map			: map
							});
							map.markers.push( marker );
							if( $marker.html() )
							{
								var infowindow = new google.maps.InfoWindow({
									content		: $marker.html()
								});

								google.maps.event.addListener(marker, 'click', function() {
									infowindow.open( map, marker );
								});
							}
						}

						function center_map( map ) {

							var bounds = new google.maps.LatLngBounds();
							$.each( map.markers, function( i, marker ) {
								var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
								bounds.extend( latlng );
							});

							if( map.markers.length == 1 )
							{
							    map.setCenter( bounds.getCenter() );
							    map.setZoom( 16 );
							}
							else
							{
								map.fitBounds( bounds );
							}
						}

						var map = null;

						$(document).ready(function(){

							$('.acf-map').each(function(){
								map = new_map( $(this) );
							});
						});
					})(jQuery);
					</script>
					<?php endif; ?>
					
					<div class="cta-wrapper d-flex">
						<div class="cta col-24 text-center py-5">
							<h2 class="mt-2 mb-4 py-2"><?php the_field('fx_single_cta_title'); ?></h2>
							<a href="<?php the_field('fx_single_button_url'); ?>" target="<?php if (get_field('fx_single_new_tab')){echo "_blank";} ?>" class="btn btn-primary btn-large"><?php the_field('fx_single_button_text'); ?></a>
						</div>
					</div>
				</div>
				<div class="sidebar col-22 offset-1 col-sm-7 offset-sm-0 py-2<?php echo !empty($excursion_page) ? ' my-sm-4' : ' my-sm-5'; ?> order-first order-sm-last">
					<?php if (!empty($the_ad)): ?>
					<div class="ad px-md-5 py-2 d-none d-sm-flex justify-content-center">
						<?php 
						echo $the_ad; ?>
					</div>
					<?php endif; ?>
					<?php
					if ($global_site == 'globalusa'): ?>
					<div class="newsletter px-md-5 pt-3 d-sm-flex justify-content-center">
						<?php echo do_shortcode('[gravityform id=15 title=true description=true ajax=true]'); ?>
					</div>
					<?php
					endif;
					if (!empty($the_ad2)): ?>
					<div class="ad px-md-5 py-2 d-none d-sm-flex justify-content-center">
						<?php
						echo $the_ad2; ?>
					</div>
					<?php
					endif; ?>
				</div>

			</div>

		</div>
	</div>
<?php
	tif_get_template('inc/instagram-feed.php', array()); 

	$sponsored_posts = $current_sponsored = $initial_posts = array();
	$total_sponsored = 0;
	$exclude_sponsored_ids = array();
	$sponsored_ids = array();

	$sponsored_posts = apply_filters('get_sponsored_posts', array(), array());

	if (!empty($sponsored_posts))
	{
		shuffle($sponsored_posts);

		foreach($sponsored_posts as $sponsored)
			$sponsored_ids[] = $sponsored->ID;

		// get 2 sponsors...
		$current_sponsored = array_splice($sponsored_posts, 0, 2);

		if (!empty($current_sponsored))
		{
			foreach($current_sponsored as $sponsor)
			{
				$exclude_sponsored_ids[] = $sponsor->ID;
				$total_sponsored++;
			}
		}
	}

	$ordered_array = array();
	$posts_per_page = 6;
	$args = array(
		'post_type' => 'post',
		'orderby' => 'date',
		'post_status' => 'publish',
		'offset' => 0,
		'posts_per_page' => ($posts_per_page - $total_sponsored)
	);

	if (!empty($sponsored_ids))
	{
		if (!empty($args['post__not_in']))
			$args['post__not_in'] = array_merge($args['post__not_in'], $sponsored_ids);
		else
			$args['post__not_in'] = $sponsored_ids;
	}

	$the_query = new WP_Query($args);

	if (!empty($the_query->posts))
	{
		$total_posts = count($the_query->posts);
		$half_sponsored = !empty($total_sponsored) ? ceil(1 / $total_sponsored) : 0;

		$order_pattern = array(
			'first_set' => (3 - $half_sponsored),
			'last_set' => (3 - ($total_sponsored - $half_sponsored))
		);

		foreach($order_pattern as $key => $value)
		{
			if (!empty($the_query->posts))
				$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

			if (!empty($ordered_array[$key]) && !empty($current_sponsored))
				$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($current_sponsored, 0, 1), array_slice($ordered_array[$key], 1));
		}
	}

	ob_start();
	tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['first_set']));
	$initial_posts[] = ob_get_clean();

	ob_start();
	tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['last_set']));
	$initial_posts[] = ob_get_clean();

	tif_get_template('inc/' . $global_site . '/base-template.php', array('global_site' => $global_site, 'wrapper_start' => array('<div class="container-fluid mt-5 pt-5 px-0">', '<div class="section content">'), 'wrapper_end' => array('</div>', '</div>'), 'offset' => ($posts_per_page - $total_sponsored), 'sponsors_shown' => $exclude_sponsored_ids, 'initial_posts' => $initial_posts)); ?>
</div>