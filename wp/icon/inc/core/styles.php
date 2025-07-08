<?php
//STYLES connect start
if (!function_exists('icon_styles_setup')) :
    function icon_styles_setup()
    {
        $release_version = '1.0.3';
        wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.min.css'), array(), $release_version);
//        wp_enqueue_style('text-style', get_theme_file_uri('/assets/css/style-text.css'), array(), $release_version);
//        if (is_page_template('page-blog.php') || is_archive()) {
//            wp_enqueue_style('blog-page-style', get_theme_file_uri('/assets/css/blog-page.css'), array(), $release_version);
//        }
//        if (is_page_template('page-about.php')) {
//            wp_enqueue_style('about-page-style', get_theme_file_uri('/assets/css/about-page.css'), array(), $release_version);
//        }
//        if (is_singular('post')) {
//            wp_enqueue_style('article-page-style', get_theme_file_uri('/assets/css/article-page.css'), array(), $release_version);
//
//        }
    }
endif;
add_action('wp_enqueue_scripts', 'icon_styles_setup');

add_filter('wp_enqueue_scripts', 'true_dequeue_gutenberg_styles', 999);
function true_dequeue_gutenberg_styles()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}

//STYLES connect end