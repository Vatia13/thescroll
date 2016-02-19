<!-- FOOTER SETTINGS -->
<?php echo td_panel_generator::box_start('Footer settings'); ?>

    <!-- show/hide footer -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER</span>
            <p>Hide or show the footer</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">More information:</span>
            <p>The footer uses sidebars to show information. Here you can customize the number of sidebars and the layout. To add content to the footer head go to the widgets section and drag widget to the Footer 1, Footer 2 and Footer 3 sidebars </p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- LAYOUT -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LAYOUT</span>
            <p>Set footer layout</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_widget_cols',
                'values' => array(
                    array('text' => '1/5 - 1/5', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/footer-5.png'),
                    array('text' => '1/4 - 1/4', 'title' => '', 'val' => '14-14', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/footer-6.png'),
                    array('text' => '1/3 - 1/3 - 1/3', 'title' => '', 'val' => '13-13', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/footer-1.png'),
                    array('text' => '2/3 - 1/3', 'title' => '', 'val' => '23-13', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/footer-2.png'),
                    array('text' => '1/3 - 2/3', 'title' => '', 'val' => '13-23', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/footer-3.png'),
                    array('text' => '5/5 (full)', 'title' => '', 'val' => '33', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/footer-4.png')
                )
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- SUB-FOOTER SETTINGS -->
<?php echo td_panel_generator::box_start('Sub-footer settings'); ?>

<!-- show/hide sub-footer -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">SUB-FOOTER</span>
        <p>Hide or show the sub-footer</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::checkbox(array(
            'ds' => 'td_option',
            'option_id' => 'tds_sub_footer',
            'true_value' => '',
            'false_value' => 'hide'
        ));
        ?>
    </div>
</div>

<!-- Footer copyright text -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">FOOTER COPYRIGHT TEXT</span>
        <p>Set footer copyright text</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::input(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer_copyright'
        ));
        ?>
    </div>
</div>


<!-- Copyright symbol -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">COPYRIGHT SYMBOL</span>
        <p>Show or hide the footer copyright symbol</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::checkbox(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer_copy_symbol',
            'true_value' => '',
            'false_value' => 'no'
        ));
        ?>
    </div>
</div>

<!-- Footer menu -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">FOOTER MENU</span>
        <p>Select a menu for the footer</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::dropdown(array(
            'ds' => 'wp_theme_menu_spot',
            'option_id' => 'footer-menu',
            'values' => td_panel_generator::$td_user_created_menus
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>