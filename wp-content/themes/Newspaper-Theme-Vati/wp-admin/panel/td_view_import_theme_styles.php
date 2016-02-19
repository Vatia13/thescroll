<?php
$td_import_fonts_show_update_msg = false;

if(!empty($_REQUEST['td_option'])) {

    switch ($_REQUEST['td_option']) {

        case 'go_to_default':
            $new_blank_options = array(
                'sidebars' => '',
                'td_ad_spots' => '',
                'firstInstall' => 'yes'
            );
            update_option(TD_THEME_OPTIONS_NAME, $new_blank_options);
            $td_import_fonts_show_update_msg = true;
            break;


        case 'import_style_1':
            $td_import_fonts_show_update_msg = td_import_demo_style_fonts('demo_style_1');
            break;

        case 'import_style_2':
            $td_import_fonts_show_update_msg = td_import_demo_style_fonts('demo_style_2');
            break;

        case 'import_style_3':
            $td_import_fonts_show_update_msg = td_import_demo_style_fonts('demo_style_3');
            break;

        case 'import_style_4':
            $td_import_fonts_show_update_msg = td_import_demo_style_fonts('demo_style_4');
            break;

        case 'import_style_5':
            $td_import_fonts_show_update_msg = td_import_demo_style_fonts('demo_style_5');
            break;
    }

}

//import demo style fonts only
function td_import_demo_style_fonts($file_style) {
    $explode_nr_file = explode('_', $file_style);

    //read the settings file
    $file_settings = unserialize(base64_decode(file_get_contents(get_template_directory() . '/includes/wp_booster/demo/files_cookies_settings/' . $file_style . '.txt', true)));



    //'tds_top_menu_text_color',
    //'tds_menu_text_color',
    $array_import_settings_from_file = array(
        'tds_header_style',
        'tds_header_align_top',

        'tds_top_menu',
        'tds_top_menu_color',
        'tds_data_top_menu',

        'tds_menu_icon_color',
        'tds_theme_color',
        'tds_site_background_color',

        'tds_header_wrap_color',
        'tds_logo_text_color',

        'tds_menu_color',

        'tds_link_color',
        'tds_link_hover_color',

        'tds_footer_color',
        'tds_footer_text_color',
        'tds_footer_bottom_color',
        'tds_footer_bottom_text_color',

        'tds_site_background_image',
        'tds_site_background_repeat',
        'tds_site_background_position_x',
        'tds_site_background_attachment',

        'tds_stretch_background',

        'tds_transparent_header',
        'tds_main_menu_transform',
        'tds_big_slide_transform',

        'td_body_classes'

    );

    foreach ($array_import_settings_from_file as $import_setting_from_file) {
        if (isset($file_settings[$import_setting_from_file])) {
            td_global::$td_options[$import_setting_from_file] = $file_settings[$import_setting_from_file];
        } else {
            if($import_setting_from_file == 'td_body_classes') {
                td_global::$td_options['td_body_classes'] = '';
            }
        }
    }


    //import typography settings
    if(!empty($file_settings['td_fonts'])) {
        td_global::$td_options['td_fonts'] = $file_settings['td_fonts'];
    }

    //import css font files (google) buffer
    if(!empty($file_settings['td_fonts_css_files'])) {
        td_global::$td_options['td_fonts_css_files'] = $file_settings['td_fonts_css_files'];
    }

    //print_r($file_settings);


    //write the changes to the database
    update_option(TD_THEME_OPTIONS_NAME, td_global::$td_options);

    return true;
}

?>
    <input type="hidden" name="action" value="td_ajax_update_panel">
    <div class="td_displaying_saving"></div>
    <div class="td_wrapper_saving_gifs">
        <img class="td_displaying_saving_gif" src="<?php echo get_template_directory_uri();?>/wp-admin/images/panel/loading.gif">
        <img class="td_displaying_ok_gif" src="">
    </div>


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
                                    PREDEFINED STYLES
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

                        <!-- Export theme settings -->
                        <div id="td-panel-welcome" class="td-panel-active td-panel">

                            <?php echo td_panel_generator::box_start('Import predefined styles'); ?>



                            <div class="td-box-row">
                                <div class="td-box-control-full">
                                    <a href="?page=td_theme_panel&td_page=td_view_import_theme_styles&td_option=import_style_1" class="td-big-button" style="width: 150px; text-align: center">Sport style</a>
                                </div>
                                <div class="td-box-row-margin-bottom"></div>
                            </div>



                            <div class="td-box-row">
                                <div class="td-box-control-full">
                                    <a href="?page=td_theme_panel&td_page=td_view_import_theme_styles&td_option=import_style_2" class="td-big-button" style="width: 150px; text-align: center">Cafe style</a>
                                </div>
                                <div class="td-box-row-margin-bottom"></div>
                            </div>


                            <div class="td-box-row">
                                <div class="td-box-control-full">
                                    <a href="?page=td_theme_panel&td_page=td_view_import_theme_styles&td_option=import_style_3" class="td-big-button" style="width: 150px; text-align: center">Fashion style</a>
                                </div>
                                <div class="td-box-row-margin-bottom"></div>
                            </div>


                            <div class="td-box-row">
                                <div class="td-box-control-full">
                                    <a href="?page=td_theme_panel&td_page=td_view_import_theme_styles&td_option=import_style_4" class="td-big-button" style="width: 150px; text-align: center">Tech style</a>
                                </div>
                                <div class="td-box-row-margin-bottom"></div>
                            </div>

                            <div class="td-box-row">
                                <div class="td-box-control-full">
                                    <a href="?page=td_theme_panel&td_page=td_view_import_theme_styles&td_option=import_style_5" class="td-big-button" style="width: 150px; text-align: center">Classic blog style</a>
                                </div>
                                <div class="td-box-row-margin-bottom"></div>
                            </div>



                            <div class="td-box-row">
                                <div class="td-box-description td-box-full">
                                    <span class="td-box-title"></span>
                                    <p>Use this option to reset the theme to default</p>
                                </div>
                                <div class="td-box-control-full">
                                    <a href="?page=td_theme_panel&td_page=td_view_import_theme_styles&td_option=go_to_default" class="td-big-button">Factory restore !!! ( RESET ALL SETTINGS )</a>
                                </div>
                                <div class="td-box-row-margin-bottom"></div>
                            </div>



                            <?php echo td_panel_generator::box_end();?>
                        </div>


                    </div>
                </div>
            </div>

            <div class="td-clear"></div>

        </div>

        <div class="td-clear"></div>

    </div>
<?php if($td_import_fonts_show_update_msg == 1){?><script type="text/javascript">alert('Import is done!');</script><?php }?>