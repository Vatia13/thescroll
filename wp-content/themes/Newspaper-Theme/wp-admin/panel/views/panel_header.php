<!-- HEADER STYLE -->
<?php echo td_panel_generator::box_start('Header style'); ?>




    <!-- HEADER STYLE -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">HEADER STYLE</span>
            <p>Select the order in which the header elements will be arranged</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_header_style',
                'values' => array(
                    array('text' => '<strong>Style 1 - </strong> (logo + ad) + menu', 'val' => ''),
                    array('text' => '<strong>Style 2 - </strong> (text logo + ad) + menu', 'val' => '2'),
                    array('text' => '<strong>Style 3 - </strong> (full width logo) + menu', 'val' => '3'),

                    array('text' => '<strong>Style 4 - </strong> menu + (logo + ad)', 'val' => '4'),
                    array('text' => '<strong>Style 5 - </strong> menu + (text logo + ad)', 'val' => '5'),
                    array('text' => '<strong>Style 6 - </strong> menu + (full width logo)', 'val' => '6'),
                    array('text' => '<strong>Blog style - </strong> full text logo + menu', 'val' => '7'),
                    array('text' => '<strong>Style 8 - </strong> logo + menu on one line', 'val' => '8')
                )
            ));
            ?>
        </div>
    </div>

    <!-- Transparent header -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TRANSPARENT HEADER</span>
            <p>Make the header transparent</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_transparent_header',
                'true_value' => 'hide',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <!-- Header alignment up/down -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">HEADER ALIGNMENT UP/DOWN</span>
            <p>Move the header up/down (ex. -10px or em, pt)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_header_align_top'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- TOP MENU -->
<?php echo td_panel_generator::box_start('Top MENU (black one)', false); ?>

    <!-- TOP MENU -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TOP MENU</span>
            <p>Hide or show the top menu</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_menu',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>

    <!-- Top header menu -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TOP MENU</span>
            <p>Select a menu for the top section</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'wp_theme_menu_spot',
                'option_id' => 'top-menu',
                'values' => td_panel_generator::$td_user_created_menus
            ));
            ?>
        </div>
    </div>


    <!-- SHOW DATE -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW DATE</span>
            <p>Hide or show the date on the top menu</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_data_top_menu',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <!-- DATE FORMAT -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DATE FORMAT</span>
            <p>Default value: l, F j, Y</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_data_time_format'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- MAIN MENU -->
<?php echo td_panel_generator::box_start('Main MENU', false); ?>

<!-- MAIN MENU -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">Header menu (main)</span>
        <p>Select a menu for the main header section</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::dropdown(array(
            'ds' => 'wp_theme_menu_spot',
            'option_id' => 'header-menu',
            'values' => td_panel_generator::$td_user_created_menus
        ));
        ?>
    </div>
</div>


<!-- MENU COLOR ICONS -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">Switch menu icons color</span>
        <p>Here you can switch the menu icons color from black to white</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::radio_button_control(array(
            'ds' => 'td_option',
            'option_id' => 'tds_menu_icon_color',
            'values' => array(
                array('text' => 'Black', 'val' => ''),
                array('text' => 'White', 'val' => '2')
            )
        ));
        ?>
    </div>
</div>


<!-- STICKY MENU -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">STICKY MENU</span>
        <p>How to display the header menu on scroll</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::radio_button_control(array(
            'ds' => 'td_option',
            'option_id' => 'tds_snap_menu',
            'values' => array(
                array('text' => '<strong>Normal menu</strong> - (not sticky)', 'val' => ''),
                array('text' => '<strong>Always snap</strong> - stays at the top of the page', 'val' => 'snap'),
                array('text' => '<strong>Smart snap </strong> - (mobile)', 'val' => 'smart_snap_mobile'),
                array('text' => '<strong>Smart snap </strong> - (always)', 'val' => 'smart_snap_always'),
            )
        ));
        ?>
    </div>
</div>





<?php echo td_panel_generator::box_end();?>


<!-- LOGO -->
<?php echo td_panel_generator::box_start('Logo', false); ?>

    <!-- LOGO UPLOAD -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO UPLOAD</span>
            <p>Upload your logo (300 x 100px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_upload'
            ));
            ?>
        </div>
    </div>

    <!-- RETINA LOGO UPLOAD -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">RETINA LOGO UPLOAD</span>
            <p>Upload your retina logo (600 x 200px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_upload_r'
            ));
            ?>
        </div>
    </div>


    <!-- FAVICON -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FAVICON</span>
            <p>Upload a favicon image (16 x 16px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_favicon_upload'
            ));
            ?>
        </div>
    </div>


    <!-- Logo ALT attribute -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO ALT ATTRIBUTE</span>
            <p>Write ALT attribute for the logo</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_alt'
            ));
            ?>
        </div>
    </div>


    <!-- Logo TITLE attribute -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO TITLE ATTRIBUTE</span>
            <p>Write TITLE attribute for the logo</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_title'
            ));
            ?>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>



<!-- Logo for Mobile -->
<?php echo td_panel_generator::box_start('Logo for Mobile', false); ?>

    <!-- LOGO MOBILE IN MENU -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO MOBILE - IN MENU</span>
            <p>Upload your logo</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_menu_upload'
            ));
            ?>
        </div>
    </div>

    <!-- RETINA LOGO MOBILE IN MENU UPLOAD -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">RETINA LOGO MOBILE - IN MENU</span>
            <p>Upload your retina logo (double size)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_menu_upload_r'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- iOS Bookmarklet -->
<?php echo td_panel_generator::box_start('iOS Bookmarklet', false); ?>

    <!-- iOS bookmarklet 76x76 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 76 x 76</span>
            <p>Upload your icon (76 x 76px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // ipad mini non retina + ipad 2
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_76'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 114x114 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 114 x 114</span>
            <p>Upload your icon (114 x 114px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php  // iphone retina ios6
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_114'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 120x120 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 120 x 120</span>
            <p>Upload your icon (120 x 120px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // iphone retina ioS7
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_120'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 144x144 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 144 x 144</span>
            <p>Upload your icon (144 x 144px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // ipad retina ios6
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_144'
            ));
            ?>
        </div>
    </div>


    <!-- iOS bookmarklet 152x152 -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">IMAGE 152 x 152</span>
            <p>Upload your icon (152 x 152px) .png</p>
        </div>
        <div class="td-box-control-full">
            <?php // ipad retina ios7
            echo td_panel_generator::upload_image(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ios_icon_152'
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();
