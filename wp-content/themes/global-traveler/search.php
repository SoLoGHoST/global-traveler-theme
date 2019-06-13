<?php 
	global $wp_query, $post;

get_header(); 

$has_more = false;
$ordered_array = array();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = (get_query_var('posts_per_page')) ? (int) get_query_var('posts_per_page') : (int) $wp_query->found_posts;

$start = (($paged * $posts_per_page) - $posts_per_page);
$error = get_query_var('error');

if (!empty($wp_query->query_vars['s']) && !have_posts()):
	tif_get_template('inc/heroes.php', array('type' => 'category', 'title' => 'Searching: ' . $wp_query->query_vars['s'])); ?>
	<div id="search-no-results" class="container-fluid no-pad my-5">
		<div class="section content">
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'tif' ); ?></p>
		</div>
	</div>
<?php 
elseif (!empty($error)): ?>
	<div id="search-error" class="container-fluid no-pad my-5">
		<div class="section content">
			<p><?php _e($error, 'tif'); ?></p>
		</div>
	</div>
<?php 
endif; ?>
	
<?php 
if (!empty($wp_query->query_vars['s']) && empty($error) && have_posts()): 

	tif_get_template('inc/heroes.php', array('type' => 'category', 'title' => 'Searching: ' . $wp_query->query_vars['s'])); ?>

	<div id="content" class="search-results container-fluid no-pad my-5">
		<div class="section content">

	<?php
		if (!empty($wp_query->posts)):

			$the_posts = $wp_query->posts;

			$total_posts = count($the_posts);

			if ($total_posts > ($posts_per_page - 1))
			{
				array_pop($the_posts);
				$has_more = true;
			}

			$order_pattern = array(
				'first_set' => 2,
				'second_set' => 2,
				'third_set' => 3,
				'last_set' => 3
			);

			foreach($order_pattern as $key => $value)
			{
				if (!empty($the_posts))
					$ordered_array[$key] = array_splice($the_posts, 0, $value);
			}

			tif_get_template('inc/2posts-template.php', array('post_data' => $ordered_array['first_set']));
			tif_get_template('inc/2posts-template.php', array('post_data' => $ordered_array['second_set']));
			tif_get_template('inc/3posts-template.php', array('post_data' => $ordered_array['third_set']));
			tif_get_template('inc/3posts-template.php', array('post_data' => $ordered_array['last_set'])); ?>

			<input type="hidden" id="args" value='<?php echo json_encode(array('s' => $wp_query->query_vars['s'])); ?>' />
		<?php
		endif; ?>
		</div>
		<script>
			var thePattern = [2,2,3,3];
			var noMoreLeft = <?php echo !empty($has_more) ? 'false' : 'true'; ?>;
			var theAds = [];
		</script>
	</div>
<?php // the_tif_posts_pagination(); ?>
<?php 
endif; ?>

<?php get_footer(); ?>