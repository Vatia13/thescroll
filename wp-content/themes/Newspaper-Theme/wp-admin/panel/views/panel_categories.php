<?php


/**
 * custom walker
 * Class td_category_walker_panel
 */
class td_category_walker_panel extends Walker {
    var $tree_type = 'category';
    var $db_fields = array ('parent' => 'parent', 'id' => 'term_id');


    var $td_category_hierarchy = array();  // we store them like so [0] Category 1 - [1] Category 2 - [2] Category 3


    var $td_category_buffer = array();

    function start_lvl( &$output, $depth = 0, $args = array() ) {

    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {

    }


    function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {

        if (!isset($td_last_category_objects[$depth])) {
            $this->td_category_hierarchy[$depth] = $category;
        }


        if ($depth == 0) {
            //reset the parrents
            $this->td_category_hierarchy = array();
            //put the
            $this->td_category_hierarchy[0] = $category;

            //add first parent
            $this->td_category_buffer['<a href="' . get_category_link($category->term_id) . '" target="_blank" data-is-category-link="yes">' . $category->name . '</a>'] = $category->term_id;
        } else {

            $td_tmp_buffer = '';
            $last_cat_id = 0;
            foreach ($this->td_category_hierarchy as $parent_cat_obj) {
                if ($td_tmp_buffer === '') {
                    $td_tmp_buffer = '<a href="' . get_category_link($parent_cat_obj->term_id) . '" target="_blank" data-is-category-link="yes">' . $parent_cat_obj->name . '</a>';
                    $last_cat_id = $parent_cat_obj->term_id;
                } else {
                    $td_tmp_buffer .=  '<img src="' . get_template_directory_uri() . '/wp-admin/images/panel/panel-breadcrumb.png" class="td-panel-breadcrumb">' . '<a href="' . get_category_link($parent_cat_obj->term_id) . '" target="_blank" data-is-category-link="yes">' . $parent_cat_obj->name . '</a>';
                    $last_cat_id = $parent_cat_obj->term_id;
                }

            }

            //add child
            $this->td_category_buffer[$td_tmp_buffer] = $last_cat_id;

        }


    }


    function end_el( &$output, $page, $depth = 0, $args = array() ) {

    }

}






class td_display_categories_sttings {

