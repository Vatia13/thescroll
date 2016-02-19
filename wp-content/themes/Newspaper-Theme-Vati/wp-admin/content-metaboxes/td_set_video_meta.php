<div class="my_meta_control td-not-portfolio td-not-home">


    <?php
    $td_last_td_video = '';
    ?>
    <p class="td_help_section">
        <?php $mb->the_field('td_video'); ?>

        <input style="width: 100%;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <div class="td_info_inline"> Paste a link from Vimeo or Youtube, it will be embeded in the post and the thumb used as the featured image of this post</div>
        <?php
        $td_last_td_video = $mb->get_the_value();
        ?>
    </p>


    <?php $mb->the_field('td_last_video'); ?>
    <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php echo $td_last_td_video ?>">

</div>


