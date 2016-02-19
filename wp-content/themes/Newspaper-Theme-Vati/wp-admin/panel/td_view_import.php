<form id="td_panel_big_form" action="?page=td_theme_panel" method="post">
<input type="hidden" name="action" value="td_ajax_update_panel">
<div class="td_displaying_saving_gif"><img src="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/loading.gif"></div>
<img class="td_displaying_ok_gif" src="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/saved.gif">

<div class="wrap">

<div class="td-container-wrap">

<div class="td-panel-main-header">
    <img src="<?php echo get_template_directory_uri() . '/wp-admin/images/panel/panel-wrap/panel-logo.png'?>" alt=""/>
</div>


<div id="td-container-left">
    <div id="td-container-right">
        <div id="td-col-left">
            <ul class="td-panel-menu">
                <li class="td-welcome-menu">
                    <a data-td-is-back="yes" class="td-panel-menu-active" href="?page=td_theme_panel">
                        <span class="td-sp-nav-icon td-ico-welcome"></span>
                        IMPORT DEMO DATA
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-td-is-back="yes" href="?page=td_theme_panel">
                        <span class="td-sp-nav-icon td-ico-header"></span>
                        Back
                        <span class="td-arrow"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="td-col-rigth" class="td-panel-content">

            <!-- import data -->
            <div id="td-panel-import" class="td-panel-active td-panel">

                <!-- One click demo install -->
                <?php echo td_panel_generator::box_start('ONE CLICK DEMO INSTALL'); ?>

                <!-- Install demo data -->
                <div class="td-box-row">


                    <script>
                        function td_progressbar_step(step_to_percent) {
                            if (step_to_percent >= 100) {
                                jQuery('.td_progress_bar').hide();
                                jQuery('.td-loading').hide();
                                jQuery('.td-complete').show();
                                jQuery('.td-progress-show-details').show();
                            } else {
                                jQuery('.td_progress_bar div').css('width', step_to_percent + '%');
                            }
                        }


                        jQuery().ready(function() {
                            jQuery('.td-progress-show-details').click(function(){
                                jQuery(this).hide();
                                jQuery('.td-demo-msg').show('fast', function() {
                                    jQuery('#wpwrap').backstretch("resize");
                                });

                            });
                        });
                    </script>



                    <div class="td-section td-loading">
                        <div class="td-section-title">Loading the demo... </div>
                        <p>Please wait until the demo is loading. It may take one or two minutes.</p>
                    </div>

                    <div class="td-section td-complete" style="display:none">
                        <div class="td-section-title">The demo is live! :)</div>
                        <p>That's it. Remember that you can always recreate the demo by just pressing the load demo button from this admin. It will not create duplicates, it will just rebuild the demo pages.</p>
                    </div>

                    <div class="td_progress_bar_wrap">
                        <div class="td_progress_bar">
                            <div></div>
                        </div>
                        <div><a href="#" class="td-progress-show-details">Show details</a></div>


                        <?php

                        //return;
                        //new class
                        $td_demo_site = new td_demo_site();
                        $td_demo_site->total_progress_steps = 64; //used for loading bar


                        /*  ----------------------------------------------------------------------------
                            top menu
                         */
                        $td_demo_site->create_menu('td_demo_top');
                        $td_demo_site->add_top_menu('Products review');
                        $td_demo_site->add_top_menu('Custom 404');
                        $td_demo_site->add_top_menu('Contact us');
                        $td_demo_site->activate_menu('top-menu');


                        /*  ----------------------------------------------------------------------------
                            logo + ad
                         */
                        $td_demo_site->update_logo(get_template_directory_uri() . '/images/demo/logo-top.png', get_template_directory_uri() . '/images/demo/logo-top-retina.png');
                        $td_demo_site->add_ad_spot('demo top ad', '',
                            '<a href="#"><img src="' . $td_demo_site->get_demo_image('ad_top/ads-468.jpg') . '" alt="" /></a>',
                            '<a href="#"><img src="' . $td_demo_site->get_demo_image('ad_top/ads-468.jpg') . '" alt="" /></a>',
                            '<a href="#"><img src="' . $td_demo_site->get_demo_image('ad_top/ads-728.jpg') . '" alt="" /></a>'
                        );
                        $td_demo_site->set_header_adspot('demo top ad');


                        /*  ----------------------------------------------------------------------------
                            demo sidebar 1 //create custom sidebar in our theme option
                         */

                        //this is the new list with sidebars
                        $import_unique_id_key = uniqid() . '_' . rand(1, 999999);
                        td_util::update_option('sidebars', array($import_unique_id_key => 'demo-1'));


                        $td_demo_site->add_widget_to_sidebar('demo-1', 'td_social_widget', array(
                            'custom_title' => 'SOCIAL',
                            'facebook' => '#',
                            'youtube' => '#',
                            'github' => '#',
                            'google' => '#',
                            'googledrive' => '#',
                            'googlemaps' => '#',
                            'paypal' => '#'

                        ));

                        $td_demo_site->add_widget_to_sidebar('demo-1', 'td_block2_widget', array(
                            'sort' => '',
                            'custom_title' => 'LATEST REVIEWS',
                            'limit' => '3'
                        ));


                        $td_demo_site->add_widget_to_sidebar('demo-1', 'td_slide_widget', array(
                            'sort' => '',
                            'custom_title' => 'POPULAR VIDEO',
                            'limit' => '3'
                        ));




                        /*  ----------------------------------------------------------------------------
                            default sidebar
                         */
                        $td_demo_site->remove_widgets_from_sidebar('default');

                        //ad widget + adspot
                        $td_demo_site->add_ad_spot('demo sidebar ad',
                            '<a href="#"><img src="' . $td_demo_site->get_demo_image('ad_sidebar/ads-300.jpg') . '" alt="" /></a>',
                            '<a href="#"><img src="' . $td_demo_site->get_demo_image('ad_sidebar/ads-200.jpg') . '" alt="" /></a>',
                            '<a href="#"><img src="' . $td_demo_site->get_demo_image('ad_sidebar/ads-250.jpg') . '" alt="" /></a>',
                            '<a href="#"><img src="' . $td_demo_site->get_demo_image('ad_sidebar/ads-300.jpg') . '" alt="" /></a>'
                        );
                        $td_demo_site->add_widget_to_sidebar('default', 'td_ad_box_widget', array(
                            'spot_name' => 'Ad spot -- demo sidebar ad'
                        ));

                        $td_demo_site->add_widget_to_sidebar('default', 'td_block1_widget', array(
                            'sort' => '',
                            'custom_title' => 'RANDOM POSTS',
                            'limit' => '4',
                            'ajax_pagination' => "next_prev"
                        ));


                        /*  ----------------------------------------------------------------------------
                            footer widgets
                         */
                        $td_demo_site->remove_widgets_from_sidebar('footer-1');
                        $td_demo_site->add_widget_to_sidebar('footer-1', 'footer_logo_widget', array(
                            'logo_url' => get_template_directory_uri() . '/images/demo/logo-footer.png',
                            'logo_url_r' => get_template_directory_uri() . '/images/demo/logo-footer-retina.png',
                            'footer_text' => 'Newspaper is your news, entertainment, music & fashion website. We provide you with the latest breaking news and videos straight from the entertainment industry.',
                            'footer_text_2' => 'We are your all-access pass to all the A-List stars around the globe.',
                            'footer_email' => 'contact@tagdiv.com'
                        ));

                        $td_demo_site->remove_widgets_from_sidebar('footer-2');
                        $td_demo_site->add_widget_to_sidebar('footer-2', 'td_block4_widget', array(
                            'sort' => 'featured',
                            'custom_title' => 'FEATURED',
                            'limit' => '3'
                        ));

                        $td_demo_site->remove_widgets_from_sidebar('footer-3');
                        $td_demo_site->add_widget_to_sidebar('footer-3', 'td_popular_categories_widget', array(
                            'limit' => 7,
                            'custom_title' => 'POPULAR CATEGORIES'
                        ));

                        /*  ----------------------------------------------------------------------------
                            footer menu
                         */
                        $td_demo_site->create_menu('td_demo_footer');
                        $td_demo_site->add_top_menu('Privacy policy');
                        $td_demo_site->add_top_menu('Advertising');
                        $td_demo_site->add_top_menu('Contact us');
                        $td_demo_site->activate_menu('footer-menu');
                        $td_demo_site->set_theme_copyright('Copyright 2013 - your text');


                        /*  ----------------------------------------------------------------------------
                            create categories

                            $td_demo_site->add_category has an array parameter
                            @param[0] : name of category
                            @param[1] : parent category
                         */
                        $td_demo_site->add_category(array('Category 1', 0));
                        $td_demo_site->add_category(array('Category 2', 0));
                        $td_demo_site->add_category(array('Category 3', 0));



                        /*  ----------------------------------------------------------------------------
                            header menu - make the main menu
                         */
                        $td_demo_site->create_menu('td header');
                        $td_demo_site->activate_menu('header-menu');


                        /*  ----------------------------------------------------------------------------
                            pages
                         */
                        //add new pages to top menu
                        //old page
                        //$new_demo_page_64 = "W3ZjX3JvdyBlbF9wb3NpdGlvbj0iZmlyc3QgbGFzdCJdW3ZjX2NvbHVtbl1bdGRfc2xpZGVfYmlnIGxpbWl0PSI4IiBoaWRlX3RpdGxlPSJoaWRlX3RpdGxlIiBlbF9wb3NpdGlvbj0iZmlyc3QiXVt0ZF9ibG9jazIgbGltaXQ9IjMiIGN1c3RvbV90aXRsZT0iRE9OJ1QgTUlTUyIgc2hvd19jaGlsZF9jYXQ9IjMiIGFqYXhfcGFnaW5hdGlvbj0ibmV4dF9wcmV2Il1bL3ZjX2NvbHVtbl1bL3ZjX3Jvd10=";

                        //$new_demo_page_64 = "W3ZjX3JvdyBlbF9wb3NpdGlvbj0iZmlyc3QgbGFzdCJdW3ZjX2NvbHVtbl1bdGRfc2xpZGVfYmlnIGxpbWl0PSI4Il1bL3ZjX2NvbHVtbl1bL3ZjX3Jvd11bdmNfcm93XVt2Y19jb2x1bW4gd2lkdGg9IjIvMyJdW3RkX2Jsb2NrMiBsaW1pdD0iNiIgY3VzdG9tX3RpdGxlPSJET04nVCBNSVNTIiBhamF4X3BhZ2luYXRpb249Im5leHRfcHJldiJdW3RkX2Jsb2NrMSBsaW1pdD0iNSIgaGVhZGVyX2NvbG9yPSIjZjY1MjYxIiBjdXN0b21fdGl0bGU9IlRFQ0ggQU5EIEdBREdFVFMiIGFqYXhfcGFnaW5hdGlvbj0ibmV4dF9wcmV2Il1bdGRfYWRfYm94IHNwb3RfaWQ9ImN1c3RvbV9hZF8xIl1bdGRfYmxvY2syIGxpbWl0PSI2IiBjdXN0b21fdGl0bGU9IlRSQVZFTCBHVUlERVMiIGFqYXhfcGFnaW5hdGlvbj0ibmV4dF9wcmV2IiBoZWFkZXJfY29sb3I9IiM4MmI0NDAiXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvMyJdW3ZjX3dpZGdldF9zaWRlYmFyIHNpZGViYXJfaWQ9InRkLWRlZmF1bHQiXVsvdmNfY29sdW1uXVsvdmNfcm93XVt2Y19yb3ddW3ZjX2NvbHVtbiB3aWR0aD0iMi8zIl1bdGRfYmxvY2syIGxpbWl0PSI2IiBjdXN0b21fdGl0bGU9IkZBU0hJT04gQU5EIFRSRU5EUyIgYWpheF9wYWdpbmF0aW9uPSJuZXh0X3ByZXYiIGhlYWRlcl9jb2xvcj0iI2ZmM2U5ZiJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiB3aWR0aD0iMS8zIl1bdGRfYmxvY2s0IGxpbWl0PSIxIiBjdXN0b21fdGl0bGU9IkVESVRPUiBQSUNLUyIgYWpheF9wYWdpbmF0aW9uPSJuZXh0X3ByZXYiIGhlYWRlcl9jb2xvcj0iIzJiMmIyYiJdW3RkX2FkX2JveCBzcG90X2lkPSJzaWRlYmFyIl1bL3ZjX2NvbHVtbl1bL3ZjX3Jvd11bdmNfcm93XVt2Y19jb2x1bW4gd2lkdGg9IjEvMSJdW3RkX2FkX2JveCBzcG90X2lkPSJjdXN0b21fYWRfMSJdWy92Y19jb2x1bW5dWy92Y19yb3dd";

                        $new_demo_page_64 = '[vc_row el_position="first last"][vc_column][td_slide_big limit="8"][/vc_column][/vc_row][vc_row][vc_column width="2/3"][td_block2 limit="6" custom_title="DON\'T MISS" ajax_pagination="next_prev"][td_block1 limit="5" header_color="#f65261" custom_title="TECH AND GADGETS" ajax_pagination="next_prev"][td_ad_box spot_id="custom_ad_1"][td_block2 limit="6" custom_title="TRAVEL GUIDES" ajax_pagination="next_prev" header_color="#82b440"][/vc_column][vc_column width="1/3"][vc_widget_sidebar sidebar_id="td-demo-1"][/vc_column][/vc_row][vc_row][vc_column width="2/3"][td_block2 limit="6" custom_title="FASHION AND TRENDS" ajax_pagination="next_prev" header_color="#ff3e9f"][/vc_column][vc_column width="1/3"][td_block4 limit="1" custom_title="EDITOR PICKS" ajax_pagination="next_prev" header_color="#2b2b2b"][td_ad_box spot_id="sidebar"][/vc_column][/vc_row][vc_row][vc_column width="1/1"][td_ad_box spot_id="custom_ad_1"][/vc_column][/vc_row]';

                        //$td_demo_site->create_page('page', 'Home', base64_decode($new_demo_page_64), 'page-homepage-loop.php');
                        $td_demo_site->create_page('page', 'Home', $new_demo_page_64, 'page-homepage-loop.php');
                        $td_demo_site->add_top_page('[menu_home]');
                        $td_demo_site->set_homepage();
                        $td_demo_site->update_post_meta('td_homepage_loop', 'td_layout', '6');
                        $td_demo_site->update_post_meta('td_homepage_loop', 'featured_posts', 'show_featured_posts');



                        //category pages
                        //main category menu + homepage submenu
                        $td_demo_site->add_top_menu('[menu_category]');

                        $td_demo_site->add_sub_page_custom(array('menu-item-title' => 'Category 1', 'menu-item-type' => 'taxonomy' , 'id' => $td_demo_site->category_array[0]));
                        td_global::$td_options['category_options'][$td_demo_site->category_array[0]] = array('tdc_layout' => 6);


                        $td_demo_site->add_sub_page_custom(array('menu-item-title' => 'Category 2', 'menu-item-type' => 'taxonomy', 'id' => $td_demo_site->category_array[1]));
                        td_global::$td_options['category_options'][$td_demo_site->category_array[1]] = array('tdc_layout' => 6, 'tdc_sidebar_pos' => 'no_sidebar');


                        $td_demo_site->add_sub_page_custom(array('menu-item-title' => 'Category 3', 'menu-item-type' => 'taxonomy', 'id' => $td_demo_site->category_array[2]));
                        td_global::$td_options['category_options'][$td_demo_site->category_array[2]] = array('tdc_layout' => 4);


                        //save all the themes settings
                        update_option(TD_THEME_OPTIONS_NAME, td_global::$td_options );



                        //homepages
                        $td_demo_site->add_top_menu('Homepages');


                        $new_demo_page_64 = "W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIxLzEiXVt0ZF9zbGlkZV9iaWcgbGltaXQ9IjgiIGhpZGVfdGl0bGU9ImhpZGVfdGl0bGUiXVsvdmNfY29sdW1uXVsvdmNfcm93XVt2Y19yb3ddW3ZjX2NvbHVtbiB3aWR0aD0iMi8zIl1bdGRfYmxvY2syIGxpbWl0PSI2IiBzaG93X2NoaWxkX2NhdD0iMyIgYWpheF9wYWdpbmF0aW9uPSJuZXh0X3ByZXYiIGN1c3RvbV90aXRsZT0iU29tZSB0aXRsZSJdW3RkX3NsaWRlIGxpbWl0PSIzIiBoaWRlX3RpdGxlPSJoaWRlX3RpdGxlIiBzb3J0PSJwb3B1bGFyIl1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIHdpZHRoPSIxLzMiXVt0ZF9hZF9ib3ggc3BvdF9uYW1lPSJBZCBzcG90IC0tIHNpZGViYXIgYWQiXVt0ZF9zb2NpYWxfY291bnRlciBmYWNlYm9vaz0idGhlbWVmb3Jlc3QiIHR3aXR0ZXI9ImVudmF0byIgeW91dHViZT0iY29sbGVnZWh1bW9yIl1bdmNfdGFic11bdmNfdGFiIHRpdGxlPSJURUNIIiB0YWJfaWQ9IjEzNzc2ODg0NTItMS04NyJdW3RkX2Jsb2NrNCBsaW1pdD0iNCIgaGlkZV90aXRsZT0iaGlkZV90aXRsZSJdWy92Y190YWJdW3ZjX3RhYiB0aXRsZT0iVklERU8iIHRhYl9pZD0iMTM3NzY4ODQ1Mi0yLTg5Il1bdGRfYmxvY2s0IGxpbWl0PSI0IiBoaWRlX3RpdGxlPSJoaWRlX3RpdGxlIl1bL3ZjX3RhYl1bdmNfdGFiIHRpdGxlPSJHQU1FUyIgdGFiX2lkPSIxMzc3Njg4NjA3MjQyLTItMyJdW3RkX2Jsb2NrNCBsaW1pdD0iNCIgaGlkZV90aXRsZT0iaGlkZV90aXRsZSJdWy92Y190YWJdWy92Y190YWJzXVsvdmNfY29sdW1uXVsvdmNfcm93XQ==";
                        $td_demo_site->create_page('page', 'Homepage 2', base64_decode($new_demo_page_64), 'page-homepage-loop.php');
                        $td_demo_site->add_sub_page();


                        $new_demo_page_64 = "W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIyLzMiXVt0ZF9zbGlkZSBsaW1pdD0iNSIgaGlkZV90aXRsZT0iaGlkZV90aXRsZSJdW3RkX2Jsb2NrMSBsaW1pdD0iNSIgc29ydD0icG9wdWxhciIgY3VzdG9tX3RpdGxlPSJNT1NUIFBPUFVMQVIiIGFqYXhfcGFnaW5hdGlvbj0ibG9hZF9tb3JlIl1bdGRfYmxvY2syIGxpbWl0PSI2IiBzaG93X2NoaWxkX2NhdD0iMyIgYWpheF9wYWdpbmF0aW9uPSJuZXh0X3ByZXYiXVt2Y19yb3dfaW5uZXJdW3ZjX2NvbHVtbl9pbm5lciB3aWR0aD0iMS8yIl1bdGRfc2xpZGUgbGltaXQ9IjMiXVsvdmNfY29sdW1uX2lubmVyXVt2Y19jb2x1bW5faW5uZXIgd2lkdGg9IjEvMiJdW3RkX2Jsb2NrNCBsaW1pdD0iNSJdWy92Y19jb2x1bW5faW5uZXJdWy92Y19yb3dfaW5uZXJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiB3aWR0aD0iMS8zIl1bdGRfc29jaWFsX2NvdW50ZXIgZmFjZWJvb2s9InRoZW1lZm9yZXN0IiB0d2l0dGVyPSJlbnZhdG8iIHlvdXR1YmU9Impvbmxham9pZSJdW3RkX2Jsb2NrMyBsaW1pdD0iMyIgY3VzdG9tX3RpdGxlPSJMQVRFU1QgVklERU8iXVt0ZF9hZF9ib3ggc3BvdF9uYW1lPSJBZCBzcG90IC0tIHNpZGViYXIgYWQiXVt0ZF9ibG9jazIgbGltaXQ9IjQiIGN1c3RvbV90aXRsZT0iVFJBVkVMIl1bL3ZjX2NvbHVtbl1bL3ZjX3Jvd10=";
                        $td_demo_site->create_page('page', 'Homepage 3', base64_decode($new_demo_page_64), 'page-homepage-blank.php');
                        $td_demo_site->add_sub_page();


                        $new_demo_page_64 = "W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIyLzMiXVt0ZF9zbGlkZSBsaW1pdD0iNSIgaGlkZV90aXRsZT0iaGlkZV90aXRsZSJdW3RkX2Jsb2NrMSBsaW1pdD0iNSIgc29ydD0icG9wdWxhciIgY3VzdG9tX3RpdGxlPSJNT1NUIFBPUFVMQVIiIGFqYXhfcGFnaW5hdGlvbj0ibG9hZF9tb3JlIl1bdGRfYmxvY2syIGxpbWl0PSI2IiBzaG93X2NoaWxkX2NhdD0iMyIgYWpheF9wYWdpbmF0aW9uPSJuZXh0X3ByZXYiIGN1c3RvbV90aXRsZT0iU29tZSB0aXRsZSJdW3ZjX3Jvd19pbm5lcl1bdmNfY29sdW1uX2lubmVyIHdpZHRoPSIxLzIiXVt0ZF9zbGlkZSBsaW1pdD0iMyIgY3VzdG9tX3RpdGxlPSJTb21lIHRpdGxlIl1bL3ZjX2NvbHVtbl9pbm5lcl1bdmNfY29sdW1uX2lubmVyIHdpZHRoPSIxLzIiXVt0ZF9ibG9jazQgbGltaXQ9IjUiIGN1c3RvbV90aXRsZT0iU29tZSB0aXRsZSJdWy92Y19jb2x1bW5faW5uZXJdWy92Y19yb3dfaW5uZXJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiB3aWR0aD0iMS8zIl1bdGRfc29jaWFsX2NvdW50ZXIgZmFjZWJvb2s9InRoZW1lZm9yZXN0IiB0d2l0dGVyPSJlbnZhdG8iIHlvdXR1YmU9Impvbmxham9pZSJdW3RkX2Jsb2NrMyBsaW1pdD0iMyIgY3VzdG9tX3RpdGxlPSJMQVRFU1QgVklERU8iXVt0ZF9hZF9ib3ggc3BvdF9uYW1lPSJBZCBzcG90IC0tIHNpZGViYXIgYWQiXVt0ZF9ibG9jazIgbGltaXQ9IjQiIGN1c3RvbV90aXRsZT0iVFJBVkVMIl1bL3ZjX2NvbHVtbl1bL3ZjX3Jvd10=";
                        $td_demo_site->create_page('page', 'Homepage – with background', base64_decode($new_demo_page_64), 'page-homepage-bg-loop.php');
                        $td_demo_site->add_sub_page();


                        $new_demo_page_64 = 'W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIxLzEiXVt0ZF9zbGlkZV9iaWcgbGltaXQ9IjgiIGhpZGVfdGl0bGU9ImhpZGVfdGl0bGUiXVt0ZF9ibG9jazIgY3VzdG9tX3RpdGxlPSJJbmZpbml0ZSBzY3JvbGwiIHNob3dfY2hpbGRfY2F0PSIzIl1bL3ZjX2NvbHVtbl1bL3ZjX3Jvd11bdmNfcm93XVt2Y19jb2x1bW4gd2lkdGg9IjIvMyJdW3RkX2Jsb2NrMyBsaW1pdD0iMTAiIGFqYXhfcGFnaW5hdGlvbj0iaW5maW5pdGUiIGN1c3RvbV90aXRsZT0iTGF0ZXN0IGFydGljbGVzIl1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIHdpZHRoPSIxLzMiXVt2Y193aWRnZXRfc2lkZWJhciBzaWRlYmFyX2lkPSJ0ZC1kZWZhdWx0Il1bL3ZjX2NvbHVtbl1bL3ZjX3Jvd10=';
                        $td_demo_site->create_page('page', 'Homepage infinite scroll', base64_decode($new_demo_page_64), 'page-homepage-blank.php');
                        $td_demo_site->add_sub_page();

                        $new_demo_page_64 = 'W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIyLzMiXVt0ZF9zbGlkZSBjYXRlZ29yeV9pZD0iOTgiIGxpbWl0PSI1IiBoaWRlX3RpdGxlPSJoaWRlX3RpdGxlIl1bdGRfYmxvY2sxIGxpbWl0PSI1IiBzb3J0PSJwb3B1bGFyIiBjdXN0b21fdGl0bGU9Ik1PU1QgUE9QVUxBUiIgYWpheF9wYWdpbmF0aW9uPSJsb2FkX21vcmUiXVt0ZF9ibG9jazIgbGltaXQ9IjYiIHNob3dfY2hpbGRfY2F0PSIzIiBhamF4X3BhZ2luYXRpb249Im5leHRfcHJldiJdW3ZjX3Jvd19pbm5lcl1bdmNfY29sdW1uX2lubmVyIHdpZHRoPSIxLzIiXVt0ZF9zbGlkZSBsaW1pdD0iMyJdWy92Y19jb2x1bW5faW5uZXJdW3ZjX2NvbHVtbl9pbm5lciB3aWR0aD0iMS8yIl1bdGRfYmxvY2s0IGxpbWl0PSI1Il1bL3ZjX2NvbHVtbl9pbm5lcl1bL3ZjX3Jvd19pbm5lcl1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIHdpZHRoPSIxLzMiXVt0ZF9zb2NpYWxfY291bnRlciBmYWNlYm9vaz0idGhlbWVmb3Jlc3QiIHR3aXR0ZXI9ImVudmF0byIgeW91dHViZT0iam9ubGFqb2llIl1bdGRfYmxvY2szIGxpbWl0PSIzIiBjdXN0b21fdGl0bGU9IkxBVEVTVCBWSURFTyJdW3RkX2FkX2JveCBzcG90X25hbWU9IkFkIHNwb3QgLS0gc2lkZWJhciBhZCIgc3BvdF9pZD0ic2lkZWJhciJdW3RkX2Jsb2NrMiBjYXRlZ29yeV9pZD0iOTgiIGxpbWl0PSI0IiBjdXN0b21fdGl0bGU9IlRSQVZFTCJdWy92Y19jb2x1bW5dWy92Y19yb3dd';
                        $td_demo_site->create_page('page', 'Homepage 3 – magazinly', base64_decode($new_demo_page_64), 'page-homepage-blank.php');
                        $td_demo_site->add_sub_page();


                        $new_demo_page_64 = 'W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIxLzEiXVt0ZF9zbGlkZV9iaWcgbGltaXQ9IjEyIiBoaWRlX3RpdGxlPSJoaWRlX3RpdGxlIl1bdGRfYmxvY2syIHNvcnQ9InBvcHVsYXIiIGxpbWl0PSIzIiBzaG93X2NoaWxkX2NhdD0iMyJdWy92Y19jb2x1bW5dWy92Y19yb3dd';
                        $td_demo_site->create_page('page', 'Homepage 3 columns', base64_decode($new_demo_page_64), 'page-homepage-loop.php');
                        $td_demo_site->add_sub_page();


                        //contact
                        $new_demo_page_64 = "W3ZjX3JvdyBlbF9wb3NpdGlvbj0iZmlyc3QgbGFzdCJdW3ZjX2NvbHVtbiB3aWR0aD0iMi8zIl1bdmNfY29sdW1uX3RleHRdDQoNCkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNjaW5nIGVsaXQuIFN1c3BlbmRpc3NlIG5vbiBudW5jIGFjIHF1YW0gY29uZ3VlIGZlcm1lbnR1bSBldCB2ZWwgbWFzc2EuIFByb2luIGltcGVyZGlldCBwdWx2aW5hciByaG9uY3VzLiBJbnRlZ2VyIGluIGVsaXQgYWNjdW1zYW4sIHVsbGFtY29ycGVyIGFudGUgbm9uLCBjb21tb2RvIHZlbGl0LiBOdW5jIGx1Y3R1cyBzY2VsZXJpc3F1ZSBkdWksIHZpdGFlIGx1Y3R1cyBlc3QgYXVjdG9yIGV1Lg0KDQpbL3ZjX2NvbHVtbl90ZXh0XVt2Y19nbWFwcyBsaW5rPSJodHRwOi8vbWFwcy5nb29nbGUuY29tL21hcHM/cT1Ub3duK0hhbGwrU3F1YXJlLCtLZW50K1N0cmVldCwrU3lkbmV5LCtOZXcrU291dGgrV2FsZXMsK0F1c3RyYWxpYSZhbXA7aGw9ZW4mYW1wO3NsbD0tMzMuODg3NDY0LDE1MS4xODc5NjgmYW1wO3NzcG49MC4wMDc0NzIsMC4wMTY1MTImYW1wO29xPXNxdWFyZSthdXN0cmFsaWErc3kmYW1wO3Q9aCZhbXA7aHE9VG93bitIYWxsK1NxdWFyZSwmYW1wO2huZWFyPUtlbnQrU3QsK05ldytTb3V0aCtXYWxlcysyMDAwLCtBdXN0cmFsaWEmYW1wO3o9MTYiIHNpemU9IjMwOCIgdHlwZT0ibSIgem9vbT0iMTQiXVt2Y19yb3dfaW5uZXJdW3ZjX2NvbHVtbl9pbm5lciB3aWR0aD0iMS8yIl1bdGRfdGV4dF93aXRoX3RpdGxlIHRpdGxlPSJDb250YWN0IiBzdHlsZT0ic3R5bGVfMiIgZWxfcG9zaXRpb249ImZpcnN0IGxhc3QiIGN1c3RvbV90aXRsZT0iQ09OVEFDVCBERVRBSUxTIl0NCg0KTmV3c3BhcGVyIENvbXVuaWNhdGlvbiBTZXJ2aWNlDQo0MjUgU2FudGEgVGVyZXNhIFN0Lg0KU3RhbmZvcmQsIENBIDQ1MiAxNCA1MjENCg0KKDY1MCkgNzIzLTI1NTggKG1haW4gbnVtYmVyKQ0KKDY1MCkgNzI1LTAyNDcgKGZheCkNCg0KRW1haWw6IGNvbnRhY3RAbmV3c3BhcGVyLmNvbQ0KDQpbL3RkX3RleHRfd2l0aF90aXRsZV1bL3ZjX2NvbHVtbl9pbm5lcl1bdmNfY29sdW1uX2lubmVyIHdpZHRoPSIxLzIiXVt0ZF9zb2NpYWwgY3VzdG9tX3RpdGxlPSJPVVIgU09DSUFMIFBST0ZJTEVTIiBpY29uX3N0eWxlPSIxIiBpY29uX3NpemU9IjMyIiBkcmliYmJsZT0iaHR0cDovL3d3dy50YWdkaXYuY29tIiBmYWNlYm9vaz0iaHR0cDovL3d3dy50YWdkaXYuY29tIiBnb29nbGVwbHVzPSIjIiBncm9vdmVzaGFyaz0iaHR0cDovL3d3dy50YWdkaXYuY29tIiBsaW5rZWRpbj0iIyIgdHdpdHRlcj0iaHR0cDovL3d3dy50YWdkaXYuY29tIiB5b3V0dWJlPSJodHRwOi8vd3d3LnRhZ2Rpdi5jb20iIGVsX3Bvc2l0aW9uPSJmaXJzdCJdW3RkX3RleHRfd2l0aF90aXRsZSBjdXN0b21fdGl0bGU9IldPUktJTkcgSE9VUiJdDQoNClRoZSBvZmZpY2UgaXMgb3BlbiBmcm9tIDggYS5tLiB0byA1IHAubS4gTW9uZGF5IHRocm91Z2ggRnJpZGF5IGV4Y2VwdCB1bml2ZXJzaXR5IGhvbGlkYXlzLg0KDQpbL3RkX3RleHRfd2l0aF90aXRsZV1bL3ZjX2NvbHVtbl9pbm5lcl1bL3ZjX3Jvd19pbm5lcl1bY29udGFjdC1mb3JtLTcgaWQ9Ijc5NyIgdGl0bGU9IkxFQVZFIFVTIEEgTUVTU0FHRSJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiB3aWR0aD0iMS8zIl1bdmNfd2lkZ2V0X3NpZGViYXIgc2lkZWJhcl9pZD0idGQtZGVmYXVsdCIgZWxfcG9zaXRpb249ImZpcnN0IGxhc3QiXVsvdmNfY29sdW1uXVsvdmNfcm93XQ==";
                        $td_demo_site->create_page('page', 'Home', base64_decode($new_demo_page_64), 'page-pagebuilder-title.php');
                        $td_demo_site->add_top_page('Contact us');


                        /*  ----------------------------------------------------------------------------
                            posts
                         */

                        //post content - no images path
                        $post_content_NO_images_path = 'DQo8ZGl2IGNsYXNzPSJ0ZC1wYXJhZ3JhcGgtcGFkZGluZy0xIj4NCg0KQWxsIHJpZ2h0LiBXZWxsLCB0YWtlIGNhcmUgeW91cnNlbGYuIEkgZ3Vlc3MgdGhhdCdzIHdoYXQgeW91J3JlIGJlc3QsIHByZXNlbmNlIG9sZCBtYXN0ZXI/IEEgdHJlbW9yIGluIHRoZSBGb3JjZS4gVGhlIGxhc3QgdGltZSBmZWx0IGl0IHdhcyBpbiB0aGUgcHJlc2VuY2Ugb2YgbXkgb2xkIG1hc3Rlci4gSSBoYXZlIHRyYWNlZCB0aGUgUmViZWwgc3BpZXMgdG8gaGVyLiBOb3cgc2hlIGlzIG15IG9ubHkgbGluayB0byBmaW5kaW5nIHRoZWlyIHNlY3JldCBiYXNlLiBBIHRyZW1vciBpbiB0aGUgRm9yY2UuIFRoZSBsYXN0IHRpbWUgSSBmZWx0IGl0IHdhcyBpbiB0aGUgcHJlc2VuY2Ugb2YgbXkgb2xkIG1hc3Rlci4NCg0KUmVtZW1iZXIsIGEgSmVkaSBjYW4gZmVlbCB0aGUgRm9yY2UgZmxvd2luZyB0aHJvdWdoIGhpbS4gSSBjYW4ndCBnZXQgaW52b2x2ZWQhIEkndmUgZ290IHdvcmsgdG8gZG8hIEl0J3Mgbm90IHRoYXQgSSBsaWtlIHRoZSBFbXBpcmUsIEkgaGF0ZSBpdCwgYnV0IHRoZXJlJ3Mgbm90aGluZyBJIGNhbiBkbyBhYm91dCBpdCByaWdodCBub3cuIEl0J3Mgc3VjaCBhIGxvbmcgd2F5IGZyb20gaGVyZS4gSSBjYWxsIGl0IGx1Y2suIFlvdSBhcmUgYSBwYXJ0IG9mIHRoZSBSZWJlbCBBbGxpYW5jZSBhbmQgYSB0cmFpdG9yISBUYWtlIGhlciBhd2F5IQ0KPGJsb2NrcXVvdGUgY2xhc3M9InRkLXF1b3RlLWNsYXNzaWMiPkRlc2lnbiBpcyBub3QganVzdCB3aGF0IGl0IGxvb2tzIGxpa2UgYW5kIGZlZWxzIGxpa2UuIERlc2lnbiBpcyBob3cgaXQgd29ya3MuPC9ibG9ja3F1b3RlPg0KVGhlIHBsYW5zIHlvdSByZWZlciB0byB3aWxsIHNvb24gYmUgYmFjayBpbiBvdXIgaGFuZHMuIFRoZSBwbGFucyB5b3UgcmVmZXIgdG8gd2lsbCBzb29uIGJlIGJhY2sgaW4gb3VyIGhhbmRzLiBMZWF2ZSB0aGF0IHRvIG1lLiBTZW5kIGEgZGlzdHJlc3Mgc2lnbmFsLCBhbmQgaW5mb3JtIHRoZSBTZW5hdGUgdGhhdCBhbGwgb24gYm9hcmQgd2VyZSBraWxsZWQuIFJlZCBGaXZlIHN0YW5kaW5nIGJ5Lg0KDQpJIGZpbmQgeW91ciBsYWNrIG9mIGZhaXRoIGRpc3R1cmJpbmcuIEEgdHJlbW9yIGluIHRoZSBGb3JjZS4gVGhlIGxhc3QgdGltZSBJIGZlbHQgaXQgd2FzIGluIHRoZSBwcmVzZW5jZSBvZiBteSBvbGQgbWFzdGVyLiBIZXksIEx1a2UhIE1heSB0aGUgRm9yY2UgYmUgd2l0aCB5b3UuIFJlZCBGaXZlIHN0YW5kaW5nIGJ5LiBSZWQgRml2ZSBzdGFuZGluZyBieS4gWW91ciBleWVzIGNhbiBkZWNlaXZlIHlvdS4gRG9uJ3QgdHJ1c3QgdGhlbS4NCg0KPC9kaXY+DQoNCltjYXB0aW9uIGlkPSJhdHRhY2htZW50XzQxMjYiIGFsaWduPSJhbGlnbmNlbnRlciIgd2lkdGg9IjcwMCJdPGEgaHJlZj0ieHh4X3BhdGhfdG9fZmlsZV94eHgvaW1hZ2VzL2RlbW8vcDEuanBnIiByZWw9ImF0dGFjaG1lbnQgd3AtYXR0LTQxMjYiPjxpbWcgY2xhc3M9IiB0ZC1tb2RhbC1pbWFnZSB3cC1pbWFnZS00MTI2IiBzcmM9Inh4eF9wYXRoX3RvX2ZpbGVfeHh4L2ltYWdlcy9kZW1vL3AxLmpwZyIgYWx0PSIiIHdpZHRoPSI3MDAiIGhlaWdodD0iMzk0IiAvPjwvYT4gVGhlIG5ldyBjb25jZXB0IHNweWRlclsvY2FwdGlvbl0NCg0KPGRpdiBjbGFzcz0idGQtcGFyYWdyYXBoLXBhZGRpbmctMSI+DQoNCkhva2V5IHJlbGlnaW9ucyBhbmQgYW5jaWVudCB3ZWFwb25zIGFyZSBubyBtYXRjaCBmb3IgYSBnb29kIGJsYXN0ZXIgYXQgeW91ciBzaWRlLCBraWQuIEkgZmluZCB5b3VyIGxhY2sgb2YgZmFpdGggZGlzdHVyYmluZy4gVGhlIG1vcmUgeW91IHRpZ2h0ZW4geW91ciBncmlwLCBUYXJraW4sIHRoZSBtb3JlIHN0YXIgc3lzdGVtcyB3aWxsIHNsaXAgdGhyb3VnaCB5b3VyIGZpbmdlcnMuIEFzIHlvdSB3aXNoLg0KDQpUaGUgbW9yZSB5b3UgdGlnaHRlbiB5b3VyIGdyaXAsIFRhcmtpbiwgdGhlIG1vcmUgc3RhciBzeXN0ZW1zIHdpbGwgc2xpcCB0aHJvdWdoIHlvdXIgZmluZ2Vycy4gSW4gbXkgZXhwZXJpZW5jZSwgdGhlcmUgaXMgbm8gc3VjaCB0aGluZyBhcyBsdWNrLiBSZWQgRml2ZSBzdGFuZGluZyBieS4NCg0KPC9kaXY+DQo8YmxvY2txdW90ZSBjbGFzcz0idGQtcXVvdGUtY2xhc3NpYyI+VGhhbmtzIGZvciBsb29raW5nIGF0IG91ciB0aGVtZS48L2Jsb2NrcXVvdGU+DQo8ZGl2IGNsYXNzPSJ0ZC1wYXJhZ3JhcGgtcGFkZGluZy0xIj4NCg0KSSBuZWVkIHlvdXIgaGVscCwgTHVrZS4gU2hlIG5lZWRzIHlvdXIgaGVscC4gSSdtIGdldHRpbmcgdG9vIG9sZCBmb3IgdGhpcyBzb3J0IG9mIHRoaW5nLiBPaCBHb2QsIG15IHVuY2xlLiBIb3cgYW0gSSBldmVyIGdvbm5hIGV4cGxhaW4gdGhpcz8gQXMgeW91IHdpc2guIEVzY2FwZSBpcyBub3QgaGlzIHBsYW4uIEkgbXVzdCBmYWNlIGhpbSwgYWxvbmUuIFlvdSBtZWFuIGl0IGNvbnRyb2xzIHlvdXIgYWN0aW9ucz8NCg0KUmVtZW1iZXIsIGEgSmVkaSBjYW4gZmVlbCB0aGUgRm9yY2UgZmxvd2luZyB0aHJvdWdoIGhpbS4gVGhlIHBsYW5zIHlvdSByZWZlciB0byB3aWxsIHNvb24gYmUgYmFjayBpbiBvdXIgaGFuZHMuIFllLWhhISBUaGUgcGxhbnMgeW91IHJlZmVyIHRvIHdpbGwgc29vbiBiZSBiYWNrIGluIG91ciBoYW5kcy4NCg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJ0ZC1wYXJhZ3JhcGgtcGFkZGluZy0wIj4NCg0KW2NhcHRpb24gaWQ9ImF0dGFjaG1lbnRfNDEyMyIgYWxpZ249ImFsaWdubGVmdCIgd2lkdGg9IjI1MSJdPGEgaHJlZj0ieHh4X3BhdGhfdG9fZmlsZV94eHgvaW1hZ2VzL2RlbW8vcDIuanBnIiByZWw9ImF0dGFjaG1lbnQgd3AtYXR0LTQxMjMiPjxpbWcgY2xhc3M9IiB0ZC1tb2RhbC1pbWFnZSB3cC1pbWFnZS00MTIzIiBzcmM9Inh4eF9wYXRoX3RvX2ZpbGVfeHh4L2ltYWdlcy9kZW1vL3AyLmpwZyIgYWx0PSIiIHdpZHRoPSIyNTEiIGhlaWdodD0iMzc1IiAvPjwvYT4gUGhvdG9zaG9vdCBwb3J0cmFpdCBvdXRkb29yWy9jYXB0aW9uXQ0KDQpIb2tleSByZWxpZ2lvbnMgYW5kIGFuY2llbnQgd2VhcG9ucyBhcmUgbm8gbWF0Y2ggZm9yIGEgZ29vZCBibGFzdGVyIGF0IHlvdXIgc2lkZSwga2lkLiBJIGZpbmQgeW91ciBsYWNrIG9mIGZhaXRoIGRpc3R1cmJpbmcuDQoNClRoZSBtb3JlIHlvdSB0aWdodGVuIHlvdXIgZ3JpcCwgVGFya2luLCB0aGUgbW9yZSBzdGFyIHN5c3RlbXMgd2lsbCBzbGlwIHRocm91Z2ggeW91ciBmaW5nZXJzLiBBcyB5b3Ugd2lzaC4NCg0KUmVtZW1iZXIsIGEgSmVkaSBjYW4gZmVlbCB0aGUgRm9yY2UgZmxvd2luZyB0aHJvdWdoIGhpbS4gVGhlIHBsYW5zIHlvdSByZWZlciB0byB3aWxsIHNvb24gYmUgYmFjayBpbiBvdXIgaGFuZHMuIFllLWhhISBUaGUgcGxhbnMgeW91IHJlZmVyIHRvIHdpbGwgc29vbiBiZSBiYWNrIGluIG91ciBoYW5kcy4NCg0KVGhlIG1vcmUgeW91IHRpZ2h0ZW4geW91ciBncmlwLCBUYXJraW4sIHRoZSBtb3JlIHN0YXIgc3lzdGVtcyB3aWxsIHNsaXAgdGhyb3VnaCB5b3VyIGZpbmdlcnMuIEluIG15IGV4cGVyaWVuY2UsIHRoZXJlIGlzIG5vIHN1Y2ggdGhpbmcgYXMgbHVjay4gUmVkIEZpdmUgc3RhbmRpbmcgYnkuDQoNCkkgbmVlZCB5b3VyIGhlbHAsIEx1a2UuIFNoZSBuZWVkcyB5b3VyIGhlbHAuIEknbSBnZXR0aW5nIHRvbyBvbGQgZm9yIHRoaXMgc29ydCBvZiB0aGluZy4gT2ggR29kLCBteSB1bmNsZS4NCg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJ0ZC1wYXJhZ3JhcGgtcGFkZGluZy0xIj4NCg0KQSB0cmVtb3IgaW4gdGhlIEZvcmNlLiBUaGUgbGFzdCB0aW1lIEkgZmVsdCBpdCB3YXMgaW4gdGhlIHByZXNlbmNlIG9mIG15IG9sZCBtYXN0ZXIuIEkgaGF2ZSB0cmFjZWQgdGhlIFJlYmVsIHNwaWVzIHRvIGhlci4gTm93IHNoZSBpcyBteSBvbmx5IGxpbmsgdG8gZmluZGluZyB0aGVpciBzZWNyZXQgYmFzZS4gUmVtZW1iZXIsIGEgSmVkaSBjYW4gZmVlbCB0aGUgRm9yY2UgZmxvd2luZyB0aHJvdWdoIGhpbS4NCg0KSSBuZWVkIHlvdXIgaGVscCwgTHVrZS4gU2hlIG5lZWRzIHlvdXIgaGVscC4gSSdtIGdldHRpbmcgdG9vIG9sZCBmb3IgdGhpcyBzb3J0IG9mIHRoaW5nLiBSZWQgRml2ZSBzdGFuZGluZyBieS4gRG9uJ3QgYmUgdG9vIHByb3VkIG9mIHRoaXMgdGVjaG5vbG9naWNhbCB0ZXJyb3IgeW91J3ZlIGNvbnN0cnVjdGVkLiBUaGUgYWJpbGl0eSB0byBkZXN0cm95IGEgcGxhbmV0IGlzIGluc2lnbmlmaWNhbnQgbmV4dCB0byB0aGUgcG93ZXIgb2YgdGhlIEZvcmNlLiBUaGUgcGxhbnMgeW91IHJlZmVyIHRvIHdpbGwgc29vbiBiZSBiYWNrIGluIG91ciBoYW5kcy4gVGhlIHBsYW5zIHlvdSByZWZlciB0byB3aWxsIHNvb24gYmUgYmFjayBpbiBvdXIgaGFuZHMuDQoNCjwvZGl2Pg0KPGEgaHJlZj0ieHh4X3BhdGhfdG9fZmlsZV94eHgvaW1hZ2VzL2RlbW8vcDMuanBnIiByZWw9ImF0dGFjaG1lbnQgd3AtYXR0LTQxMjgiPjxpbWcgY2xhc3M9IiB0ZC1tb2RhbC1pbWFnZSBhbGlnbmNlbnRlciB3cC1pbWFnZS00MTI4IiBzcmM9Inh4eF9wYXRoX3RvX2ZpbGVfeHh4L2ltYWdlcy9kZW1vL3AzLmpwZyIgYWx0PSIiIHdpZHRoPSI3MDAiIGhlaWdodD0iNDY3IiAvPjwvYT4NCjxkaXYgY2xhc3M9InRkLXBhcmFncmFwaC1wYWRkaW5nLTEiPg0KDQpBbGwgcmlnaHQuIFdlbGwsIHRha2UgY2FyZSBvZiB5b3Vyc2VsZiwgSGFuLiBJIGd1ZXNzIHRoYXQncyB3aGF0IHlvdSdyZSBiZXN0IGF0LCBhaW4ndCBpdD8gQSB0cmVtb3IgaW4gdGhlIEZvcmNlLiBUaGUgbGFzdCB0aW1lIEkgZmVsdCBpdCB3YXMgaW4gdGhlIHByZXNlbmNlIG9mIG15IG9sZCBtYXN0ZXIuIEkgaGF2ZSB0cmFjZWQgdGhlIFJlYmVsIHNwaWVzIHRvIGhlci4gTm93IHNoZSBpcyBteSBvbmx5IGxpbmsgdG8gZmluZGluZyB0aGVpciBzZWNyZXQgYmFzZS4gQSB0cmVtb3IgaW4gdGhlIEZvcmNlLiBUaGUgbGFzdCB0aW1lIEkgZmVsdCBpdCB3YXMgaW4gdGhlIHByZXNlbmNlIG9mIG15IG9sZCBtYXN0ZXIuDQoNClJlbWVtYmVyLCBhIEplZGkgY2FuIGZlZWwgdGhlIEZvcmNlIGZsb3dpbmcgdGhyb3VnaCBoaW0uIEkgY2FuJ3QgZ2V0IGludm9sdmVkISBJJ3ZlIGdvdCB3b3JrIHRvIGRvISBJdCdzIG5vdCB0aGF0IEkgbGlrZSB0aGUgRW1waXJlLCBJIGhhdGUgaXQsIGJ1dCB0aGVyZSdzIG5vdGhpbmcgSSBjYW4gZG8gYWJvdXQgaXQgcmlnaHQgbm93LiBJdCdzIHN1Y2ggYSBsb25nIHdheSBmcm9tIGhlcmUuIEkgY2FsbCBpdCBsdWNrLiBZb3UgYXJlIGEgcGFydCBvZiB0aGUgUmViZWwgQWxsaWFuY2UgYW5kIGEgdHJhaXRvciEgVGFrZSBoZXIgYXdheSENCg0KSG9rZXkgcmVsaWdpb25zIGFuZCBhbmNpZW50IHdlYXBvbnMgYXJlIG5vIG1hdGNoIGZvciBhIGdvb2QgYmxhc3RlciBhdCB5b3VyIHNpZGUsIGtpZC4gSSBmaW5kIHlvdXIgbGFjayBvZiBmYWl0aCBkaXN0dXJiaW5nLiBUaGUgbW9yZSB5b3UgdGlnaHRlbiB5b3VyIGdyaXAsIFRhcmtpbiwgdGhlIG1vcmUgc3RhciBzeXN0ZW1zIHdpbGwgc2xpcCB0aHJvdWdoIHlvdXIgZmluZ2Vycy4gQXMgeW91IHdpc2guDQoNClRoZSBtb3JlIHlvdSB0aWdodGVuIHlvdXIgZ3JpcCwgVGFya2luLCB0aGUgbW9yZSBzdGFyIHN5c3RlbXMgd2lsbCBzbGlwIHRocm91Z2ggeW91ciBmaW5nZXJzLiBJbiBteSBleHBlcmllbmNlLCB0aGVyZSBpcyBubyBzdWNoIHRoaW5nIGFzIGx1Y2suIFJlZCBGaXZlIHN0YW5kaW5nIGJ5Lg0KDQo8L2Rpdj4NCg0KW2NhcHRpb24gaWQ9ImF0dGFjaG1lbnRfNDEyMiIgYWxpZ249ImFsaWduY2VudGVyIiB3aWR0aD0iNzY1Il08YSBocmVmPSJ4eHhfcGF0aF90b19maWxlX3h4eC9pbWFnZXMvZGVtby9wNC5qcGciIHJlbD0iYXR0YWNobWVudCB3cC1hdHQtNDEyMiI+PGltZyBjbGFzcz0iIHRkLW1vZGFsLWltYWdlIHdwLWltYWdlLTQxMjIgc2l6ZS1mdWxsIiBzcmM9Inh4eF9wYXRoX3RvX2ZpbGVfeHh4L2ltYWdlcy9kZW1vL3A0LmpwZyIgYWx0PSIiIHdpZHRoPSI3NjUiIGhlaWdodD0iNDg4IiAvPjwvYT4gTmV3IGlQaG9uZSA2IGFycml2ZWQgdG9kYXlbL2NhcHRpb25dDQoNCllvdSBhcmUgYSBwYXJ0IG9mIHRoZSBSZWJlbCBBbGxpYW5jZSBhbmQgYSB0cmFpdG9yISBUYWtlIGhlciBhd2F5ISBSZWQgRml2ZSBzdGFuZGluZyBieS4gQWxsIHJpZ2h0LiBXZWxsLCB0YWtlIGNhcmUgb2YgeW91cnNlbGYsIEhhbi4gSSBndWVzcyB0aGF0J3Mgd2hhdCB5b3UncmUgYmVzdCBhdCwgYWluJ3QgaXQ/IEFsZGVyYWFuPyBJJ20gbm90IGdvaW5nIHRvIEFsZGVyYWFuLiBJJ3ZlIGdvdCB0byBnbyBob21lLiBJdCdzIGxhdGUsIEknbSBpbiBmb3IgaXQgYXMgaXQgaXMuDQo8YmxvY2txdW90ZSBjbGFzcz0idGQtcXVvdGUtY2xhc3NpYyI+RGVzaWduIGlzIG5vdCBqdXN0IHdoYXQgaXQgbG9va3MgbGlrZSBhbmQgZmVlbHMgbGlrZS4gRGVzaWduIGlzIGhvdyBpdCB3b3Jrcy48L2Jsb2NrcXVvdGU+DQo8ZGl2IGNsYXNzPSJ0ZC1wYXJhZ3JhcGgtcGFkZGluZy00Ij4NCg0KW2NhcHRpb24gaWQ9ImF0dGFjaG1lbnRfNDEzMSIgYWxpZ249ImFsaWducmlnaHQiIHdpZHRoPSIyMDciXTxhIGhyZWY9Inh4eF9wYXRoX3RvX2ZpbGVfeHh4L2ltYWdlcy9kZW1vL3A1LmpwZyIgcmVsPSJhdHRhY2htZW50IHdwLWF0dC00MTMxIj48aW1nIGNsYXNzPSIgdGQtbW9kYWwtaW1hZ2Ugd3AtaW1hZ2UtNDEzMSBzaXplLW1lZGl1bSIgc3JjPSJ4eHhfcGF0aF90b19maWxlX3h4eC9pbWFnZXMvZGVtby9wNS5qcGciIGFsdD0iIiB3aWR0aD0iMjA3IiBoZWlnaHQ9IjMwMCIgLz48L2E+IEp1c3QgZ29pbmcgZG93biB0aGUgc3RyZWV0Wy9jYXB0aW9uXQ0KDQpZb3UgYXJlIGEgcGFydCBvZiB0aGUgUmViZWwgQWxsaWFuY2UgYW5kIGEgdHJhaXRvciEgVGFrZSBoZXIgYXdheSEgU3RpbGwsIHNoZSdzIGdvdCBhIGxvdCBvZiBzcGlyaXQuIEkgZG9uJ3Qga25vdywgd2hhdCBkbyB5b3UgdGhpbms/IEEgdHJlbW9yIGluIHRoZSBGb3JjZS4gVGhlIGxhc3QgdGltZSBJIGZlbHQgaXQgd2FzIGluIHRoZSBwcmVzZW5jZSBvZiBteSBvbGQgbWFzdGVyLkVzY2FwZSBpcyBub3QgaGlzIHBsYW4uIEkgbXVzdCBmYWNlIGhpbSwgYWxvbmUuIE9oIEdvZCwgbXkgdW5jbGUuIEhvdyBhbSBJIGV2ZXIgZ29ubmEgZXhwbGFpbiB0aGlzPyBJIGZpbmQgeW91ciBsYWNrIG9mIGZhaXRoIGRpc3R1cmJpbmcuDQoNClN0aWxsLCBzaGUncyBnb3QgYSBsb3Qgb2Ygc3Bpcml0LiBJIGRvbid0IGtub3csIHdoYXQgZG8geW91IHRoaW5rPyBJbiBteSBleHBlcmllbmNlLCB0aGVyZSBpcyBubyBzdWNoIHRoaW5nIGFzIGx1Y2suDQoNCk9oIEdvZCwgbXkgdW5jbGUuIEhvdyBhbSBJIGV2ZXIgZ29ubmEgZXhwbGFpbiB0aGlzPyBIZXksIEx1a2UhIE1heSB0aGUgRm9yY2UgYmUgd2l0aCB5b3UuIEkgZmluZCB5b3VyIGxhY2sgb2YgZmFpdGggZGlzdHVyYmluZy4NCg0KPC9kaXY+';

                        //post content - With images path
                        $post_content_WITH_images_path = str_replace('xxx_path_to_file_xxx', get_template_directory_uri(), base64_decode($post_content_NO_images_path));



                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();


                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();

                        $td_demo_site->create_page('post');
                        $td_demo_site->add_featured_image();


                        //add posts with template
                        $td_demo_site->create_page('post', '', $post_content_WITH_images_path);
                        $td_demo_site->add_featured_image();
                        $td_demo_site->update_post_meta('td_post_theme_settings', 'td_post_template' , 'single_template_1');

                        $td_demo_site->create_page('post', '', $post_content_WITH_images_path);
                        $td_demo_site->add_featured_image();
                        $td_demo_site->update_post_meta('td_post_theme_settings', 'td_post_template' , 'single_template_2');

                        $td_demo_site->create_page('post', '', $post_content_WITH_images_path);
                        $td_demo_site->add_featured_image();
                        $td_demo_site->update_post_meta('td_post_theme_settings', 'td_post_template' , 'single_template_3');

                        $td_demo_site->create_page('post', '', $post_content_WITH_images_path);
                        $td_demo_site->add_featured_image();
                        $td_demo_site->update_post_meta('td_post_theme_settings', 'td_post_template' , 'single_template_4');



                        /**
                         *
                         * creating a post with gallery slide
                         */
                        //get some picture id's from `wp_postmeta` table to use with the gallery slide
                        global $wpdb;
                        $sql_to_get_attachamnet_ids = "SELECT DISTINCT post_id FROM $wpdb->postmeta WHERE meta_key='_wp_attached_file' ORDER BY meta_id DESC LIMIT 10";
                        $result = $wpdb->get_results($sql_to_get_attachamnet_ids);

                        //itinerate thru the resultset and, if any, creating an string of id's for the gallery slide
                        $string_of_atth_ids = '';
                        if(!empty($result)) {
                            foreach( $result as $results ) {
                                if(!empty($string_of_atth_ids)) {
                                    $string_of_atth_ids .= ',';
                                }
                                $string_of_atth_ids .= $results->post_id;
                            }

                            $td_demo_site->create_page('post', 'Gallery Slide', str_replace('xxx_gallery_slide_ids_xxx', $string_of_atth_ids, '[gallery td_select_gallery_slide="slide" td_gallery_title_input="My Gallery" ids="xxx_gallery_slide_ids_xxx"]'));
                            $td_demo_site->add_featured_image();
                        }

                        ?>

                    </div>


                    <div class="td-clear"></div>






                    <!-- end box row -->

                </div>



                <?php echo td_panel_generator::box_end();?>
            </div>



        </div>



    </div>
</div>

<div class="td-clear"></div>

<div class="td-panel-main-footer">

</div>

</div>

<div class="td-clear"></div>
</form>
</div>
