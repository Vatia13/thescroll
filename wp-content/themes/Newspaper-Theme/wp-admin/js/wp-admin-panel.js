/**
 * Created by ra on 11/28/13.
 */


//init the variable if it's undefined, sometimes wordpress will not run the wp_footer hooks in wp-admin (in modals for example)
if (typeof td_get_template_directory_uri === 'undefined') {
    td_get_template_directory_uri = '';
}


/*! Backstretch - v2.0.4 - 2013-06-19
 * http://srobbin.com/jquery-plugins/backstretch/
 * Copyright (c) 2013 Scott Robbin; Licensed MIT */
(function(a,d,p){a.fn.backstretch=function(c,b){(c===p||0===c.length)&&a.error("No images were supplied for Backstretch");0===a(d).scrollTop()&&d.scrollTo(0,0);return this.each(function(){var d=a(this),g=d.data("backstretch");if(g){if("string"==typeof c&&"function"==typeof g[c]){g[c](b);return}b=a.extend(g.options,b);g.destroy(!0)}g=new q(this,c,b);d.data("backstretch",g)})};a.backstretch=function(c,b){return a("body").backstretch(c,b).data("backstretch")};a.expr[":"].backstretch=function(c){return a(c).data("backstretch")!==p};a.fn.backstretch.defaults={centeredX:!0,centeredY:!0,duration:5E3,fade:0};var r={left:0,top:0,overflow:"hidden",margin:0,padding:0,height:"100%",width:"100%",zIndex:-999999},s={position:"absolute",display:"none",margin:0,padding:0,border:"none",width:"auto",height:"auto",maxHeight:"none",maxWidth:"none",zIndex:-999999},q=function(c,b,e){this.options=a.extend({},a.fn.backstretch.defaults,e||{});this.images=a.isArray(b)?b:[b];a.each(this.images,function(){a("<img />")[0].src=this});this.isBody=c===document.body;this.$container=a(c);this.$root=this.isBody?l?a(d):a(document):this.$container;c=this.$container.children(".backstretch").first();this.$wrap=c.length?c:a('<div class="backstretch"></div>').css(r).appendTo(this.$container);this.isBody||(c=this.$container.css("position"),b=this.$container.css("zIndex"),this.$container.css({position:"static"===c?"relative":c,zIndex:"auto"===b?0:b,background:"none"}),this.$wrap.css({zIndex:-999998}));this.$wrap.css({position:this.isBody&&l?"fixed":"absolute"});this.index=0;this.show(this.index);a(d).on("resize.backstretch",a.proxy(this.resize,this)).on("orientationchange.backstretch",a.proxy(function(){this.isBody&&0===d.pageYOffset&&(d.scrollTo(0,1),this.resize())},this))};q.prototype={resize:function(){try{var a={left:0,top:0},b=this.isBody?this.$root.width():this.$root.innerWidth(),e=b,g=this.isBody?d.innerHeight?d.innerHeight:this.$root.height():this.$root.innerHeight(),j=e/this.$img.data("ratio"),f;j>=g?(f=(j-g)/2,this.options.centeredY&&(a.top="-"+f+"px")):(j=g,e=j*this.$img.data("ratio"),f=(e-b)/2,this.options.centeredX&&(a.left="-"+f+"px"));this.$wrap.css({width:b,height:g}).find("img:not(.deleteable)").css({width:e,height:j}).css(a)}catch(h){}return this},show:function(c){if(!(Math.abs(c)>this.images.length-1)){var b=this,e=b.$wrap.find("img").addClass("deleteable"),d={relatedTarget:b.$container[0]};b.$container.trigger(a.Event("backstretch.before",d),[b,c]);this.index=c;clearInterval(b.interval);b.$img=a("<img />").css(s).bind("load",function(f){var h=this.width||a(f.target).width();f=this.height||a(f.target).height();a(this).data("ratio",h/f);a(this).fadeIn(b.options.speed||b.options.fade,function(){e.remove();b.paused||b.cycle();a(["after","show"]).each(function(){b.$container.trigger(a.Event("backstretch."+this,d),[b,c])})});b.resize()}).appendTo(b.$wrap);b.$img.attr("src",b.images[c]);return b}},next:function(){return this.show(this.index<this.images.length-1?this.index+1:0)},prev:function(){return this.show(0===this.index?this.images.length-1:this.index-1)},pause:function(){this.paused=!0;return this},resume:function(){this.paused=!1;this.next();return this},cycle:function(){1<this.images.length&&(clearInterval(this.interval),this.interval=setInterval(a.proxy(function(){this.paused||this.next()},this),this.options.duration));return this},destroy:function(c){a(d).off("resize.backstretch orientationchange.backstretch");clearInterval(this.interval);c||this.$wrap.remove();this.$container.removeData("backstretch")}};var l,f=navigator.userAgent,m=navigator.platform,e=f.match(/AppleWebKit\/([0-9]+)/),e=!!e&&e[1],h=f.match(/Fennec\/([0-9]+)/),h=!!h&&h[1],n=f.match(/Opera Mobi\/([0-9]+)/),t=!!n&&n[1],k=f.match(/MSIE ([0-9]+)/),k=!!k&&k[1];l=!((-1<m.indexOf("iPhone")||-1<m.indexOf("iPad")||-1<m.indexOf("iPod"))&&e&&534>e||d.operamini&&"[object OperaMini]"==={}.toString.call(d.operamini)||n&&7458>t||-1<f.indexOf("Android")&&e&&533>e||h&&6>h||"palmGetResource"in d&&e&&534>e||-1<f.indexOf("MeeGo")&&-1<f.indexOf("NokiaBrowser/8.5.0")||k&&6>=k)})(jQuery,window);



