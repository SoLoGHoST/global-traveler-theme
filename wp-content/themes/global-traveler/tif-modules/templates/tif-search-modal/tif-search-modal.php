<?php

/* Filename: tif-search-modal.php
 * Author: Solomon Closson (Think It First)
 * Description: Outputs a Search Boostrap Modal that fills the width and height of the entire page, when triggered.
 * 
 */

$search_query = get_search_query();
$search_query = !empty($search_query) ? trim(urldecode($search_query)) : '';
$error = get_query_var('error');

?>
<div id="tif-search-modal" class="modal tif-search-modal">
	<div class="modal-dialog w-100 h-100">
		<div class="modal-content">
			<div class="modal-header py-4">
				<div class="form-wrapper mx-auto my-2">
					<span class="underline"><?php echo !empty($search_query) && empty($error) ? $search_query : ''; ?></span>
					<?php get_search_form(); ?>
				</div>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<?php
			/*
			// These sections not being used... but could be, if needed...
			<div class="modal-body">
				Modal body..
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			*/ ?>
		</div>
	</div>
</div>
