<?php
class td_set_homepage_loop_filter {

    public function __construct()  { }

    /**
     *  setting the array that will be used for homepage filter
     * @return array
     */
    function homepage_filter_get_map () {

        //get the generic filter array
        $generic_filter_array = td_generic_filter_array::get_array();

        //remove items from array
        $offset = 0;
        foreach ($generic_filter_array as $field_array) {
            if ($field_array['param_name'] == "hide_title") {
                array_splice($generic_filter_array, $offset, 1);
            }
            $offset++;
        }


        //add custom filter fields to generic filter array
        array_push ($generic_filter_array,
            array(
                "param_name" => "limit",
                "type" => "textfield",
                "value" => '',
                "heading" => __("Posts per page:", TD_THEME_NAME),
                "description" => "ex: 8; a integer number, used to display the number of posts per page",
                "holder" => "div",
                "class" => ""
            )
        );

        //add the show featured posts in the loop setting
        array_push ($generic_filter_array,
            array(
                "param_name" => "show_featured_posts",
                "type" => "dropdown",
                "value" => array('- Show featured posts -' => '', 'Hide featured posts' => 'hide_featured'),
                "heading" => __("Featured posts:", TD_THEME_NAME),
                "description" => "",
                "holder" => "div",
                "class" => ""
            )
        );

        //add the show featured posts in the loop setting
        array_push ($generic_filter_array,
            array(
                "param_name" => "offset",
                "type" => "textfield",
                "value" => '',
                "heading" => __("Offset:", TD_THEME_NAME),
                "description" => "ex: 8; a integer number, used to display the number of posts per page",
                "holder" => "div",
                "class" => ""
            )
        );


        return array(
            "name" => __("Templates with articles", TD_THEME_NAME),
            "base" => "",
            "class" => "",
            "controls" => "full",
            "category" => "",
            'icon' => '',
            "params" => $generic_filter_array
        );

    }

}//end class

$obj_td_homepage_filter_add = new td_set_homepage_loop_filter;

//instantiates the filter render object, passing metabox object
$obj_homepage_filter = new td_set_homepage_loop_filter_render($mb);

//call to create the filter
$obj_homepage_filter->td_render_homepage_loop_filter($obj_td_homepage_filter_add->homepage_filter_get_map());
