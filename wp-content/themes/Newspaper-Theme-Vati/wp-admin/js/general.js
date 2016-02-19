/*

    tagDiv wp-admin js

    used on posts meta options and in different places in the theme

 */


//init the variable if it's undefined, sometimes wordpress will not run the wp_footer hooks in wp-admin (in modals for example)
if (typeof td_get_template_directory_uri === 'undefined') {
    td_get_template_directory_uri = '';
}



function td_widget_attach_color_picker() {
    //hide all colorpickers
    jQuery('.td-color-picker-widget').hide();

    // tagdiv widget colorpicker
    jQuery('.widgets-php .td-color-picker-widget').each(function(){
        var $this = jQuery(this);
        var id = $this.attr('rel');
        $this.farbtastic('#' + id);
    });

    jQuery('.td-color-picker-field').click(function(){
        jQuery('#' + jQuery(this).data('td-w-color')).fadeIn();
    });


    jQuery(document).mousedown(function() {
        jQuery('.td-color-picker-widget').each(function() {
            var display = jQuery(this).css('display');
            if ( display == 'block' )
                jQuery(this).fadeOut();
        });
    });
}


jQuery().ready(function() {

    td_widget_attach_color_picker();

    //alert(td_get_template_directory_uri);
    td_ui_add_menu_icons();


    /*  ----------------------------------------------------------------------------
        Sidebar manager
     */
    jQuery('.td_rename').click(function(event){
        event.preventDefault();
        jQuery('.td-modal').hide('fast');
        jQuery(jQuery(this).attr('href')).show('fast');
    });


    jQuery('.td_modal_cancel').click(function(event){
        event.preventDefault();
        jQuery('.td-modal').hide('fast');
    });




    /*  ----------------------------------------------------------------------------
         Template settings
     */

    td_show_template_settings_on_selected_2();

    jQuery('#page_template').change(function() {
        td_show_template_settings_on_selected_2();
    });



    jQuery( ".td_ad_code_type" ).each(function( index ) {
        jQuery(this).change(function() {
            var cur_template = jQuery(this).find(' option:selected').text();
            if (cur_template == 'Asynchronous') {
                jQuery(this).parent().parent().find('.td-ga-sync').hide();
                jQuery(this).parent().parent().find('.td-ga-async').show();
            } else {
                jQuery(this).parent().parent().find('.td-ga-sync').show();
                jQuery(this).parent().parent().find('.td-ga-async').hide();
            }
        });
    });






});


function td_show_template_settings_on_selected_2() {
    if (jQuery('#post_type').val() == 'post') {
        return;
    }

    //text and image after template drop down
    td_add_text_image_after_template_drop_down(0);


    //hide all elements
    //jQuery('#postbox-container-2 [id$=_metabox]').hide();
    jQuery('#td_homepage_loop_metabox, #td_homepage_loop_slide_metabox').hide(); //it's better to hide them by id for compatibility with other plugins

    var cur_template = jQuery('#page_template option:selected').text();
    switch (cur_template) {
        case 'Homepage - with article list':
            jQuery('#td_homepage_loop_metabox').slideDown();
            jQuery('#td_homepage_loop_filter_metabox').slideDown();
            jQuery('.td-doc-image-homepage-loop-bg, #td_page_metabox').hide();
            jQuery('.td-doc-image-homepage-loop').show();

            td_add_text_image_after_template_drop_down(1);
            break;

        case 'Homepage - bg + with article list':
            jQuery('#td_homepage_loop_metabox, #td_homepage_loop_slide_metabox').slideDown();
            jQuery('#td_homepage_loop_filter_metabox').slideDown();
            jQuery('.td-doc-image-homepage-loop').hide();
            jQuery('.td-doc-image-homepage-loop-bg').show();
            jQuery('.td-doc-image-homepage-loop-bg-pb, #td_page_metabox').hide();
            break;

        case 'Homepage - bg - no article list':
            jQuery('#td_homepage_loop_slide_metabox').slideDown();
            jQuery('.td-doc-image-homepage-loop-bg-pb').show();
            jQuery('.td-doc-image-homepage-loop-bg, #td_page_metabox').hide();
            jQuery('#td_homepage_loop_filter_metabox').hide();
            break;

        case 'Default Template':
            jQuery('#td_page_metabox').slideDown();
            jQuery('#td_homepage_loop_metabox, #td_homepage_loop_slide_metabox').hide();
            jQuery('#td_homepage_loop_filter_metabox').hide();
            break;

        case 'Homepage - blank':
            jQuery('#td_homepage_loop_filter_metabox').hide();
            break;

        case 'Page builder - with title':
            jQuery('#td_homepage_loop_filter_metabox').hide();
            break;

        case 'bbpress forum':
            jQuery('#td_homepage_loop_filter_metabox').hide();
            jQuery('#td_page_metabox').slideDown();

            break;
    }
}



