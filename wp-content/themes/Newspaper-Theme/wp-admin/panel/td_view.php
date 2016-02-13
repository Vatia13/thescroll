<form id="td_panel_big_form" action="?page=td_theme_panel" method="post">
<input type="hidden" name="action" value="td_ajax_update_panel">
<div class="td_displaying_saving"></div>
<div class="td_wrapper_saving_gifs">
    <img class="td_displaying_saving_gif" src="<?php echo get_template_directory_uri();?>/wp-admin/images/panel/loading.gif">
    <img class="td_displaying_ok_gif" src="">
</div>


<div class="wrap">

<div class="td-container-wrap">

<div class="td-panel-main-header">
    <img src="<?php echo get_template_directory_uri() . '/wp-admin/images/panel/panel-wrap/panel-logo.png'?>" alt=""/>
</div>


<div id="td-container-left">
    <div id="td-container-right">
        <div id="td-col-left">
            <ul class="td-panel-menu">
                <li class="td-welcome-menu">
                    <a data-panel="td-panel-welcome" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" class="td-panel-menu-active" href="#">
                        <span class="td-sp-nav-icon td-ico-welcome"></span>
                        WELCOME
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-header" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/2.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-header"></span>
                        HEADER
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-footer" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-footer"></span>
                        FOOTER
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-ads" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/2.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-ads"></span>
                        ADS
                        <span class="td-arrow"></span>
                    </a>
                </li>


                <li class="td-panel-menu-sep">LAYOUT SETTINGS</li>

                <li>
                    <a data-panel="td-panel-post-settings" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-post"></span>
                        POST SETTINGS
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-categories" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/2.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-categories"></span>
                        CATEGORIES
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-template-settings" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-template"></span>
                        TEMPLATE SETTINGS
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li class="td-panel-menu-sep">MISC</li>

                <li>
                    <a data-panel="td-panel-background" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/2.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-background"></span>
                        BACKGROUND
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-excerpts" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-excerpts"></span>
                        EXCERPTS
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-translates" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/2.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-translation"></span>
                        TRANSLATIONS
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-theme-colors" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-color"></span>
                        THEME COLORS
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-theme-fonts" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/2.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-typography"></span>
                        CUSTOM TYPOGRAPHY
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-custom-css" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-css"></span>
                        CUSTOM CSS
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-analytics" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/2.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-analytics"></span>
                        ANALYTICS
                        <span class="td-arrow"></span>
                    </a>
                </li>

                <li>
                    <a data-panel="td-panel-responsive-settings" data-bg="<?php echo get_template_directory_uri()?>/wp-admin/images/panel/bg/1.jpg" href="#">
                        <span class="td-sp-nav-icon td-ico-responsive"></span>
                        RESPONSIVE SETTINGS
                        <span class="td-arrow"></span>
                    </a>
                </li>

            </ul>
        </div>
        <div id="td-col-rigth" class="td-panel-content">

            <!-- homepage -->
            <div id="td-panel-welcome" class="td-panel-active td-panel">
                <?php include_once('views/panel_welcome.php');?>
            </div>

            <!-- header -->
            <div id="td-panel-header" class="td-panel">
                <?php include_once('views/panel_header.php');?>
            </div>

            <!-- Theme td-panel-ads -->
            <div id="td-panel-ads" class="td-panel">
                <?php include_once('views/panel_ads.php');?>
            </div>

            <!-- footer -->
            <div id="td-panel-footer" class="td-panel">
                <?php include_once('views/panel_footer.php');?>
            </div>

            <!-- post settings -->
            <div id="td-panel-post-settings" class="td-panel">
                <?php include_once('views/panel_post_settings.php');?>
            </div>

            <!-- template settings -->
            <div id="td-panel-template-settings" class="td-panel">
                <?php include_once('views/panel_template_settings.php');?>
            </div>

            <!-- background settings -->
            <div id="td-panel-background" class="td-panel">
                <?php include_once('views/panel_background.php');?>
            </div>

            <!-- translations -->
            <div id="td-panel-translates" class="td-panel">
                <?php include_once('views/panel_translations.php');?>
            </div>

            <!-- excerpts -->
            <div id="td-panel-excerpts" class="td-panel">
                <?php include_once('views/panel_excerpts.php');?>
            </div>

            <!-- Theme Colors -->
            <div id="td-panel-theme-colors" class="td-panel">
                <?php include_once('views/panel_theme_colors.php');?>
            </div>

            <!-- Theme Fonts -->
            <div id="td-panel-theme-fonts" class="td-panel">
                <?php include_once('views/panel_theme_fonts.php');?>
            </div>

            <!-- Theme Custom Css -->
            <div id="td-panel-custom-css" class="td-panel">
                <?php include_once('views/panel_custom_css.php');?>
            </div>

            <!-- Theme Analytics -->
            <div id="td-panel-analytics" class="td-panel">
                <?php include_once('views/panel_analytics.php');?>
            </div>

            <!-- Theme responsive settings -->
            <div id="td-panel-responsive-settings" class="td-panel">
                <?php include_once('views/panel_responsive_settings.php');?>
            </div>

            <!-- Theme td-panel-categories -->
            <div id="td-panel-categories" class="td-panel">
                <?php include_once('views/panel_categories.php');?>
            </div>

        </div>
    </div>
</div>

<div class="td-clear"></div>

<div class="td-panel-main-footer">
    <input type="button" id="td_button_save_panel" class="td-panel-save-button" value="SAVE SETTINGS">
</div>

</div>

<div class="td-clear"></div>
</form>
</div>
