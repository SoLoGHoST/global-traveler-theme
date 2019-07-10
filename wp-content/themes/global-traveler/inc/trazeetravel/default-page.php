<?php

defined('ABSPATH') || exit; 

global $post, $page_id, $global_site; ?>

<div id="content" class="container-fluid no-pad my-5">
	<div class="section content px-5">
		<div class="mx-sm-5 px-sm-5">
<?php
	// Start the Loop.
while ( have_posts() ) :
	the_post();
	the_content();
endwhile; ?>
		</div>
	</div>
</div>