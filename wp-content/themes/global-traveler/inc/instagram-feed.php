<?php 
/*
	Filename: instagram-feed.php
	Description: Pulls in instagram posts and content...
*/

if (!defined('ABSPATH')) exit(); 

$global_site = get_theme_mod('tif_global_site');
$instagram_account = 'trazeetravel';
switch($global_site)
{
	case 'trazeetravel':
		$instagram_account = 'trazeetravel';
	break;
	case 'whereverfamily':
		$instagram_account = 'whereverfamily';
	break;
	case 'globalusa':
		$instagram_account = 'globaltravelermag';
	break;
	default:
		$instagram_account = 'trazeetravel';
	break;
} ?>


<div id="instagram-feed" class="py-4 px-2 py-sm-5 px-sm-5 mb-5 mb-sm-0">
	<div class="col-24 px-2 px-sm-3">
		<h4 class="light title text-center"><span><span class="text">#trazeetravel</span></span></h4>
		<a href="https://www.instagram.com/<?php echo $instagram_account; ?>/" target="_blank" class="insta-feed"><i class="fa fa-instagram"></i><span class="text">Insta Feed</span></a>
	</div>
<?php
	$instagram_posts = apply_filters('get_instagram_feed', array(), 5, $instagram_account);

	if (!empty($instagram_posts) && !empty($instagram_posts['data'])): 

		$classes = array(
			2 => array('d-none', 'd-sm-block'),
			3 => array('d-none', 'd-md-block'),
			4 => array('d-none', 'd-lg-block')
		); ?>

		<div id="instagram-inner" class="container-fluid">
			<div class="row pb-3 pb-sm-5">
				<?php 
				foreach($instagram_posts['data'] as $key => $data): ?>
				<div class="col instagram-post<?php echo !empty($classes[$key]) ? ' ' . implode(' ', $classes[$key]) : ''; ?>">
					<a class="instagram-link" href="<?php echo esc_url($data['link']); ?>" target="_blank" style="background-image: url(<?php echo $data['images']['low_resolution']['url']; ?>);">
<!--
						<?php if (!empty($data['likes']['count'])): ?>
						<span class="likes">
							<span><i class="fa fa-heart"></i> <?php echo $data['likes']['count']; ?> Likes</span>
						</span>
						<?php endif; ?>
-->
					</a>
				</div>
				<?php 
				endforeach; ?>
			</div>
		</div>
<?php
	endif; ?>

<?php
/*
<?php
	function get_instagram($user_id=1317793634,$count=5,$width=232,$height=204){

    $url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token=1317793634.c13f70a.4ef40f68ef6a4c93bb366155d42dc341&count='.$count;

    $feed = get_instagram_feed($url);

    // echo '<a href="' . $url . '" target="_blank">Click me</a>';

    // Also Perhaps you should cache the results as the instagram API is slow
    // $cache = './'.sha1($url).'.json';
    $jsonData = json_decode($feed);

    // return '<pre>' . var_dump($jsonData) . '</pre>';

    $result = '<div id="instagram">'.PHP_EOL;
    foreach ($jsonData->data as $key=>$value) {
        $result .= "\t".'<a class="fancybox" data-fancybox-group="gallery" 
                            title="'.htmlentities($value->caption->text).' '.htmlentities(date("F j, Y, g:i a", $value->caption->created_time)).'"
                            style="padding:3px" href="'.$value->images->standard_resolution->url.'">
                          <img src="'.$value->images->low_resolution->url.'" alt="'.$value->caption->text.'" width="'.$width.'" height="'.$height.'" />
                          </a>'.PHP_EOL;
    }
    $result .= '</div>'.PHP_EOL;

    return $result;
}

echo get_instagram();

?>
*/ ?>
</div>
