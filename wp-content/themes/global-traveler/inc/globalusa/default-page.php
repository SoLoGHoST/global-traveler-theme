<?php

defined('ABSPATH') || exit;

global $post, $page_id, $global_site; ?>

<div id="content">
	<div class="container-fluid no-pad">
		<div id="posts-section" class="section content py-3">
<?php
	// output in here is different from the other site default-page.php... refer to single.php for how this should look...
	// do not want social media links on the left or categories on the right for these pages however...
	// After finished with the single post template for globalusa, than work on this!


	// Start the Loop.
while (have_posts()) :
	the_post();
	the_content();
endwhile; ?>
		</div>
	</div>
<?php
	tif_get_template('inc/instagram-feed.php', array()); ?>
</div>
