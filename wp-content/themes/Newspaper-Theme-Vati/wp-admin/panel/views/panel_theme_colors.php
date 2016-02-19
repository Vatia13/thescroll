<!-- THEME COLORS -->
<?php echo td_panel_generator::box_start('Theme colors'); ?>
<!-- Page navigation text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">PAGINATION BUTTON COLOR</span>
        <p>Select pagination button color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_piker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_pagination_button_color',
            'default_color' => '#dd3333'
        ));
        ?>
    </div>
</div>

<!-- Page navigation text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">PAGINATION BUTTON HOVER COLOR</span>
        <p>Select pagination button hover color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_piker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_pagination_button_hover_color',
            'default_color' => '#dd3333'
        ));
        ?>
    </div>
</div>

<!-- Page navigation text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">PAGINATION TEXT COLOR</span>
        <p>Select pagination text color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_piker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_pagination_text_color',
            'default_color' => '#414141'
        ));
        ?>
    </div>
</div>

<!-- Page navigation text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">PAGINATION TEXT HOVER COLOR</span>
        <p>Select pagination text hover color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_piker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_pagination_text_hover_color',
            'default_color' => '#FFFFFF'
        ));
        ?>
    </div>
</div>
    <!-- theme_color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">THEME COLOR</span>
            <p>Select theme accent color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_theme_color',
                'default_color' => '#4db2ec'
            ));
            ?>
        </div>
    </div>


    <!-- BACKGROUND COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">BACKGROUND COLOR</span>
            <p>Select theme background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_site_background_color',
                'default_color' => ''
            ));
            ?>
        </div>
    </div>


    <!-- TOP MENU COLOR -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TOP MENU COLOR</span>
            <p>Select theme top menu color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_top_menu_color',
                'default_color' => '#2b2b2b'
            ));
            ?>
        </div>
    </div>


<?php /*<!-- TOP MENU TEXT COLOR -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">TOP MENU TEXT COLOR</span>
        <p>Select theme top menu text color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_piker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_top_menu_text_color',
            'default_color' => '#dddddd'
        ));
        ?>
    </div>
</div>*/?>



    <!-- Header color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">HEADER COLOR</span>
            <p>Select header color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_header_wrap_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


    <!-- LOGO TEXT color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LOGO TEXT COLOR</span>
            <p>Select logo text color, this is used if you select in the HEADER tab options with - text logo</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_logo_text_color',
                'default_color' => '#444444'
            ));
            ?>
        </div>
    </div>


    <!-- Menu background color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">MENU BACKGROUND COLOR</span>
            <p>Select menu background color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_menu_color',
                'default_color' => '#ffffff'
            ));
            ?>
        </div>
    </div>


<?php /*<!-- Menu text color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">MENU TEXT COLOR</span>
            <p>Select menu text color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_menu_text_color',
                'default_color' => '#202020'
            ));
            ?>
        </div>
    </div>*/?>


    <!-- Link color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LINK COLOR</span>
            <p>Select link color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_link_color',
                'default_color' => '#4db2ec'
            ));
            ?>
        </div>
    </div>


    <!-- Link Hover color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">LINK HOOVER COLOR</span>
            <p>Select link hoover color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_link_hover_color',
                'default_color' => '#4db2ec'
            ));
            ?>
        </div>
    </div>


    <!-- FOOTER color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER COLOR</span>
            <p>Select footer color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_color',
                'default_color' => '#fafafa'
            ));
            ?>
        </div>
    </div>


    <!-- FOOTER text color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER TEXT COLOR</span>
            <p>Select footer text color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_text_color',
                'default_color' => '#4b4b4b'
            ));
            ?>
        </div>
    </div>


    <!-- FOOTER bottom color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER BOTTOM COLOR</span>
            <p>Select footer bottom color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_bottom_color',
                'default_color' => '#2b2b2b'
            ));
            ?>
        </div>
    </div>


    <!-- FOOTER bottom text color -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FOOTER BOTTOM TEXT COLOR</span>
            <p>Select footer bottom text color</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_option',
                'option_id' => 'tds_footer_bottom_text_color',
                'default_color' => '#f5f5f5'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>
