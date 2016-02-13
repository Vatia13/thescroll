<!-- post settings -->
<?php echo td_panel_generator::box_start('Post settings'); ?>

    <!-- Show date -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW DATE</span>
            <p>Enable or disable the post date</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_show_date',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show post views -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW POST VIEWS</span>
            <p>Enable or disable the post views</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_show_views',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- SHow comment count -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW COMMENT COUNT</span>
            <p>Enable or disable comment number</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_show_comments',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- use 7 days post sorting -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">USE 7 DAYS POST SORTING</span>
            <p>Enable or disable the popular last 7 days</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_p_enable_7_days_count',
                'true_value' => 'enabled',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <!-- Show tags on post -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW TAGS ON POST</span>
            <p>Enable or disable the post tags</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_tags',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show author box -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW AUTHOR BOX</span>
            <p>Enable or disable the author box</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_author_box',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show next and previous posts -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW NEXT AND PREVIOUS POSTS</span>
            <p>Show or hide `next` and `previous` posts</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_next_prev',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Disable post sidewide -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE COMMENTS SITEWIDE</span>
            <p>Enable or disable the comments on the entire site, default this option is disabled</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_disable_comments_sidewide',
                'true_value' => 'disable',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>



    <!-- Disable comments on pages -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE COMMENTS ON PAGES</span>
            <p>Enable or disable the comments on the pages, default this option is disabled</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_disable_comments_pages',
                'true_value' => '',
                'false_value' => 'show_comments'
            ));
            ?>
        </div>
    </div>



    <!-- Enable / Disabled Ajax post count -->
    <div class="td-box-row">
        <div class="td-box-description td-no-short-description">
            <span class="td-box-title">ENABLE / DISABLE AJAX POST VIEW COUNT</span>
        </div>
        <div class="td-box-control-full td-height-32">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_ajax_post_view_count',
                'true_value' => 'enabled',
                'false_value' => ''
            ));
            ?>
        </div>
        <div class="td-full-box-description">
            <p>Enabling this feature will update the post view count using ajax on both pages and single post page. This feature is best used if you have a caching plugin active. On pages it will retrieve from the server the correct post view count. On single post page this feature will also increment the post view counter. When this feature is enabled, the default (classic) post counter incrementation is disabled. After enabling or disabling this feature please be sure to empty all caches.  </p>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- Default site post template -->
<?php echo td_panel_generator::box_start('Default site post template', false);?>

    <!-- Default post template -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DEFAULT SITE POST TEMPLATE</span>
            <p>Setting this option will make all post pages, that don't have a post template associated to them, to be displayed using this template. This option is OVERWRITTEN by the `Post template` option from the backend - post add / edit page.   </p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'td_default_site_post_template',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/post-templates/post-templates-icons-0.png'),
                    array('text' => '', 'title' => '', 'val' => 'single_template_1', 'img' => get_template_directory_uri() . '/wp-admin/images/post-templates/post-templates-icons-1.png'),
                    array('text' => '', 'title' => '', 'val' => 'single_template_2', 'img' => get_template_directory_uri() . '/wp-admin/images/post-templates/post-templates-icons-2.png'),
                    array('text' => '', 'title' => '', 'val' => 'single_template_3', 'img' => get_template_directory_uri() . '/wp-admin/images/post-templates/post-templates-icons-3.png'),
                    array('text' => '', 'title' => '', 'val' => 'single_template_4', 'img' => get_template_directory_uri() . '/wp-admin/images/post-templates/post-templates-icons-4.png'),
                    array('text' => '', 'title' => '', 'val' => 'single_template_5', 'img' => get_template_directory_uri() . '/wp-admin/images/post-templates/post-templates-icons-5.png')
                )
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- breadcrumbs -->
<?php echo td_panel_generator::box_start('Breadcrumbs', false); ?>

    <!-- Show breadcrumbs on post -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW BREADCRUMBS ON POST</span>
            <p>Show or hide the breadcrumbs</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Show breadcrumbs home link -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW BREADCRUMBS HOME LINK</span>
            <p>Show or hide the home link in breadcrumbs</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show_home',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>



    <!-- Show breadcrumbs parent category -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW BREADCRUMBS PARENT CATEGORY</span>
            <p>Show or hide the parent category link (ex: you have Category1 who's the parent of Category2, here parent category refers to Category1)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show_parent',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- show Breadcrumbs article title -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW BREADCRUMBS ARTICLE TITLE</span>
            <p>Show or hide breadcrumbs article title</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_breadcrumbs_show_article',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- featured images -->
<?php echo td_panel_generator::box_start('Featured images', false); ?>

    <!-- SHOW FEATURED IMAGE -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW FEATURED IMAGE</span>
            <p>Show or hide featured image</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_show_featured_image',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Featured image placeholder -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FEATURED IMAGE PLACEHOLDER</span>
            <p>Enable or disable featured image placeholder</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_featured_image_placeholder',
                'true_value' => 'show_placeholder',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <!-- Featured image lightbox -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">FEATURED IMAGE LIGHTBOX</span>
            <p>Action to take when clicking on feature image</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_featured_image_view_setting',
                'values' => array(
                    array('text' => 'Use lightbox', 'val' => ''),
                    array('text' => 'No lightbox', 'val' => 'no_modal')
                )
            ));
            ?>
        </div>
    </div>


    <!-- Crop featured image -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">CROP FEATURED IMAGE</span>
            <p>Enable if you want to crop the featured images to (700px x 357px). </p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_crop_features_image',
                'true_value' => 'Crop',
                'false_value' => ''
            ));
            ?>

            <div class="td-help-checkbox-inline">
                Only new images are cropped. If you want to crop your old content <a target="_blank" href="http://forum.tagdiv.com/using-the-theme-with-existing-content/">see here</a>
            </div>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<!-- similar article -->
