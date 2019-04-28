<?php
/**
 * default single post page template
 * snippet will go inside default loop
 */
if (have_posts()) {
	while (have_posts()) {
		the_post();
		// set count one: call the function
		set_post_views(get_the_ID());
		// set count two: check before calling
		if (function_exists('set_post_views')) {
			set_post_views(get_the_ID());
		}
		// get count one: simply echo out
		echo get_post_views(get_the_ID());
		// get count two: check before calling
		if (function_exists('get_post_views')) {
			echo get_post_views(get_the_ID());
		}
	}
}
?>