<?php

defined('ABSPATH') || exit; 

// available variables:  $post_type = the post type to output at the bottom of this page...

global $post, $page_id, $global_site; ?>

<div id="content">
	<div class="container-fluid no-pad">
		<div id="posts-section" class="section content py-3">
<?php
	// Start the Loop.
while (have_posts()) :
	the_post();
	the_content();
endwhile; ?>
		</div>
	</div>
</div>