/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {

    //IE8+ hack (loses focus on controller to remove the blue selected background), but still remain the select the same option blue background
    jQuery('.td-panel-dropdown').change(function(){
        jQuery(this).blur();
    });

    //add events to checkboxes controls
    td_panel_checkboxes();

    //add events to visual selectors orizontaly
    td_panel_visual_select_vo('.td-visual-selector-o-img');

    //add events to visual selectors verticaly
    td_panel_visual_select_vo('.td-visual-selector-v');

    //the navigation script
    panel_navigation();

    //add events to visual pulldown sidebars
    td_sidebar_pulldown();

    //add events to controlls to delete from the page (not from the database) the uploaded image
    td_delete_uploaded_display_image();

    //add evets to radio controlls
    td_panel_radio_control();

    //load the panel box script
    td_panel_box();

    //creates wpColorPiker
    td_create_color_piker();

    //ajax submit
    td_ajax_form_submit();

    //floating save button
    td_floating_save_button();

    //add events for click on sidebar position
    td_add_events_mce_for_sidebar();

    //resize the with of the tiny MCE when, on backend post add/edit page, sidebar position is set to left or right
    td_resize_tiny_mce_for_sidebar();

});

//function to add click events on all checkboxes
function td_panel_checkboxes() {
    jQuery('.td-checkbox, .td-checkbox-active').click(function(){
        if(jQuery(this).find(':first-child').hasClass('td-checbox-buton-active')){

            //change the background of the checkbox from active to inactive
            jQuery(this).removeClass('td-checkbox-active');

            //if checkbox is checked : add active class and write to hidden field the value of data-val-true
            jQuery(this).find(':first-child').removeClass('td-checbox-buton-active');
            jQuery('#' + jQuery(this).data('uid')).val(jQuery(this).data('val-false'));

        } else {

            //change the background of the checkbox from inactive to active
            jQuery(this).addClass('td-checkbox-active');

            //if checkbox is unchecked : remove active class and write to hidden field the value of data-val-false
            jQuery(this).find(':first-child').addClass('td-checbox-buton-active');
            jQuery('#' + jQuery(this).data('uid')).val(jQuery(this).data('val-true'));
        }
    });
}



//function to add click events on all visual selects (orizontaly and verticaly)
function td_panel_visual_select_vo(class_vso) {
    jQuery(class_vso).click(function(event){
        //prevent the implicit link (a) event
        event.preventDefault();

        //remove the active class from whatever child of this control has it
        jQuery('#' + jQuery(this).data('control-wrapper') + ' a  img').each(
            function() {
                jQuery(this).removeClass('td-visual-selector-active');
            }
        );

        //add value to hidden field
        jQuery('#' + jQuery(this).data('uid')).val(jQuery(this).data('option-value'));

        //and add active class to the current element
        jQuery(this).addClass('td-visual-selector-active');

    });
}


