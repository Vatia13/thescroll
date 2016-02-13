<?php

include_once get_template_directory()  . '/wp-admin/external/wpalchemy/MetaBox.php';

// global styles for the meta boxes
if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');

function metabox_style() {
	wp_enqueue_style('wpalchemy-metabox', get_template_directory_uri() . '/wp-admin/content-metaboxes/meta.css');
}

/*  ----------------------------------------------------------------------------
    load our custom meta
 */

$td_template_settings_path = get_template_directory() . '/wp-admin/content-metaboxes/';




/*  ----------------------------------------------------------------------------
    page meta
 */


//default page
$td_meta_homepage_loop = new WPAlchemy_MetaBox(array(
    'id' => 'td_page',
    'title' => 'Page template settings',
    'types' => array('page', 'my-custom-post-type'),
    'priority' => 'high',
    'template' => $td_template_settings_path . 'td_set_page.php',
));



//loop with slide
$td_meta_homepage_loop = new WPAlchemy_MetaBox(array(
    'id' => 'td_homepage_loop_slide',
    'title' => 'Homepage slide settings',
    'types' => array('page'),
    'priority' => 'high',
    'template' => $td_template_settings_path . 'td_set_homepage_loop_slide.php',
));

//homepage with loop
$td_meta_homepage_loop = new WPAlchemy_MetaBox(array(
    'id' => 'td_homepage_loop',
    'title' => 'Homepage latest articles',
    'types' => array('page'),
    'priority' => 'high',
    'template' => $td_template_settings_path . 'td_set_homepage_loop.php',
));


//homepage with loop
$td_meta_homepage_loop = new WPAlchemy_MetaBox(array(
    'id' => 'td_homepage_loop_filter',
    'title' => 'Homepage loop filter',
    'types' => array('page'),
    'priority' => 'high',
    'template' => $td_template_settings_path . 'td_set_homepage_loop_filter.php',
));



//loop with slide
$td_meta_homepage_loop = new WPAlchemy_MetaBox(array(
    'id' => 'td_unique_articles',
    'title' => 'Show only unique articles on this template',
    'types' => array('page'),
    'priority' => 'high',
    'template' => $td_template_settings_path . 'td_set_unique_articles.php',
));

/*  ----------------------------------------------------------------------------
    post meta
 */

// featured video
$td_meta_video_meta = new WPAlchemy_MetaBox(array(
    'id' => 'td_post_video',
    'title' => 'Featured Video',
    'types' => array('post'),
    'priority' => 'low',
    'context' => 'side',
    'template' => $td_template_settings_path . 'td_set_video_meta.php',
));

//product review
$td_metabox_product_rating = new WPAlchemy_MetaBox(array(
    'id' => 'td_review',
    'title' => 'Product review',
    'types' => array('post'),
    'priority' => 'high',
    'template' => get_template_directory() . '/wp-admin/content-metaboxes/td_set_reviews.php'
));

//post settings
$td_metabox_theme_settings = new WPAlchemy_MetaBox(array(
    'id' => 'td_post_theme_settings',
    'title' => 'Post settings',
    'types' => array('post'),
    'priority' => 'high',
    'template' => get_template_directory() . '/wp-admin/content-metaboxes/td_set_post_settings.php',
));


