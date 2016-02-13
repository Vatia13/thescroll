<!-- RESPONSIVE SETTINGS -->
<?php echo td_panel_generator::box_start('Responsive settings'); ?>

    <!-- Responsive -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">RESPONSIVE</span>
            <p>Set your site dimension</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_responsive',
                'values' => array(
                    array('text' => 'Full responsive (1170px)', 'val' => ''),
                    array('text' => 'Full responsive (980px)', 'val' => '980_responsive'),
                    array('text' => '980px fixed layout', 'val' => '980'),
                    array('text' => '1170px fixed layout', 'val' => '1170')
                )
            ));
            ?>
        </div>
    </div>



<?php echo td_panel_generator::box_end();?>