function panel_navigation() {
    jQuery('.td-panel-menu a').click(function(event){

        //if we don't have a data panel defined, do nothing (it is used on the back links)
        if (typeof jQuery(this).data('panel') == "undefined") {
            return;
        }

        event.preventDefault();

        //change the menu focus
        jQuery('.td-panel-menu-active').removeClass('td-panel-menu-active');
        jQuery(this).addClass('td-panel-menu-active');


        //change the panel
        jQuery('.td-panel-active').removeClass('td-panel-active');
        jQuery('#' + jQuery(this).data('panel')).addClass('td-panel-active');

        jQuery('#wpwrap').backstretch(jQuery(this).data('bg'), {fade: 800});


        jQuery(this).delay(500).queue(function(){
            td_ap_admin_done_resizing(); //recalculate the page size - used by the save button
            jQuery(this).dequeue();
        });

    });
}



//function to add click events on all pulldown sidebars
function td_sidebar_pulldown() {
    //add click event for pulldown
    jQuery('.td-selected-sidebar, .td-arrow-pulldown-sidebars').click(function(event) {

        //take the list id
        var list_id = jQuery(this).data('list-id');

        if(jQuery('#' + list_id).css('display') == 'block'){
            jQuery('#' + list_id).hide();
        } else {
            //hide all sidebars option lists
            td_hide_pulldown_sidebar_options();


            //get hight of sidebars list
            var list_hight = jQuery('#' + list_id).height();//numeric, no px

            //distance between elemen an the botom of the page = height of the document - distance of the element from the top
            var distance_of_elem_from_botom = jQuery(document).height() - jQuery(this).offset().top;

            //decide if we gonna show the list up or down based on her length
            if(distance_of_elem_from_botom < (list_hight + 125)){
                //lista incompleta
                jQuery('#' + list_id).css('border-top', '1px solid #e6e6e6').css('top', 1-list_hight);
            }else{
                //lista completa
                jQuery('#' + list_id).css('border-top', 0).css('top', 40);
            }

            jQuery('#' + list_id).show();
        }

        //stop propagation
        event.stopImmediatePropagation();
        return false;
    });

    //add click option to an element in the option list
    td_add_events_to_option_list_sidebar_pulldown();

    //add click option to delete an element from the option list
    td_add_events_to_delete_option_sidebar_pulldown();


    //add click option to add `new sidebar button`
    jQuery('.td-button-add-new-sidebar').click(function(e) {
        //this will hold every item in the sidebar list to be checked
        var list_var = '';

        //to add the new sidebar
        var add_new_sidebar = 1;

        //get the new sidebar name
        var id_new_sidebar_field = jQuery(this).data('field-new-sidebar');
        var new_sidebar_item = jQuery('#' + id_new_sidebar_field).val();

        if(new_sidebar_item.trim() == '') {
            alert('Please insert a name for your new sidebar!');

            //0 = not to add current sidebar
            add_new_sidebar = 0;
            return;
        }

        //check for duplicates sidebar names
        jQuery('#' + jQuery(this).data('sidebar-option-list') + ' .td-option-sidebar').each(function(){
            list_var = jQuery(this).attr('title');//jQuery(this).html();

            if(new_sidebar_item.trim() == list_var.trim()) {
                alert('This name is already used as a sidebar name. Please use another name!');
                add_new_sidebar = 0;

                //make the new sidebar field empty
                jQuery('#' + id_new_sidebar_field).val('');
            }
        });

        //if we can find the new name, call ajax and add new sidebar name
        if(add_new_sidebar == 1) {
            //make the new sidebar field empty
            jQuery('#' + id_new_sidebar_field).val('');

            //call ajax
            td_ajax_panel_sidebar_pulldown('td_ajax_new_sidebar', new_sidebar_item, replace_all('new_sidebar_', '', id_new_sidebar_field));
        }
    });


    //add click event on body to hide all siderbars pulldown lists
    jQuery(document).click(function(e) {
        if(e.target.className !== "td-selected-sidebar" && e.target.className !== "td-arrow-pulldown-sidebars" && e.target.className !== "td_new_sidebar_field") {
            td_hide_pulldown_sidebar_options();
        }
    });
}

