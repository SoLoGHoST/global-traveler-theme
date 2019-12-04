<?php

// tif-global-api.php
global $all_sites, $global_site;

add_image_size('tif-global-api-thumb', 240, 100);

add_action('rest_api_init', 'tif_register_rest_fields');
function tif_register_rest_fields()
{
    register_rest_field(
    	array('post'),
        'featured_image',
        array(
            'get_callback'    => 'tif_get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );

    register_rest_field(
		array('post'),
		'acf_featured_image',
		array(
			'get_callback'    => 'tif_get_acf_featured_image',
			'update_callback' => null,
			'schema'          => null,
		)
	);
}

function tif_get_rest_featured_image($object, $field_name, $request)
{
    if($object['featured_media'])
    {
        $img = wp_get_attachment_image_src($object['featured_media'], 'tif-global-api-thumb');
        return !empty($img) && !empty($img[0]) ? $img[0] : false;
    }
    return false;
}

function tif_get_acf_featured_image($object, $field_name, $request)
{
	$featured_image = get_field('featured_image', $object['id']);

	if (!empty($featured_image) && isset($featured_image['sizes'], $featured_image['sizes']['tif-global-api-thumb']))
		return $featured_image['sizes']['tif-global-api-thumb'];

	return false;
}


add_filter('tif_global_api_get_posts', 'tif_global_get_posts_via_rest', 10, 2);

function tif_global_get_posts_via_rest($return = array(), $site = '') {
	
	global $all_sites, $global_site;

	if (empty($site))
		return $return;

	if (empty($global_site)) {
		$global_site = get_theme_mod('tif_global_site');
		$global_site = !empty($global_site) ? $global_site : 'trazeetravel';
	}

	if ($global_site == $site) return $return;

	$the_site_url = isset($all_sites, $all_sites[$site], $all_sites[$site]['url']) ? $all_sites[$site]['url'] : '';

	if (!empty($the_site_url))
	{
		$api_data = get_transient('global_site_' . $site);

		if (empty($api_data)) {

			$query_array = array();

			if ($site == 'globalusa')
				$query_array['categories_exclude'] = '125,3482,3483,3484,3485';

			$query_array['per_page'] = 4;

			$query_string = http_build_query($query_array);

			error_log($query_string);

			$response = wp_remote_get(untrailingslashit($the_site_url) . '/wp-json/wp/v2/posts?' . $query_string, array('sslverify' => false));

			if (is_wp_error($response)) {
				return $return;
			}

			$posts = json_decode(wp_remote_retrieve_body($response), true);

			if (!empty($posts)) {
				foreach($posts as $post) {
					$return[] = array(
						'title' => esc_html($post['title']['rendered']),
						'image' => !empty($post['featured_image']) ? $post['featured_image'] : '',
						'permalink' => $post['link'],
						'acf_featured_image' => !empty($post['acf_featured_image']) ? $post['acf_featured_image'] : ''
					);
				}

				set_transient('global_site_' . $site, $return, HOUR_IN_SECONDS);
			}
		} else
			$return = $api_data;
	}
	return $return;
}

?>