<?php

defined('ABSPATH') || exit;

// content-excursion.php
// description:  shows the body copy for single excursion posts

global $post, $page_id, $global_site, $wpdb;

$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group" OR slug = "single-post-group" LIMIT 1');


if (!empty($posts_group_id) && function_exists('get_ad_group') && group_has_ads($posts_group_id))
	$the_ad = get_ad_group((int) $posts_group_id);

?>
<div id="content">
	<div class="container-fluid no-pad">
		<div id="posts-section" class="section content">
			<div class="single-wrapper no-pad row">
				<div id="body-content" class="col-22 offset-1 col-sm-17 offset-sm-0 py-2 my-sm-5 px-3 px-md-5">
					<?php
					if (!empty($hero_type) && $hero_type == 'alternative'): 
						$author_name = get_field('post_author', $post_id);
						$date = get_the_date('M j, Y', $post_id); ?>
						<h1 class="title my-3">
						  <span><span class="text"><?php echo get_the_title($post_id); ?></span></span>
						</h1>
						<?php if (!empty($author_name)): ?>
						<p>by <?php echo $author_name; ?></p>
						<?php endif; ?>
						<span class="date mb-5"><?php echo $date; ?></span>
					<?php
					endif; ?>
					<h3 class="mb-4"><?php the_title(); ?></h3>
					<?php
					the_content(); ?>

					<div id="excursions-wrapper" class="row">
						<p>Content in here...</p>
					</div>
				</div>
				<div class="sidebar col-22 offset-1 col-sm-7 offset-sm-0 py-2<?php echo !empty($excursion_page) ? ' my-sm-4' : ' my-sm-5'; ?> order-first order-sm-last">
					<div class="ad px-md-5 py-3 d-none d-sm-flex justify-content-center">
						<?php 
						if (!empty($the_ad)):
							echo $the_ad;
						endif; ?>
					</div>
					<?php
					if ($global_site == 'globalusa'): ?>
					<div class="newsletter px-md-5 pt-3 d-sm-flex justify-content-center">
						<?php echo do_shortcode('[gravityform id=15 title=true description=true ajax=true]'); ?>
					</div>
					<?php
					endif; ?>
				</div>

			</div>

		</div>
	</div>
</div>