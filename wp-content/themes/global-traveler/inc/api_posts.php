<?php
/*
	Filename:  api_posts.php
	Description: Partial for showing posts in the Top Menu from the API.
	Variables:  $site (string), $site_posts (array), $categories
*/

if (!defined('ABSPATH')) exit(0);

?>
<div id="site-<?php echo $site; ?>" class="container-fluid posts-api-wrapper">
	<div class="row">
		<?php 
		if (!empty($categories)): ?>
		<div class="col-24 col-sm-4">
			<ul class="categories list-unstyled">
				<?php
				foreach($categories as $category): ?>
				<li>
					<a href="<?php echo $category['url']; ?>" target="_blank">
						<h5><?php echo $category['title']; ?></h5>
					</a>
				</li>
				<?php
				endforeach; ?>
			</ul>
		</div>
		<?php
		endif; ?>
		<div class="col-24<?php echo !empty($categories) ? ' col-sm-20' : ''; ?>">
			<?php
			if (!empty($site_posts)): ?>
				<div class="row d-flex justify-content-around">
			<?php
				foreach($site_posts as $site_post): 

					$featured_image = !empty($site_post['acf_featured_image']) ? $site_post['acf_featured_image'] : $site_post['image']; ?>
				<div class="col-24 col-sm-6 post-box px-3">
					<div class="img-wrapper">
						<a href="<?php echo esc_url($site_post['permalink']); ?>" class="img-link"<?php echo !empty($featured_image) ? ' style="background-image: url(' . $featured_image . ');"' : ''; ?>></a>
					</div>
					<div class="copy">
						<h3 class="title">
							<a href="<?php echo esc_url($site_post['permalink']); ?>" class="title-link py-3">
								<span>
									<span class="text">
										<?php echo apply_filters('the_title', $site_post['title']); ?>
									</span>
								</span>
							</a>
						</h3>
					</div>
				</div>
			<?php
				endforeach; ?>
			</div>
			<?php
			endif; ?>
		</div>
	</div>
</div>