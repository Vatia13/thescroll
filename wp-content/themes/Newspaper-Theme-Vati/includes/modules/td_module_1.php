<?php

/**
 * This is the full blog post module
 */
class td_module_1 extends td_module_blog {
    var $show_excerpt = false; //this is changed by module 7 (module 7 inherits this module)
    var $i;

    function __construct($post,$i=0) {
        //run the parrent constructor
        parent::__construct($post);
        $this->i = $i;
    }

    function render() {
        ob_start();
        $buffy = '';
        if($this->i == 1):  //IF i == 1 echo out first post?>
            <article id="post-<?php echo $this->post->ID;?>">
                <div class="first-post">
                    <div class="first-post-image">
                        <?php
                        // override the default featured image by the templates (single.php and home.php/index.php - blog loop)
                        if (!empty(td_global::$load_featured_img_from_template)) {
                            echo $this->get_image(td_global::$load_featured_img_from_template);
                        } else {
                            echo $this->get_image('featured-image');
                        }
                        ?>
                    </div>
                    <div class="first-post-title">
                        <div class="first-post-date">
                            <?php echo $this->get_date(false);?>
                        </div>
                        <?php echo $this->get_title();?>
                    </div>
                    <?php echo $this->get_the_tags();?>
                </div>
            </article>
            <div id="ajax_news_place">
        <?php else:?>

            <div class="td_mod_wrap td_mod_new <?php echo $this->get_no_thumb_class();?>" <?php echo $this->get_item_scope();?>>
                <?php echo $this->get_image('art-big-1col');?>

                <div class="item-details">
                    <?php echo $this->get_title(td_util::get_option('tds_mod8_title_excerpt'));?>
                    <div class="meta-info">
                        <?php //echo $this->get_author();?>
                        <?php echo $this->get_date();?>
                        <?php echo $this->get_commentsAndViews();?>
                    </div>
                </div>

                <?php echo $this->get_item_scope_meta();?>
            </div>


        <?php //echo $this->related_posts();?>
        <?php
            endif;
        //return $buffy;
        return ob_get_clean();
    }
}