//add click option to an element in the option list
function td_add_events_to_option_list_sidebar_pulldown() {
    jQuery('.td-option-sidebar').click(function(event) {

        var inputs_id_control = jQuery(this).data('area-dsp-id');

        //this is used to display the sidebar name
        var value_sidebar_selected = jQuery(this).html();

        //this is used to save the full length of the name
        var value_sidebar_selected_hidden = jQuery(this).attr('title');

        //write selected sidebar in the display area of the pull down
        jQuery('#' + inputs_id_control).text(value_sidebar_selected);
        jQuery('#' + inputs_id_control).attr('title', value_sidebar_selected_hidden);

        if(value_sidebar_selected == 'Default Sidebar') {
            value_sidebar_selected_hidden = '';
        }

        //write selected sidebar in the hidden field , used for saving
        jQuery('#hidden_' + inputs_id_control).val(value_sidebar_selected_hidden);

    });
}


//add click option to delete an element from the option list
function td_add_events_to_delete_option_sidebar_pulldown() {
    jQuery('.td-delete-sidebar-option').click(function(event) {

        if(confirm("Delete Sidebar?")) {
            var sidebar_key_to_del = jQuery(this).data('sidebar-key');
            td_ajax_panel_sidebar_pulldown('td_ajax_delete_sidebar', sidebar_key_to_del, '');
        }

        //hide pulldown sidebar options lists
        td_hide_pulldown_sidebar_options();

        //stop propagation
        event.stopImmediatePropagation();
        return false;
    });
}



//hide all pulldown sidebar options lists
function td_hide_pulldown_sidebar_options() {
    jQuery(".td-pulldown-sidebars-list").each(function(event){
        jQuery(this).hide();
    });
}


/**
 * call to server from modal window
 *
 * @param $action : action to execute
 * @param $item  : the item beeing inserted
 * @param $id_controller  : used when added a new sidebar, to be addet as selected value for that pulldown controller
 *
 */
function td_ajax_panel_sidebar_pulldown(action, item, id_controller) {
    jQuery.ajax({
        type: 'POST',
        url: td_ajax_url,
        data: {
            action: action,
            sidebar: item
        },
        success: function(data, textStatus, XMLHttpRequest){
            var td_data_object = jQuery.parseJSON(data); //get the data object

            //if the sidebar name exist in the td_option
            if(td_data_object.td_bool_value == 0){
                alert(td_data_object.td_msg);
            }
            //if succes the replace all pull down lists from the page
            if(td_data_object.td_bool_value == 1){
                if(td_data_object.value_insert != '') {
                    var data_id_list = '';
                    jQuery(".td_sidebars_for_replace").each(function(){
                        //take the list-data-id (data-controlelr-id is called in the page)
                        data_id_list = jQuery(this).data('controlelr-id');

                        //replace in the list returned by ajax the text xxx_replace_xxx with the list-data-id and inserts the list the into each sidebar pulldown controler
                        jQuery(this).html(replace_all('xxx_replace_xxx', data_id_list, td_data_object.value_insert));

                        //add events to visual pulldown sidebars
                        td_add_events_to_option_list_sidebar_pulldown();

                        //add click option to delete an element from the option list
                        td_add_events_to_delete_option_sidebar_pulldown();

                        //remove sidebar from controls that heve this sidebar selected
                        if(action == 'td_ajax_delete_sidebar') {
                            var id_area_dispaly_controler = jQuery(this).data('controlelr-id');
                            var val_area_display_controler = jQuery('#' + id_area_dispaly_controler).html();

                            //if a deleted sidebar is selected somewhere delete it from controller display area and hidden field
                            if(val_area_display_controler.trim() == td_data_object.value_to_march_del){
                                jQuery('#' + id_area_dispaly_controler).html('Default Sidebar');
                                jQuery('#hidden_' + id_area_dispaly_controler).val('');
                            }

                        }

                    });

                    //if user added new sidebar, select this new sidebar for the current puldown controller
                    if(action == 'td_ajax_new_sidebar') {
                        jQuery('#' + id_controller).html(td_data_object.value_selected);
                        jQuery('#hidden_' + id_controller).val(item.trim());
                    }

                }
            }


        },
        error: function(MLHttpRequest, textStatus, errorThrown){
            //console.log(errorThrown);
        }
    });
}



