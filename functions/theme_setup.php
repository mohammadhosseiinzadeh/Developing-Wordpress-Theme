<?php 
    function theme_setup(){

        add_theme_support('title-tag');
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');

        register_nav_menus(array(
            'Main_menu'=>'منوی اصلی',
            'footer1'=>'منوی فوتر 1',
            'footer2'=>'منوی فوتر 2',
            'footer3'=>'منوی فوتر 3',

    ));
    }

    add_action("after_setup_theme","theme_setup");

?>