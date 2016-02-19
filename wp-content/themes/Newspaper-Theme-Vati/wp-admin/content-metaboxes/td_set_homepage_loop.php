<div class="my_meta_control td-page-module-loop-wrap td-set-homepage-loop">

    <p class="td_help_section td-inline-block-wrap td-post-settings-post-template">
        <span class="td_custom_label">Sidebar position:</span>

        <div class="td-inline-block-wrap">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_homepage_loop',
                'item_id' => '',
                'option_id' => 'td_sidebar_position',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-default.png'),
                    array('text' => '', 'title' => '', 'val' => 'sidebar_left', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-left.png'),
                    array('text' => '', 'title' => '', 'val' => 'no_sidebar', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-full.png'),
                    array('text' => '', 'title' => '', 'val' => 'sidebar_right', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/sidebar-right.png')
                ),
                'selected_value' => $mb->get_the_value('td_sidebar_position')
            ));
            ?>
        </div>
    </p>



    <p class="td_help_section td-custom-sidebar-label">
        <span class="td_custom_label">Custom sidebar:</span>

    <div class="td-display-inline-block td_sidebars_pulldown_align">
        <?php
        echo td_panel_generator::sidebar_pulldown(array(
            'ds' => 'td_homepage_loop',
            'item_id' => '',
            'option_id' => 'td_sidebar',
            'selected_value' => $mb->get_the_value('td_sidebar')
        ));
        ?>
        <div class="td-panel-control-comment td-text-align-right">Create or select an existing sidebar</div>
    </div>

    </p>



    <p class="td_help_section td-inline-block-wrap td-post-settings-post-template">
        <span class="td_custom_label">Post template:</span>
        <div class="td-inline-block-wrap">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_homepage_loop',
                'item_id' => '',
                'option_id' => 'td_layout',
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
                ),
                'selected_value' => $mb->get_the_value('td_layout')
            ));
            ?>
        </div>
    </p>



    <p class="td_help_section td-help-select">

        <span class="td_custom_label">Show list title:</span>

        <?php $mb->the_field('list_custom_title_show'); ?>

        <div class="td-select-style-overwrite td-inline-block-wrap">
            <select name="<?php $mb->the_name();?>" class="td-panel-dropdown">
                <option value="">Show title</option>
                <option value="hide_title"<?php $mb->the_select_state('hide_title'); ?>>Hide title</option>
            </select>
        </div>
    </p>


    <p class="td_help_section">
        <?php $mb->the_field('list_custom_title'); ?>
        <span class="td_custom_label">Article list title: </span><input class="td-input-text-backend-small td-left-margin-3px" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <span class="td_info_inline"> - Custom title for the article list section</span>
    </p>


    <?php /*
    <div>
        <p><strong>Template structure:</strong></p>
        <img class="td-doc-image-wp td-doc-image-homepage-loop" style="max-width: 100%" src="<?php echo get_template_directory_uri() ?>/wp-admin/images/info-homepage-loop.jpg" />


    </div>*/?>
</div>