/**
 * function to replace all ocurences of a string in another string
 *
 * @param find
 * @param replace
 * @param str
 * @returns {a string will all ocurences of the `find` replaced}
 */
function replace_all(find, replace, str) {
    return str.replace(new RegExp(find, 'g'), replace);
}

function stopBubble(e){
    if(e && e.stopPropagation) {
        e.stopPropagation();
    } else {
        window.event.cancelBubble=true;
    }
}


//upload image
function td_upload_image(id_upload_field) {
    var button = '#' + id_upload_field + '_button';
    jQuery(button).click(function() {
        window.original_send_to_editor = window.send_to_editor;

        //open the modal window
        tb_show('', 'media-upload.php?referer=td_upload&amp;type=image&amp;TB_iframe=true&amp;post_id=0');

        //resizing the upload tb_window
        var document_height = jQuery(window).height();
        var upload_windpw_height = document_height;


        //alert(document_height);

        //resize the upload window
        upload_windpw_height = document_height - 200;

        jQuery("#TB_iframeContent").css("height", upload_windpw_height + 'px').css("width", "670px");

        jQuery("#TB_window").css("margin-left", '-300px').css("top", '29px').css("margin-top",'0px').css("visibility", "visible").css("width", "670px");

        window.send_to_editor = function(html) {
            img_link = jQuery('img', html).attr('src');
            if(typeof img_link == 'undefined') {
                img_link = jQuery(html).attr('src');
            }

            //take the image name and return it to parent window
            jQuery('#' + id_upload_field).val(img_link);

            jQuery('#' + id_upload_field + '_button_delete').removeClass('td-class-hidden');

            jQuery('#' + id_upload_field + '_display img').attr('src', img_link);

            //close the modal window
            tb_remove();

            //reset the send_to_editor function to its original state
            window.send_to_editor = window.original_send_to_editor;
        }
        return false;
    });

    //if the user paste a url into the id_upload_field
    jQuery('#' + id_upload_field).change(function(){
        jQuery('#' + id_upload_field + '_display img').attr('src', jQuery('#' +  id_upload_field).val());

        if(jQuery('#' +  id_upload_field).val() == '' ) {
            jQuery('#' + id_upload_field + '_button_delete').addClass('td-class-hidden');
        } else {
            jQuery('#' + id_upload_field + '_button_delete').removeClass('td-class-hidden');
        }
    });
}

//add events to controlls to delete from the page (not from the database) the uploaded image
function td_delete_uploaded_display_image() {
    jQuery('.td_delete_image_button').click(function() {

        if(confirm("Delete Image?")) {
            //take control id
            var control_id = jQuery(this).data('control-id');

            //hide the delete button
            jQuery(this).addClass('td-class-hidden');//.hide();

            //remove the link from image tag
            jQuery('#upd_img_id_' + control_id).attr('src', td_get_template_directory_uri + '/wp-admin/images/panel/no_img_upload.png');

            //empty the control input box
            jQuery('#' + control_id).val('');
        }
    });
}


//add evets to radio controlls
function td_panel_radio_control() {
    jQuery('.td-radio-control-option').click(function(event){
        //prevent the implicit link (a) event
        event.preventDefault();

        var wrapper_id = jQuery(this).data('control-id');

        //pass thru each option and remove the selected class
        jQuery('#' + wrapper_id + ' a').each(
            function() {
                jQuery(this).removeClass('td-radio-control-option-selected');
            }
        );

        //add the selected class only for the option that user cliked on
        jQuery(this).addClass('td-radio-control-option-selected');

        //add option value to hidden field
        jQuery('#hidden_' + wrapper_id).val(jQuery(this).data('option-value'));
    });
}

//creates wpColorPiker
function td_create_color_piker() {
    jQuery('.my-color-field').wpColorPicker();
}


