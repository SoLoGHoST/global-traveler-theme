<?php
/**
 * Filename: single.php
 * Description: Displaying a single post...
 */
 
if (!defined('ABSPATH')) exit;
global $post, $page_id, $main_categories, $wpdb, $global_site;

get_header();

$global_site = apply_filters('get_global_site', $global_site);

$posts_group_id = $wpdb->get_var('SELECT term_id FROM ' . $wpdb->terms . ' WHERE name = "Single Post Group" OR slug = "single-post-group" LIMIT 1');


if (!empty($posts_group_id) && function_exists('get_ad_group') && group_has_ads($posts_group_id))
	$the_ad = get_ad_group((int) $posts_group_id);

if (have_posts()): 
	while (have_posts()): the_post();

$hero_type = get_field('hero_type');

tif_get_template('inc/' . $global_site . '/heroes.php', array('main_post' => $post, 'type' => empty($hero_type) ? 'post' : $hero_type));

$post_id = $post->ID;
$excluded_categories = array(); ?>
<div id="content">
	<div class="container-fluid no-pad">
		<div id="posts-section" class="section content py-3<?php echo !empty($hero_type) && $hero_type == 'alternative' ? ' my-0' : ''; ?>">
			<div class="single-wrapper no-pad row">

				<div class="social-share-wrapper col-sm-2 px-0 px-md-3 order-last order-sm-first">
					<div class="lock-scroll">
						<?php apply_filters('tif_social_share', '', 0); ?>
					</div>
				</div>
				<div id="body-content" class="col-22 offset-1 col-sm-15 offset-sm-0 py-2 my-sm-5 px-3 px-md-5">
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
					<?php the_content(); ?>
				</div>
				<div class="sidebar col-22 offset-1 col-sm-7 offset-sm-0 py-2 my-sm-5 order-first order-sm-last">
					<?php 

					$categories_and_tags = array();

					// exclude the main categories already shown above...
					if (!empty($main_categories))
					{
						if (!empty($main_categories['primary']))
							$excluded_categories[] = $main_categories['primary']['id'];

						if (!empty($main_categories['child']))
							$excluded_categories[] = $main_categories['child']['id'];
					}

					$categories = get_the_category($post->ID);

					// Remove the categories already defined for the post in the hero...
					foreach($categories as $cat_key => $cat)
						if (!empty($excluded_categories) && in_array($cat->term_id, $excluded_categories))
							unset($categories[$cat_key]);

					if (!empty($categories))
					{
						foreach($categories as $category)
						{
							$categories_and_tags[] = array(
								'title' => $category->name,
								'link' => get_category_link($category->term_id),
								'class' => 'category-link'
							);
						}
					}

					$tags = get_the_tags($post->ID);

					if (!empty($tags))
					{
						foreach($tags as $tag)
						{
							$categories_and_tags[] = array(
								'title' => $tag->name,
								'link' => get_tag_link($tag->term_id),
								'class' => 'tag-link'
							);
						}
					}

					if (!empty($categories_and_tags)): ?>
					<div class="category-wrapper d-flex px-2 px-sm-5 my-4 mt-sm-0 justify-content-start">
					<?php 
						$split_categories = array_chunk($categories_and_tags, ceil(count($categories_and_tags) / 2));

						foreach($split_categories as $category_group): ?>
						<ul class="category-group list-unstyled">
							<?php foreach ($category_group as $category): ?>
							<li class="category"><h5 class="categories"><a href="<?php echo $category['link']; ?>" class="<?php echo $category['class']; ?>"><?php echo $category['title']; ?></a></h5></li>
							<?php endforeach; ?>
						</ul>
						<?php
						endforeach; ?>
					</div>
					<?php
					endif; ?>

					<div class="ad px-sm-5 py-3 d-none d-sm-flex justify-content-center">
						<?php 
						if (!empty($the_ad)):
							echo $the_ad;
						endif; ?>
					</div>
					<?php
					if ($global_site == 'globalusa'): ?>
					<div class="newsletter px-sm-5 pt-3 d-sm-flex justify-content-center">
						<?php echo do_shortcode('[gravityform id=15 title=true description=false ajax=true]'); ?>
					</div>
					<?php
					endif; ?>
				</div>
			</div>
			<?php
			if ($global_site == 'globalusa'):
				$cta = array(
					'cta_image' => get_field('cta_image'),
					'cta_headline' => get_field('cta_headline'),
					'cta_buttonurl' => get_field('cta_buttonurl'),
					'cta_buttontext' => get_field('cta_buttontext')
				);

				// remove empty values from the array...
				$cta = array_filter($cta);
				if (!empty($cta)):
					tif_get_template('inc/' . $global_site . '/call-to-action.php', $cta); 
				endif;
			endif; ?>
		</div>
	</div>