    /**
     * render the categories forms
     */
    static function render_categories_form() {
        //get all categories from database


        $categories = get_categories(array(
            'hide_empty' => 0
        ));



        $td_category_walker_panel = new td_category_walker_panel;
        $td_category_walker_panel->walk($categories, 4);

        //print_r($rawalker->td_category_buffer);
//die;

        //get_categories(array('hide_empty' => 0));//wordpress way
        $categories = td_util::get_category2id_array(false);//our function


        foreach ($td_category_walker_panel->td_category_buffer as $display_category_name => $category_id) {


            ?>
            <!-- LAYOUT SETTINGS -->
            <?php echo td_panel_generator::box_start($display_category_name , false);?>

                <!-- DISPLAY VIEW -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
                        <p>Select a module type, this is how your article list will be displayed</p>
                    </div>
                    <div class="td-box-control-full td-panel-module">
                        <?php
                        echo td_panel_generator::visual_select_o(array(
                            'ds' => 'td_category',
                            'item_id' => $category_id,
                            'option_id' => 'tdc_layout',
                            'values' => array(
                                array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-default.png'),
                                array('text' => '', 'title' => '', 'val' => '1', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
                                array('text' => '', 'title' => '', 'val' => '2', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-2.png'),
                                array('text' => '', 'title' => '', 'val' => '3', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-3.png'),
                                array('text' => '', 'title' => '', 'val' => '4', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-4.png'),
                                array('text' => '', 'title' => '', 'val' => '5', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-5.png'),
                                array('text' => '', 'title' => '', 'val' => '6', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-6.png'),
                                array('text' => '', 'title' => '', 'val' => '7', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-7.png'),
                                array('text' => '', 'title' => '', 'val' => '8', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-8.png'),
                                array('text' => '', 'title' => '', 'val' => '9', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-9.png'),
                                array('text' => '', 'title' => '', 'val' => 'search', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-10.png')
                            )
                        ));
                        ?>
                    </div>
                </div>

                <!-- Custom Sidebar + position -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">CUSTOM SIDEBAR + POSITION</span>
                        <p>Sidebar position and custom sidebars</p>
                    </div>
                    <div class="td-box-control-full td-panel-sidebar-pos">
                        <div class="td-display-inline-block">
                            <?php
                            echo td_panel_generator::visual_select_o(array(
                                'ds' => 'td_category',
                                'item_id' => $category_id,
                                'option_id' => 'tdc_sidebar_pos',
                                'values' => array(
                                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-default.png'),
                                    array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                                    array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                                    array('text' => '', 'title' => '', 'val' => 'sidebar_right', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                                )
                            ));
                            ?>
                            <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
                        </div>
                        <div class="td-display-inline-block td_sidebars_pulldown_align">
                            <?php
                            echo td_panel_generator::sidebar_pulldown(array(
                                'ds' => 'td_category',
                                'item_id' => $category_id,
                                'option_id' => 'tdc_sidebar_name'
                            ));
                            ?>
                            <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
                        </div>
                    </div>
                </div>

                <!-- Show Featured slider -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">SHOW FEATURED SLIDER</span>
                        <p>Enable or disable the featured slider (only posts that are in the Featured category are showed in slider)</p>
                    </div>
                    <div class="td-box-control-full">
                        <?php
                        echo td_panel_generator::checkbox(array(
                            'ds' => 'td_category',
                            'item_id' => $category_id,
                            'option_id' => 'tdc_slider',
                            'true_value' => '',
                            'false_value' => 'yes'
                        ));
                        ?>
                    </div>
                </div>

                <!-- Category color -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">CATEGORY TAG COLOR ON POST PAGE</span>
                        <p>Pick a color for this category tag on post page</p>
                    </div>
                    <div class="td-box-control-full">
                        <?php
                        echo td_panel_generator::color_piker(array(
                            'ds' => 'td_category',
                            'item_id' => $category_id,
                            'option_id' => 'tdc_color',
                            'default_color' => ''
                        ));
                        ?>
                    </div>
                </div>

                <!-- BACKGROUND UPLOAD -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">BACKGROUND UPLOAD</span>
                        <p>Upload your logo (300 x 100px) .png</p>
                    </div>
                    <div class="td-box-control-full">
                        <?php
                        echo td_panel_generator::upload_image(array(
                            'ds' => 'td_category',
                            'item_id' => $category_id,
                            'option_id' => 'tdc_image'
                        ));
                        ?>
                    </div>
                </div>

                <!-- BACKGROUND STYLE -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">BACKGROUND STYLE</span>
                        <p>How the background will be dispalyed</p>
                    </div>
                    <div class="td-box-control-full">
                        <?php
                        echo td_panel_generator::radio_button_control(array(
                            'ds' => 'td_category',
                            'item_id' => $category_id,
                            'option_id' => 'tdc_bg_repeat',
                            'values' => array(
                                array('text' => 'Default', 'val' => ''),
                                array('text' => 'Stretch', 'val' => 'stretch'),
                                array('text' => 'Tiled', 'val' => 'tile')
                            )
                        ));
                        ?>
                    </div>
                </div>

                <!-- Background color -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">BACKGROUND COLOR</span>
                        <p>Use a solid color instead of an image</p>
                    </div>
                    <div class="td-box-control-full">
                        <?php
                        echo td_panel_generator::color_piker(array(
                            'ds' => 'td_category',
                            'item_id' => $category_id,
                            'option_id' => 'tdc_bg_color',
                            'default_color' => ''
                        ));
                        ?>
                    </div>
                </div>

                <!-- Hide category tag on post -->
                <div class="td-box-row">
                    <div class="td-box-description">
                        <span class="td-box-title">HIDE CATEGORY TAG ON POST</span>
                        <p>Show or hide category tags on post page</p>
                    </div>
                    <div class="td-box-control-full">
                        <?php
                        echo td_panel_generator::checkbox(array(
                            'ds' => 'td_category',
                            'item_id' => $category_id,
                            'option_id' => 'tdc_hide_on_post',
                            'true_value' => 'hide',
                            'false_value' => ''
                        ));
                        ?>
                    </div>
                </div>

            <?php echo td_panel_generator::box_end();
        }//end foreach

    }//end function

}//end class

//start building the categories form
td_display_categories_sttings::render_categories_form();