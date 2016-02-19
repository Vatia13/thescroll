<!-- 404 template -->
    <?php echo td_panel_generator::box_start('404 template', false); ?>

    <!-- Custom Sidebar + position -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_404_page_layout',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
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
<?php echo td_panel_generator::box_end();?>




<!-- Archive page -->
    <?php echo td_panel_generator::box_start('Archive display view', false); ?>

    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_archive_page_layout',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
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
                    'ds' => 'td_option',
                    'option_id' => 'tds_archive_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_archive_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Attachment template -->
    <?php echo td_panel_generator::box_start('Attachment template', false); ?>

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
                    'ds' => 'td_option',
                    'option_id' => 'tds_attachment_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_attachment_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- AUTHOR page -->
    <?php echo td_panel_generator::box_start('Author display view', false); ?>

    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_author_page_layout',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
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
                    'ds' => 'td_option',
                    'option_id' => 'tds_author_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_author_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- BBPRESS template -->
    <?php echo td_panel_generator::box_start('bbPress template', false); ?>

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
                    'ds' => 'td_option',
                    'option_id' => 'tds_bbpress_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_bbpress_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Blog and posts template -->
    <?php echo td_panel_generator::box_start('Blog and posts template', false); ?>

    <!-- ARTICLE DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_home_page_layout',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
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
                    'ds' => 'td_option',
                    'option_id' => 'tds_home_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_home_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- CATEGORY page -->
    <?php echo td_panel_generator::box_start('Category display view', false); ?>

    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_category_page_layout',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
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
                    'ds' => 'td_option',
                    'option_id' => 'tds_category_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_category_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Page template -->
<?php echo td_panel_generator::box_start('Page template', false); ?>

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
                    'ds' => 'td_option',
                    'option_id' => 'tds_page_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_page_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- Search page -->
    <?php echo td_panel_generator::box_start('Search display view', false); ?>

    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_search_page_layout',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
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
                    'ds' => 'td_option',
                    'option_id' => 'tds_search_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_search_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<!-- TAG page -->
<?php echo td_panel_generator::box_start('Tag display view', false); ?>

    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_tag_page_layout',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-1.png'),
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
                    'ds' => 'td_option',
                    'option_id' => 'tds_tag_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_tag_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>




<!-- Woocommerce template -->
<?php echo td_panel_generator::box_start('Woocommerce template', false); ?>

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
                    'ds' => 'td_option',
                    'option_id' => 'tds_woo_sidebar_pos',
                    'values' => array(
                        array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                        array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                        array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                    )
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
            </div>
            <div class="td-display-inline-block td_sidebars_pulldown_align">
                <?php
                echo td_panel_generator::sidebar_pulldown(array(
                    'ds' => 'td_option',
                    'option_id' => 'tds_woo_sidebar'
                ));
                ?>
                <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
            </div>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- timeline template -->
<?php echo td_panel_generator::box_start('Timeline template', false); ?>

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
                'ds' => 'td_option',
                'option_id' => 'tds_timeline_sidebar_pos',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                    array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                )
            ));
            ?>
            <div class="td-panel-control-comment td-text-align-right">Select sidebar position</div>
        </div>
        <div class="td-display-inline-block td_sidebars_pulldown_align">
            <?php
            echo td_panel_generator::sidebar_pulldown(array(
                'ds' => 'td_option',
                'option_id' => 'tds_timeline_sidebar'
            ));
            ?>
            <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
        </div>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>