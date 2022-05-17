<?php 
    function theme_css_js(){
        wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',[],'1.0.3');
        wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.css',[],'1.0.3');
        wp_enqueue_style('style',get_template_directory_uri().'/style.css',[],'1.0.8');
        wp_enqueue_script('js',get_template_directory_uri().'/js/bootstrap.js',['jquery'],'1.0.3',true);
    }
    
    add_action("wp_enqueue_scripts","theme_css_js");
    
?>