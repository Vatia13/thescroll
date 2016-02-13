<?php




add_action( 'admin_head', 'fb_add_tinymce' );
function fb_add_tinymce() {
    global $typenow;

    // only on Post Type: post and page
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return ;

    add_filter( 'mce_external_plugins', 'fb_add_tinymce_plugin' );
    // Add to line 1 form WP TinyMCE
    add_filter( 'mce_buttons', 'fb_add_tinymce_button' );
}

// inlcude the js for tinymce
function fb_add_tinymce_plugin( $plugin_array ) {

    $plugin_array['fb_test'] = get_template_directory_uri() . '/wp-admin/tinymce/customcodes.js';
    // Print all plugin js path
    //var_dump( $plugin_array );
    return $plugin_array;
}

// Add the button key for address via JS
function fb_add_tinymce_button( $buttons ) {

    array_push( $buttons, 'fb_test_button_key' );
    // Print all buttons
    //var_dump( $buttons );
    return $buttons;
}













// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
    // Define the style_formats array
    $style_formats = array(
        // Each array child is a format with it's own settings

        array(
            'title' => 'text ⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-0',
            'wrapper' => true,
        ),


        array(
            'title' => '⇢ text',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-4',
            'wrapper' => true,
        ),


        array(
            'title' => '⇢ text ⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-1',
            'wrapper' => true,
        ),

        array(
            'title' => '⇢ text ⇠⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-3',
            'wrapper' => true,
        ),

        array(
            'title' => '⇢⇢ text ⇠⇠',
            'block' => 'div',
            'classes' => 'td-paragraph-padding-2',
            'wrapper' => true,
        ),


        array(
            'title' => 'Quote classic',
            'block' => 'blockquote',
            'classes' => 'td-quote-classic',
            'wrapper' => true,
        ),

        array(
            'title' => 'Quote author',
            'block' => 'div',
            'classes' => 'td-quote-author',
            'wrapper' => true,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );


// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');







/*
add_filter( 'wp_fullscreen_buttons', 'add_indent_button_to_fullscreen_editor' );

function add_indent_button_to_fullscreen_editor( $buttons ){
    $buttons[] = 'separator';
    $buttons['outdent'] = array(
        'title' => 'Outdent',
        'onclick' => "tinyMCE.execCommand('outdent');",
        'both' => false
    );
    $buttons['indent'] = array(
        'title' => 'Indent',
        'onclick' => "tinyMCE.execCommand('indent');",
        'both' => false
    );

    $buttons['ra'] = array(
        'title' => '⇢ text ⇠',
        'block' => 'div',
        'classes' => 'td-paragraph-padding-90',
        'wrapper' => true,
        'both' => true
    );

    return $buttons;
}

*/