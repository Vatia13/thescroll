<div class="my_meta_control td-page-module-loop-slide-wrap">

    <p class="td_help_section">
        <?php $mb->the_field('td_slide_background'); ?>
        <span class="td_custom_label">Slide background: </span><input class="td-input-text-post-settings" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <span class="td_info_inline"> - url to the image that will be used for the background</span>
    </p>


    <p class="td_help_section">
        <?php $mb->the_field('td_slide_limit'); ?>
        <span class="td_custom_label">Slide limit: </span><input class="td-input-text-post-settings" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <span class="td_info_inline"> - Number of posts to show (default 8)</span>
    </p>


    <?php
    /*
    $widget_color_picker_id = td_global::td_generate_unique_id();
    ?>
    <p class="td_help_section">
        <?php $mb->the_field('td_slide_b_color'); ?>
        <span class="td_custom_label">Background color: </span><input id="td-b-slide-color" data-td-w-color="<?php echo $widget_color_picker_id?>" style="width: 200px;" class="td-color-picker-field" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>

        <span class="td_info_inline"> - Leave empty for no color</span>

    </p>

    <div id="<?php echo $widget_color_picker_id?>" class="td-color-picker-widget" rel="td-b-slide-color"></div>
    <script>
        td_widget_attach_color_picker();


        jQuery('#td-b-slide-color').click(function(){
            if(jQuery('#td-b-slide-color').val() =='') {
                jQuery('#td-b-slide-color').val('#');
            }
        });

    </script>
    */?>


        <?php //$mb->the_field('td_slide_b_color'); ?>
        <span class="td_custom_label ">Background color: </span>
        <div class=" td-color-piker-backend td-display-inline-block">
            <?php
            echo td_panel_generator::color_piker(array(
                'ds' => 'td_homepage_loop_slide',
                'option_id' => 'td_slide_b_color',
                'default_color' => '',
                'selected_value' => $mb->get_the_value('td_slide_b_color')
            ));
            ?>
        </div>

        <span class="td_info_inline td-help-info-inline"> - Leave empty for no color</span>




    <p>
        <img class="td-doc-image-wp td-doc-image-homepage-loop-bg-pb" style="max-width: 100%" src="<?php echo get_template_directory_uri() ?>/wp-admin/images/info-homepage-bg-pb.jpg" />
        <img class="td-doc-image-wp td-doc-image-homepage-loop-bg" style="max-width: 100%" src="<?php echo get_template_directory_uri() ?>/wp-admin/images/info-homepage-bg-article.jpg" />
    </p>
</div>