<?php 
	endwhile; 
endif; 
wp_reset_postdata(); 

$exclude_ids = array();
$related_posts = get_field('related_posts');
$related_posts = !empty($related_posts) ? $related_posts : array();
$total_related = !empty($related_posts) ? count($related_posts) : 0;
$posts_to_get = $total_related < 4 ? (4 - $total_related) : 0;

if (!empty($posts_to_get) || !empty($related_posts)): 

	if (!empty($related_posts))
	{
		foreach($related_posts as $related_post)
			$exclude_ids[] = $related_post->ID;
	}

	if (!empty($posts_to_get))
	{
		$args = array(
			'post_type' => 'post',
			'orderby' => 'date',
			'post_status' => 'publish',
			'posts_per_page' => $posts_to_get,
			'post__not_in' => array_unique(array_merge(array($page_id), $exclude_ids))
		);

		// Get posts related to the Primary Category...
		if (!empty($main_categories))
		{
			if (!empty($main_categories['primary']))
				$args = array_merge($args, array('cat' => $main_categories['primary']['id']));
			else if (!empty($main_categories['child']))
				$args = array_merge($args, array('cat' => $main_categories['child']['id']));
		}

		$the_loop = new WP_Query($args);

		if ($the_loop->have_posts())
		{
			foreach($the_loop->posts as $the_post)
				$related_posts[] = $the_post;
		}

		/*
		if($the_loop->have_posts()):
			while($the_loop->have_posts()): $the_loop->the_post();

			endwhile; endif; wp_reset_postdata();
		endif; */

	}

	$featured_post = array_shift($related_posts); ?>
	<div class="home-news-section home-section">
		<div class="container-fluid no-pad">
			<div class="recent-posts-wrapper">
				<div class="row d-md-flex justify-content-md-between align-items-md-stretch mb-5 my-sm-5 py-sm-5 px-sm-5">
					<div class="col-24 col-md px-4 left-side">
						<h3 class="light"><?php _e('Read This Next', 'trazee'); ?></h3>
						<div id="featured" class="py-2">
						<?php
							$post = $featured_post;
							setup_postdata($post); 

							$post_image = get_field('featured_image');
							$the_date = get_the_date('M j, Y');						

							if (empty($post_image))
							{
								$thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full");
								$post_image = !empty($thumbnail_image) ? $thumbnail_image[0] : '';
							}
							else
								$post_image = $post_image['url'];

							?>
							<div class="img-wrapper">
								<a href="<?php the_permalink(); ?>" class="image-wrapper d-block mx-auto"<?php echo !empty($post_image) ? ' style="background-image: url(' . $post_image . ');"' : ''; ?>></a>
							</div>
							<div class="innerbox">

								<h2 class="title">
									<a href="<?php echo get_the_permalink(); ?>" class="post">
										<span>
											<span class="text"><?php the_title(); ?></span>
										</span>
									</a>
								</h2>
								<?php $categories = apply_filters('get_the_primary_category_with_child', array(), $post->ID); ?>

								<div class="featured-details tagline">
									<h5 class="categories">
									<?php if (!empty($categories)): 
										if (!empty($categories['primary'])): ?>
											<a href="<?php echo esc_url($categories['primary']['link']); ?>"><?php echo $categories['primary']['title']; ?></a>
											<?php
											if (!empty($categories['child'])): ?>
											/ <a href="<?php echo esc_url($categories['child']['link']); ?>"><?php echo $categories['child']['title']; ?></a>
											<?php
											endif;
										endif;
									endif; ?>
									</h5>
									<span class="date"><?php echo $the_date; ?></span>
								</div>

							</div>
						</div>
					<?php
						wp_reset_postdata(); ?>
					</div>
					<div class="col-24 col-md px-4 right-side">
						<h3 class="light"><?php _e('All Reads on This Topic', 'trazee'); ?></h3>
						<ul class="links-list list-inline pr-sm-4">
							<?php 
							foreach($related_posts as $related_post): 
								$post = $related_post;
								setup_postdata($post);

							?>
							<li class="list-item">
								<h2 class="title">
									<a href="<?php the_permalink(); ?>" class="post"><span><span class="text"><?php the_title(); ?></span></span></a>
								</h2>
							</li>
							<?php 
								wp_reset_postdata();
							endforeach; ?>
						</ul>
						<?php 
						if (!empty($main_categories)):

							if (!empty($main_categories['primary'])):
								$category_link = $main_categories['primary']['link'];
							elseif (!empty($main_categories['child'])):
								$category_link = $main_categories['child']['link'];
							endif;

							if (!empty($category_link)): ?>

						<h5><a href="<?php echo $category_link; ?>" class="read-all"><?php _e('Read Them All', 'trazee'); ?></a></h5>
						<?php
							endif;
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	endif;
	if ($global_site == 'globalusa'):
		tif_get_template('inc/' . $global_site . '/fx-excursions.php');
	endif;

	tif_get_template('inc/instagram-feed.php', array());

	$sponsored_posts = $current_sponsored = array();
	$total_sponsored = 0;
	$exclude_sponsored_ids = array();
	$sponsored_ids = array();

	$sponsored_posts = apply_filters('get_sponsored_posts', array(), array());

	if (!empty($sponsored_posts))
	{
		shuffle($sponsored_posts);

		foreach($sponsored_posts as $sponsored)
			$sponsored_ids[] = $sponsored->ID;

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


	$has_more = false;
	$ordered_array = array();
	$the_ads = array();
	$posts_per_page = !empty($the_ads) ? 12 : 11;
	$args = array(
		'post_type' => 'post',
		'orderby' => 'date',
		'post_status' => 'publish',
		'offset' => 0,
		'posts_per_page' => ($posts_per_page - $total_sponsored)
	);

	if (!empty($excluded_categories))
		$args = array_merge($args, array('category__not_in' => $excluded_categories));
	else
		$args = array_merge($args, array('post__not_in' => array($post_id)));

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

		if ($total_posts > (($posts_per_page - $total_sponsored) - 1))
		{
			array_pop($the_query->posts);
			$has_more = true;
		}

		$half_sponsored = !empty($total_sponsored) ? ceil(1 / $total_sponsored) : 0;

		$order_pattern = array(
			'first_set' => 2,
			'second_set' => 2,
			'third_set' => (3 - $half_sponsored),
			'last_set' => (3 - ($total_sponsored - $half_sponsored))
		);

		foreach($order_pattern as $key => $value)
		{
			if (!empty($the_query->posts))
				$ordered_array[$key] = array_splice($the_query->posts, 0, $value);

			if (in_array($key, array('third_set', 'last_set')) && !empty($ordered_array[$key]) && !empty($current_sponsored))
				$ordered_array[$key] = array_merge(array_slice($ordered_array[$key], 0, 1), array_splice($current_sponsored, 0, 1), array_slice($ordered_array[$key], 1));
		}

	} ?>
	<div class="container-fluid mt-5 pt-5 px-0">
		<div class="section content">
			<?php 
				tif_get_template('inc/' . $global_site . '/2posts-template.php', array('post_data' => $ordered_array['first_set']));
				tif_get_template('inc/' . $global_site . '/2posts-template.php', array('post_data' => $ordered_array['second_set']));
				tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['third_set']));
				tif_get_template('inc/' . $global_site . '/3posts-template.php', array('post_data' => $ordered_array['last_set']));
			?>
			<?php if (!empty($excluded_categories)): ?>
			<input type="hidden" id="args" value='<?php echo json_encode(array('category__not_in' => $excluded_categories)); ?>' />
			<?php else: ?>
			<input type="hidden" id="args" value='<?php echo json_encode(array('post__not_in' => array($post_id))); ?>' />
			<?php endif; ?>
		</div>
		<script>
			var thePattern = [2,2,3,3];
			var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
			var excludedSponsors = <?php echo !empty($exclude_sponsored_ids) ? json_encode($exclude_sponsored_ids) : '[]'; ?>;
			var allSponsors = <?php echo !empty($sponsored_ids) ? json_encode($sponsored_ids) : '[]'; ?>;
		</script>
	</div>
</div>

<?php get_footer(); ?>