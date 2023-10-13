<?php
//Includes


//Hoocks
//carregar arquivos css e js
function de_scripts(){
    
    //Chamada

    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js');
    wp_enqueue_script('browser', get_template_directory_uri().'/assets/js/browser.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/breakpoints.min.js');
    wp_enqueue_script('util', get_template_directory_uri().'/assets/js/util.min.js');
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.min.js');

}


add_action('wp_enqueue_scripts', 'de_scripts');

//Adicionar ou liberar recursos no wp
function de_setup_support(){
    add_theme_support('title-tag'); //chama o título automaticamente
    add_theme_support('custom_logo');
    add_theme_support('post_thumbnails');

    register_nav_menu('primary', __('Menu Principal', 'temaparaestudo'));


}
add_action('after_setup_theme' , 'de_theme_support')

?>