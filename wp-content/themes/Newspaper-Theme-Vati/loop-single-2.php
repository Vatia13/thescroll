<?php
/**
 * The single post loop for post template 2
 **/

if (have_posts()) {
    the_post();

    $td_mod_single = new td_module_1($post);

    if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
        <p class="td-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p><?php
    }

    // override the default featured image by the templates (single.php and home.php/index.php - blog loop)
    if (!empty(td_global::$load_featured_img_from_template)) {
        echo $td_mod_single->get_image(td_global::$load_featured_img_from_template);
    } else {
        echo $td_mod_single->get_image('featured-image');
    }
    ?>

    <div class="td-post-text-content">
        <?php echo $td_mod_single->get_content();?>
    </div>


    <div class="clearfix"></div>

    <footer>
        <?php echo $td_mod_single->get_post_pagination();?>
        <?php echo $td_mod_single->get_review();?>
        <?php echo $td_mod_single->get_source_and_via();?>
        <?php echo $td_mod_single->get_social_sharing();?>
        <?php echo $td_mod_single->get_social_like_tweet();?>
        <?php echo $td_mod_single->get_next_prev_posts();?>
        <?php echo $td_mod_single->get_author_box();?>


        <?php echo $td_mod_single->get_item_scope_meta();?>
    </footer>

    <?php echo $td_mod_single->related_posts();?>

<?php
} else {
    //no posts
    echo td_page_generator::no_posts();
}?>