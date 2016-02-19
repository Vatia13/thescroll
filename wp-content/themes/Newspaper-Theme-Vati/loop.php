<?php


/**
 * If you are looking for the loop that's handling the single post page (single.php), check out loop-single.php
 **/


global $loop_module_id, $loop_sidebar_position, $cur_cat_obj;

$td_template_layout = new td_template_layout($loop_sidebar_position);



if ($loop_module_id == 1 or $loop_module_id == 7 or $loop_module_id == 8 or $loop_module_id == 9 or $loop_module_id == 'search') {
    //disable the grid for mod 1 and 7 and search
    $td_template_layout->disable_output();
}

if (have_posts()) {
    $i = 0;

    while ( have_posts() ) : the_post();

        $i++;
        echo $td_template_layout->layout_open_element();
        switch ($loop_module_id) {
            case '1':
                $td_mod = new td_module_1($post,$i);
                break;
            case '2':
                $td_mod = new td_module_2($post);
                break;
            case '3':
                $td_mod = new td_module_3($post);
                break;
            case '4':
                $td_mod = new td_module_4($post);
                break;
            case '5':
                $td_mod = new td_module_5($post);
                break;
            case '6':
                $td_mod = new td_module_6($post);
                break;
            case '7':
                $td_mod = new td_module_7($post);
                break;
            case '8':
                $td_mod = new td_module_8($post);
                break;
            case '9':
                $td_mod = new td_module_9($post);
                break;
            case 'search':
                $td_mod = new td_module_search($post);
                break;
            default:
                $td_mod = new td_module_1($post,$i);
                break;
        }
        echo $td_mod->render();


        echo $td_template_layout->layout_close_element();
        $td_template_layout->layout_next();
    endwhile; //end loop
    if(is_search()){
        $data_type = stripslashes_deep($_GET['s']);
    }else{
        $data_type = '';
    }
    if(is_category()){
        $cat_type = $cur_cat_obj->name;
    }else{
        $cat_type = '';
    }
    echo ($loop_module_id == 1) ? '</div><div class="load-more button" data-search="'.$data_type.'" data-cat="'.$cat_type.'"><div class="loading-gif" data-image="'.get_template_directory_uri().'/images/AjaxLoader.gif"></div><button data-url="'.site_url().'/wp-admin/admin-ajax.php">'.translate("Load More").'</button></div>' : '';
    echo $td_template_layout->close_all_tags();


} else {
    //no posts
    echo td_page_generator::no_posts();
}


