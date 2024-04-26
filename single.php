<?php
/**
 * Default single post page template (single.php)
 * snippet will go inside default loop
 */
if (have_posts()) :
    while (have_posts()) : the_post();
        // set count: check function exists
        if (function_exists('set_post_views')) {
            set_post_views(get_the_ID());
        }
        // get count: check function exists
        if (function_exists('get_post_views')) {
            echo get_post_views(get_the_ID());
        }
    endwhile;
else :
endif;
?>