//insert text and image after template pull down on add/edit pages
function td_add_text_image_after_template_drop_down(template) {

    if(document.getElementById("td_after_template_container_id")) {

        var after_element = document.getElementById("td_after_template_container_id");

        after_element.innerHTML = "";

        switch(template) {
            case 1:
                after_element.innerHTML = "test";
                break;

            case 2:
                after_element.innerHTML = "test222222";
                break;
        }

    } else {

        if(document.getElementById("page_template")) {
            //create the container
            var after_element = document.createElement("div");
            after_element.setAttribute("id", "td_after_template_container_id");

            //insert the element in DOM, after template pull down
            document.getElementById("page_template").parentNode.insertBefore(after_element, document.getElementById("page_template").nextSibling);
        }
    }
}






function td_ui_add_menu_icons() {


    //close_link = $('<a class="" href="#">Click here to see an alert</a>');
    jQuery('.menu-item-depth-0 .menu-item-actions').before('' +
        '<p class=" description description-wide td-custo-menu-controls-live"><label>Use icon on main menu</label>' +
        '<br>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_home" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-home.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_category" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-categ.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_contact" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-contact.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_menu" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-menu.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_social" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-social.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_video" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-video.png"/>' +
        '</p>' +
        '');


    jQuery(document).on("click", ".td-wpadmin-menu-icon", function(){
        jQuery('.td-wpadmin-menu-ico-sel').removeClass('td-wpadmin-menu-ico-sel');
        jQuery(this).addClass('td-wpadmin-menu-ico-sel');

        if (jQuery(this).data('td-is-update') == 'y') {
            //is a click in the update menu form
            //update the right menu
            var menu_title_el = jQuery(this).parent().parent().find('.edit-menu-item-title');
            menu_title_el.val('[' +  jQuery(this).data('td-sc-gen')  + ']');
        } else {
            //is a click in the add new menu form
            //upade the left metabox
            jQuery('#custom-menu-item-name').val('[' +  jQuery(this).data('td-sc-gen')  + ']');
            jQuery('#custom-menu-item-url').val('#');
        }


        //alert('ra');



    });


    jQuery('.edit-menu-item-title, #custom-menu-item-name').keydown(function(event) {
        jQuery('.td-wpadmin-menu-ico-sel').removeClass('td-wpadmin-menu-ico-sel');
    });



    //add the icons after new menu added
    jQuery('.submit-add-to-menu').click(function(){
        jQuery(this).delay(3000).queue(function(){
            jQuery('#update-nav-menu .td-custo-menu-controls-live').remove();

            //close_link = $('<a class="" href="#">Click here to see an alert</a>');
            jQuery('.menu-item-depth-0 .menu-item-actions').before('' +
                '<p class=" description description-wide td-custo-menu-controls-live"><label>Use icon on main menu</label>' +
                '<br>' +
                '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_home" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-home.png"/>' +
                '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_category" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-categ.png"/>' +
                '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_contact" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-contact.png"/>' +
                '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_menu" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-menu.png"/>' +
                '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_social" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-social.png"/>' +
                '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_video" data-td-is-update="y" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-video.png"/>' +
                '</p>' +
                '');
            jQuery(this).dequeue();
        });
    });









    jQuery('#customlinkdiv').after('' +
        '<p class=" description description-wide td-custo-menu-controls-live"><label>Use icon on main menu</label>' +
        '<br>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_home" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-home.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_category" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-categ.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_contact" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-contact.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_menu" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-menu.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_social" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-social.png"/>' +
        '<img class="td-wpadmin-menu-icon" data-td-sc-gen="menu_video" src="' + td_get_template_directory_uri + '/wp-admin/images/menu/ico-video.png"/>' +
        '</p>' +
        '');





}


