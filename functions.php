<?php
/**
 * set post views meta key and value
 * @param int $post id
 */
function set_post_views($post_id) {
    if (is_numeric($post_id)) {
        $meta_key = 'post_views';
        if (metadata_exists('post', $post_id, $meta_key)) {
            // get value
            $get_value = get_post_meta($post_id, $meta_key, true);
            $meta_value = empty($get_value) ? 1 : $get_value++;
            // update value
            update_post_meta($post_id, $meta_key, $meta_value);
        } else {
            // set value
            $meta_value = 1;
            // add value
            add_post_meta($post_id, $meta_key, $meta_value);
        }
    }
}

/**
 * get post views count
 * @param int $post id
 * @return int count
 */
function get_post_views($post_id) {
    if (is_numeric($post_id)) {
        return get_post_meta($post_id, 'post_views', true);
    }
}
?>