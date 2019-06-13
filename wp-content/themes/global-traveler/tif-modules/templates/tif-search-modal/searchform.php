<?php

$search_query = get_search_query();
$search_query = !empty($search_query) ? trim(urldecode($search_query)) : '';
$error = get_query_var('error'); ?>

<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="row">
		<div class="col-24">
			<label for="s" class="sr-only"><?php echo apply_filters('tif_search_label', __('Search', 'tif')); ?></label>
			<input type="text" class="search-field w-100" name="s" id="s" placeholder="<?php echo apply_filters('tif_search_placeholder', esc_attr('Search', 'tif')); ?>" value="<?php echo !empty($search_query) && empty($error) ? $search_query : ''; ?>" />
		</div>
	</div>
	<?php echo apply_filters('tif_search_submit_button', ''); ?>
</form>