<?php echo td_panel_generator::box_start('Similar article', false); ?>

    <!-- Show similar article -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SHOW SIMILAR ARTICLE</span>
            <p>Enable or disable similar article section</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_similar_articles',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- Similar article - Type -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SIMILAR ARTICLE - TYPE</span>
            <p>Sort similar article</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_similar_articles_type',
                'values' => array(
                    array('text' => 'by category', 'val' => ''),
                    array('text' => 'by tag', 'val' => 'by_tag'),
                    array('text' => 'by author', 'val' => 'by_auth')
                )
            ));
            ?>
        </div>
    </div>


    <!-- Similar article -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">SIMILAR ARTICLE</span>
            <p>How many similar article to show
            </p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::radio_button_control(array(
                'ds' => 'td_option',
                'option_id' => 'tds_similar_articles_count',
                'values' => array(
                    array('text' => '2 posts', 'val' => ''),
                    array('text' => '4 posts', 'val' => '4'),
                    array('text' => '6 posts', 'val' => '6'),
                    array('text' => '8 posts', 'val' => '8')
                )
            ));
            ?>
        </div>
    </div>
<?php echo td_panel_generator::box_end();?>



<!-- sharing -->
<?php echo td_panel_generator::box_start('Sharing', false); ?>


    <!-- ARTICLE sharing -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE SHARING</span>
            <p>Show or hide the article sharing on post</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_social_show',
                'true_value' => '',
                'false_value' => 'hide'
            ));
            ?>
        </div>
    </div>


    <!-- ARTICLE like -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE LIKE/TWEET/G+</span>
            <p>Show or hide the article like/tweet on post</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_like_tweet_show',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>


    <!-- Twitter name -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">TWITTER USERNAME</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_tweeter_username'
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<?php echo td_panel_generator::box_start('More Article Box', false); ?>

    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">MORE ARTICLES</span>
            <p>Enable / Disable - More Articles option</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_enable',
                'true_value' => 'show',
                'false_value' => ''
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISTANCE FROM THE TOP</span>
            <p>This is the distance from the top, that user have to scroll, before the window will appear, default 400</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::input(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_distance_from_top'
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISPLAY ARTICLES</span>
            <p>What articles should be displayed</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_display',
                'values' => array(
                    array('text' => 'Latest Article' , 'val' => ''),
                    array('text' => 'From Same Category' , 'val' => 'same_category'),
                    array('text' => 'From Post Tags' , 'val' => 'same_tag'),
                    array('text' => 'From Same Author' , 'val' => 'same_author'),
                    array('text' => 'Random' , 'val' => 'random')
                )
            ));
            ?>
        </div>
    </div>


    <!-- DISPLAY VIEW -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">ARTICLE DISPLAY VIEW</span>
            <p>Select a module type, this is how your article list will be displayed</p>
        </div>
        <div class="td-box-control-full td-panel-module">
            <?php
            echo td_panel_generator::visual_select_o(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_display_module',
                'values' => array(
                    array('text' => '', 'title' => '', 'val' => '', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-2.png'),
                    array('text' => '', 'title' => '', 'val' => '3', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-3.png'),
                    array('text' => '', 'title' => '', 'val' => '4', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-4.png'),
                    array('text' => '', 'title' => '', 'val' => '5', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-5.png'),
                    array('text' => '', 'title' => '', 'val' => '6', 'img' => get_template_directory_uri() . '/wp-admin/images/panel/module-6.png')
                )
            ));
            ?>
        </div>
    </div>



    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">NUMBER OF POSTS</span>
            <p>Number of post being displayed</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_number',
                'values' => array(
                    array('text' => '1' , 'val' => ''),
                    array('text' => '2' , 'val' => 2),
                    array('text' => '3' , 'val' => 3),
                    array('text' => '4' , 'val' => 4),
                    array('text' => '5' , 'val' => 5),
                    array('text' => '6' , 'val' => 6)
                )
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE TIME</span>
            <p>If the user closes the More Articles box, this is the time (in days) to wait before seeing the box again</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::dropdown(array(
                'ds' => 'td_option',
                'option_id' => 'tds_more_articles_on_post_pages_time_to_wait',
                'values' => array(
                    array('text' => 'never' , 'val' => ''),
                    array('text' => 'for 1 day' , 'val' => 1),
                    array('text' => 'for 2 days' , 'val' => 2),
                    array('text' => 'for 3 days' , 'val' => 3)
                )
            ));
            ?>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>