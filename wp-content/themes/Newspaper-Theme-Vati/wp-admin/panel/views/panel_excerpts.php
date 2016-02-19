<!-- Excerpts -->
<?php echo td_panel_generator::box_start('Excerpts');?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>Adding a text as excerpt on post edit page (Excerpt box), will overwrite the theme excerpts</p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- BACKGROUND UPLOAD -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title">EXCERPTS TYPE</span>
            <p>Set the excerpt type</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_excerpts_type',
                'values' => array(
                    array('text' => 'On Words', 'val' => ''),
                    array('text' => 'On Letters', 'val' => 'letters')
                )
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>




<!-- Wordpress default -->
<?php echo td_panel_generator::box_start('Wordpress default');?>

<!-- TITLE LENGTH -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class=" td-box-title td-title-on-row">EXCERPT LENGTH</span>
        <p></p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::input(array(
            'ds' => 'td_option',
            'option_id' => 'tds_wp_default_excerpt'
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>



<!-- 'Big slide Big images -->
<?php echo td_panel_generator::box_start('Big slide - big images', false); ?>

<div class="td-box-row">
    <div class="td-box-description td-box-full">
        <span class="td-box-title">Notice:</span>
        <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
    </div>
    <div class="td-box-row-margin-bottom"></div>
</div>

<!-- TITLE LENGTH -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
        <p></p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::input(array(
            'ds' => 'td_option',
            'option_id' => 'tds_big_slide_big_image_title_excerpt'
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>



<!-- 'Big slide Small images -->
<?php echo td_panel_generator::box_start('Big slide - small images', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_big_slide_small_image_title_excerpt'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- 'Module 2 -->
<?php echo td_panel_generator::box_start('Module 2', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod2_title_excerpt'
            ));
            ?>
        </div>
    </div>

    <!-- CONTENT LENGTH LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">CONTENT LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod2_content_excerpt'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- 'Module 3 -->
<?php echo td_panel_generator::box_start('Module 3', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod3_title_excerpt'
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();?>




<!-- 'Module 4 -->
<?php echo td_panel_generator::box_start('Module 4', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod4_title_excerpt'
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();?>




<!-- 'Module 5 -->
<?php echo td_panel_generator::box_start('Module 5', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod5_title_excerpt'
            ));
            ?>
        </div>
    </div>

    <!-- CONTENT LENGTH LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">CONTENT LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod5_content_excerpt'
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();?>



<!-- 'Module 6 -->
<?php echo td_panel_generator::box_start('Module 6', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod6_title_excerpt'
            ));
            ?>
        </div>
    </div>


<?php echo td_panel_generator::box_end();?>




<!-- 'Module 7 -->
<?php echo td_panel_generator::box_start('Module 7', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">CONTENT LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod7_content_excerpt'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>




<!-- 'Module 8 -->
<?php echo td_panel_generator::box_start('Module 8', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod8_title_excerpt'
            ));
            ?>
        </div>
    </div>

    <!-- CONTENT LENGTH LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">CONTENT LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod8_content_excerpt'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>




<!-- 'Module 9 -->
<?php echo td_panel_generator::box_start('Module 9', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod9_title_excerpt'
            ));
            ?>
        </div>
    </div>

    <!-- CONTENT LENGTH LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">CONTENT LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod9_content_excerpt'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>




<!-- 'Module Search -->
<?php echo td_panel_generator::box_start('Module search', false); ?>

    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Notice:</span>
            <p>You can find documentation on how blocks are created from modules <a href="http://forum.tagdiv.com/modules-and-blocks/" target="_blank">here</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- TITLE LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">TITLE LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod_search_title_excerpt'
            ));
            ?>
        </div>
    </div>

    <!-- CONTENT LENGTH LENGTH -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class=" td-box-title td-title-on-row">CONTENT LENGTH</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_mod_search_content_excerpt'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



