<?php
$td_fonts_imported = 0;

if(!empty($_REQUEST['td_option']) and $_REQUEST['td_option'] == 'import_font_options') {

    $import_fonts_array = array();
    $section_font = $get_font_family = $get_font_size = $get_line_height = $get_top_menu_text_color = $get_menu_text_color = $tds_main_menu_transform = '';

    //loop thu all the sections and create the import array
    foreach(td_fonts::$typography_sections as $font_section_settings_id => $font_section_name) {
        $section_font = 'tds_' . $font_section_settings_id;

        $import_fonts_array[$font_section_settings_id] = array();

        //font_family
        $get_font_family = td_util::get_option($section_font . '_font_family');
        if(!empty($get_font_family)){
            $import_fonts_array[$font_section_settings_id]['font_family'] = 'g_' . $get_font_family;
        }

        //font_size
        $get_font_size = td_util::get_option($section_font . '_font_size');
        if(!empty($get_font_size)){
            $get_font_size = str_replace('px', '', $get_font_size);
            $import_fonts_array[$font_section_settings_id]['font_size'] = $get_font_size . 'px';
        }

        //line_height
        $get_line_height = td_util::get_option($section_font . '_line_height');
        if(!empty($get_line_height)){
            $get_line_height = str_replace('px', '', $get_line_height);
            $import_fonts_array[$font_section_settings_id]['line_height'] = $get_line_height . 'px';
        }

        //only for top menu color
        if($font_section_settings_id == 'top_menu') {
            $get_top_menu_text_color = td_util::get_option('tds_top_menu_text_color');
            if(!empty($get_top_menu_text_color)){
                $import_fonts_array['top_menu']['color'] = $get_top_menu_text_color;
            }
        }

        //only for header menu
        if($font_section_settings_id == 'menu') {
            $get_menu_text_color = td_util::get_option('tds_menu_text_color');
            if(!empty($get_menu_text_color)){
                $import_fonts_array['menu']['color'] = $get_menu_text_color;
            }

            $tds_main_menu_transform = td_util::get_option('tds_main_menu_transform');
            if(empty($tds_main_menu_transform)) {
                $import_fonts_array['menu']['text_transform'] = 'uppercase';
            }

        }


        //big_slide_main, big_slide_sec and normal_slide
        if($font_section_settings_id == 'big_slide_main') {
            $tds_slider_text_transform = $file_settings['tds_big_slide_transform'];

            if(empty($tds_slider_text_transform)) {
                $tf_fonts['big_slide_main']['text_transform'] = 'uppercase';
                $tf_fonts['big_slide_sec']['text_transform'] = 'uppercase';
                $tf_fonts['normal_slide']['text_transform'] = 'uppercase';
            }

            /*/color
            $tf_fonts['big_slide_main']['color'] = '#ffffff';
            $tf_fonts['big_slide_sec']['color'] = '#ffffff';
            $tf_fonts['normal_slide']['color'] = '#ffffff';*/
        }


        /*/widget_title
        if($font_section_settings_id == 'widget_title') {
            $tf_fonts['widget_title']['color'] = '#ffffff';
        }*/


        //remove section font if empty
        if(empty($import_fonts_array[$font_section_settings_id])) {
            unset($import_fonts_array[$font_section_settings_id]);
        }
    }


    td_global::$td_options['td_fonts'] = $import_fonts_array;

    //print_r(td_global::$td_options['td_fonts']);

    if(update_option(TD_THEME_OPTIONS_NAME, td_global::$td_options)) {
        $td_fonts_imported = 1;
    }


}?>

<div class="wrap">
<form id="td_panel_import_font_settings" name="td_panel_import_font_settings" action="?page=td_theme_panel&td_page=td_import_font_settings&td_option=import_font_options" method="post">
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
                                FONTS SETTINGS
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

                    <!-- import font settings-->
                    <div id="td-panel-welcome" class="td-panel-active td-panel">
                        <?php echo td_panel_generator::box_start('Import fonts settings'); ?>

                        <!-- google fonts settings-->
                        <div class="td-box-row">
                            <div class="td-box-description">
                                <input type="submit" class="td-big-button td-button-remove-border" value="Import fonts settings">
                            </div>
                            <div class="td-box-control-full">

                            </div>
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
<?php if($td_fonts_imported == 1){?><script type="text/javascript">alert('Import Successfully!\n\nPlease go BACK and click the SAVE SETTINGS buttons so that the new changes takes effect!');</script><?php }?>