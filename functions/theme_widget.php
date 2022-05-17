<?php 
    function theme_widgets(){

        register_sidebar(array(
            "id"=>"footerwgh",
            "name"=>"ابزارک فوتر",
            "description"=>"ابزارک برای درج توضیحات در فوتر",
            "before_widget"=>"<div class='desc_footer footer-menu'>",
            "after_widget"=>"</div>",
            "before_title"=>"<span class='title'>",
            "after_title"=>"</span>",
        ));
    
        register_sidebar(array(
            "id"=>"latest_posts_wig",
            "name"=>"ابزارک نمایش آخرین مطالب",
            "description"=>"نمایش آخرین مطالب سایت در صفحه جزئیات مطلب",
            "before_widget"=>"<div class='side_bx'>",
            "after_widget"=>"</div>",
            "before_title"=>"<span class='title'>",
            "after_title"=>"</span>",
        ));
    
        register_sidebar(array(
            "id"=>"cats_wig",
            "name"=>"ابزارک نمایش  دسته بندی های سایت",
            "description"=>"ابزارک برای نمایش دسته بندی های مطالب سایت در صفحه جزییات مطلب ",
            "before_widget"=>"<div class='side_bx'>",
            "after_widget"=>"</div>",
            "before_title"=>"<span class='title'>",
            "after_title"=>"</span>",
        ));
    }
    
    add_action("widgets_init","theme_widgets");

?>