//the panel box script (close show panel)
function td_panel_box() {
    jQuery('.td-box-header').click(function(event){

        //on categories (they have links in the title of the box), do not open/close the box instead go to that category
        if (jQuery(event.target).data('is-category-link') == 'yes') {
            return;
        }

        event.preventDefault();


        //do the open/close
        var td_box = jQuery('#' + jQuery(this).data('box-id'));

        if (td_box.hasClass('td-box-close')) {
            td_box.removeClass('td-box-close');
        } else {
            td_box.addClass('td-box-close');
        }



        jQuery('#wpwrap').backstretch("resize");



        jQuery(this).delay(500).queue(function(){
            td_ap_admin_done_resizing(); //recalculate the page size - used by the save button
            jQuery(this).dequeue();
        });


    });
}


//code for submiting the form with ajax
function td_ajax_form_submit() {

    var form = jQuery('#td_panel_big_form');

    jQuery('#td_button_save_panel').click(function(event){

        //show the div over the panel
        jQuery('.td_displaying_saving').css('display', 'block');
        jQuery('.td_wrapper_saving_gifs').css('display', 'block');
        jQuery('.td_displaying_saving_gif').css('display', 'block');

       //jQuery('.td_displaying_saving_gif img').css('bottom', '20%').css('left', '40%');

        jQuery.ajax({
            type: "POST",
            url: td_ajax_url,
            data: form.serialize(),
            success: function( response ) {
                //console.log( response );
                //alert('SAVED');
                jQuery('.td_displaying_saving').css('display', 'none');
                jQuery('.td_displaying_saving_gif').css('display', 'none');

                jQuery('.td_displaying_ok_gif').attr('src', td_get_template_directory_uri + '/wp-admin/images/panel/saved.gif').css('display', 'block');
                jQuery('.td_displaying_ok_gif').fadeOut(2400, function() {
                    jQuery('.td_displaying_ok_gif').attr('src', '');
                    jQuery('.td_wrapper_saving_gifs').css('display', 'none');
                });
            }
        });
    });
}




// floating button

var td_wp_admin_resize_timer_id;

var td_wp_admin_distance_to_bottom = 0;

jQuery(window).resize(function() {
    clearTimeout(td_wp_admin_resize_timer_id);
    td_wp_admin_resize_timer_id = setTimeout(td_ap_admin_done_resizing, 500);
});

//this function is called only once 500ms after the resize is over
function td_ap_admin_done_resizing(){
    td_wp_admin_distance_to_bottom = jQuery(document).innerHeight() - jQuery(window).height();

    td_reposition_the_button();
}


function td_reposition_the_button() {
    var distance_to_bottom =  td_wp_admin_distance_to_bottom - jQuery(this).scrollTop();

    if (distance_to_bottom <= 33) {
        jQuery('#td_button_save_panel').removeClass('td-panel-footer-floating');
    } else {
        jQuery('#td_button_save_panel').addClass('td-panel-footer-floating');
    }
}



function td_floating_save_button() {
    td_ap_admin_done_resizing();

    jQuery(window).scroll(function(){
        //console.log(td_wp_admin_distance_to_bottom);
        td_reposition_the_button();
    });
}


//add events for click on sidebar position to resize the width of the tiny MCE edit area
function td_add_events_mce_for_sidebar() {
    jQuery('.td-sidebar-position-default, .td-sidebar-position-left, .td-no-sidebar, .td-sidebar-position-right').click(function(e) {
        td_resize_tiny_mce_for_sidebar();
    });
}



//resize the with of the tiny MCE when, on backend post add/edit page, sidebar position is set to left or right
function td_resize_tiny_mce_for_sidebar() {

    //wait for a second for Tine MCE to insert the iframe
    var tmce = setTimeout(function(){

        //get the sidebar position in the current post page
        var sidebar_position = jQuery('input[name="td_post_theme_settings[td_sidebar_position]"]').val();
        //console.log('xxx');

        if(document.getElementById('content_ifr')) {
            if(sidebar_position == 'no_sidebar') {
                //alert('iframe gasit');
                jQuery("#content_ifr").contents().find("body").addClass("mceContentBody-max-width");
            } else {
                jQuery("#content_ifr").contents().find("body").removeClass("mceContentBody-max-width");
            }
        } else {
            //alert('iframe nu este gasit');
            clearTimeout(tmce);

            //call the function again
            td_resize_tiny_mce_for_sidebar();
        }
    }, 1000);
}