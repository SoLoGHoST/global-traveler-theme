<?php 
/*
	Filename: tif-video-modal.php
	Description: Modal with a video in it to be loaded on page load for the homepage only...
*/

if (!defined('ABSPATH')) exit();

if (!empty($video)):
?>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog h-75 d-flex flex-column justify-content-center mt-5 px-4 mx-auto">
	    <div class="modal-content px-2">
	        <div class="modal-body">
	        	<div class="skip-this my-2">
	        		<a href="javascript:void(0);" class="close" data-dismiss="modal" aria-hidden="true">Skip This &gt;</a>
	        	</div>
	            <div class="iframe-video">
	            	<div class="video-holder">
		            	<video class="video" id="video-gpro" muted="" playsinline="" webkit-playsinline="">
		            		<source src="<?php echo $video['url']; ?>" type="video/mp4" />
		            	</video>
		            	<a href="javascript:void(0);" class="unmute"><span>Click for Sound</span></a>
		            </div>
	            </div>
	        </div>
	    </div>
    </div>
</div>
<?php 
endif; ?>