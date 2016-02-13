<form id="td_panel_big_form" action="?page=td_theme_panel" method="post">
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
                        IMPORT CATEGORIES
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

            <!-- homepage -->
            <div id="td-panel-welcome" class="td-panel-active td-panel">
                <!-- One click demo install -->
                <?php echo td_panel_generator::box_start('Importing old category data'); ?>

                <!-- Install demo data -->
                <div class="td-box-row">
                    <div class="td-box-description td-box-full">
                        <span class="td-box-title">Please wait until all the data is imported</span>
                        <p>....</p>


                        <?php
                        td_global::$td_options = get_option(TD_THEME_OPTIONS_NAME);

                            $td_categories = get_categories( array(
                                'hide_empty' => '0'
                            ) );



                            foreach ($td_categories as $td_category) {
                                echo '<p><strong>Importing: ' . $td_category->name . '</strong><br>';

                                $td_cat_options = get_option('tax_meta_'. $td_category->cat_ID);
                                if (!empty($td_cat_options['tdc_layout'])) {
                                    echo 'layout: ' . $td_cat_options['tdc_layout'] . '<br>';
                                    td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_layout', $td_cat_options['tdc_layout']);
                                }



                                if (!empty($td_cat_options['tdc_sidebar_pos'])) {
                                    echo 'sidebar position: ' . $td_cat_options['tdc_sidebar_pos'] . '<br>';
                                    td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_sidebar_pos', $td_cat_options['tdc_sidebar_pos']);
                                }

                                if (!empty($td_cat_options['tdc_sidebar_name'])) {
                                    echo 'sidebar name: ' . $td_cat_options['tdc_sidebar_name'] . '<br>';
                                    td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_sidebar_name', $td_cat_options['tdc_sidebar_name']);
                                }


                                if (!empty($td_cat_options['tdc_slider'])) {
                                    echo 'slider: ' . $td_cat_options['tdc_slider'] . '<br>';
                                    td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_slider', $td_cat_options['tdc_slider']);
                                }


                                if (!empty($td_cat_options['tdc_color'])) {
                                    if ($td_cat_options['tdc_color'] != '#') {
                                        echo 'category color: ' . $td_cat_options['tdc_color'] . '<br>';
                                        td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_color', $td_cat_options['tdc_color']);
                                    }
                                }


                                if (!empty($td_cat_options['tdc_image'])) {
                                    if (!empty($td_cat_options['tdc_image']['src'])) {
                                        echo 'category background: ' . $td_cat_options['tdc_image']['src'] . '<br>';
                                        td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_image', $td_cat_options['tdc_image']['src']);
                                    }

                                }



                                if (!empty($td_cat_options['tdc_bg_repeat'])) {
                                    echo 'background repeat: ' . $td_cat_options['tdc_bg_repeat'] . '<br>';
                                    td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_bg_repeat', $td_cat_options['tdc_bg_repeat']);
                                }


                                if (!empty($td_cat_options['tdc_bg_color'])) {
                                    if ($td_cat_options['tdc_bg_color'] != '#') {
                                        echo 'background color: ' . $td_cat_options['tdc_bg_color'] . '<br>';
                                        td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_bg_color', $td_cat_options['tdc_bg_color']);
                                    }
                                }

                                if (!empty($td_cat_options['tdc_hide_on_post'])) {
                                    echo 'hide on post: ' . $td_cat_options['tdc_hide_on_post'] . '<br>';
                                    td_panel_data_source::update_category_option($td_category->cat_ID, 'tdc_hide_on_post', $td_cat_options['tdc_hide_on_post']);
                                }


                                echo '</p>';
                                //print_r(get_option( 'tax_meta_'. $td_category->cat_ID));
                                //die;

                                update_option(TD_THEME_OPTIONS_NAME, td_global::$td_options );
                            }
                        ?>

                        <script type="text/javascript">
                            alert('Import is done!');
                        </script>

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
</form>
</div>
