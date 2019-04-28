<?php
/**
 * set post views meta key and value
 * @param int: post id
 */
function set_post_views($post_id) {
	if (is_numeric($post_id)) {
		// set meta key
		$meta_key = 'views';
		// get meta value
		$meta_value = get_post_meta($post_id, $meta_key, true);
		if ($meta_value == '') {
			// set meta value
			$meta_value = 1;
			// add meta key & value
			add_post_meta($post_id, $meta_key, $meta_value);
		} else {
			// increase by 1
			$meta_value++;
			update_post_meta($post_id, $meta_key, $meta_value);
		}
	}
}
/* get post views count
 * @param int: post id
 * @return int: count
 */
function get_post_views($post_id) {
	if (is_numeric($post_id)) {
		return get_post_meta($post_id, 'views', true);
	}
}
?>