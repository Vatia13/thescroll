<?php
class td_create_panel_translations {
    var $global_translations_array;

    function __construct() {
        global $td_translation_map;
        $this->global_translations_array = $td_translation_map;
        //print_r($this->global_translations_array);
    }

    function render_inputs(){
        //creating the inputs
        foreach($this->global_translations_array as $key_id => $value) {
            ?>
            <div class="td-box-row">
                <div class="td-box-description">
                    <span class="td-box-title td-title-on-row"><?php echo $key_id;?></span>
                    <p></p>
                </div>
                <div class="td-box-control-full">
                    <?php
                    echo td_panel_generator::input(array(
                        'ds' => 'td_translate',
                        'option_id' => $key_id
                    ));
                    ?>
                </div>
            </div>

            <?php
        }
    }
}
?>

<!-- Translation -->
<?php echo td_panel_generator::box_start('Translations'); ?>

    <!-- TRANSLATE YOUR THEME -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">TRANSLATE YOUR THEME</span>
            <p>Translate your front end easily without any external plugins that costs money. Leave the box empty and the theme will load the default string</p>
        </div>
    </div>
<?php

//render the inputs on the screen
$traslation_obiect = new td_create_panel_translations;
$traslation_obiect->render_inputs();?>

<?php echo td_panel_generator::box_end();?>