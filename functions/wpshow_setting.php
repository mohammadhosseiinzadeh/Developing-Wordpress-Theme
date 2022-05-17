<?php 

function wpshow_settings($wp_customize){

    $wp_customize->add_panel(
        "wpshow_settings",
        [
            "title"=>"تنظیمات قالب",
            "description"=>"در این قسمت میتوانید قالب خود را تنظیم کنید",
            "priority"=>101,
            'description_hidden' => false, 
        ]
    );
   
    $wp_customize->add_section(
        "header_section",
        [
            "title"=>"تنظیمات هدر",
            "description"=>"در این قسمت میتوانید هدر را تنظیم کنید",
            "panel"=>"wpshow_settings",
            "priority"=>1,
            'description_hidden' => true, 
        ]
    );

    
    for($i=0; $i<4 ; $i++){

        $wp_customize->add_setting(
            "headers[{$i}][icon]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
    
        $wp_customize->add_control(
            "headers[{$i}][icon]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
            array(
                'label' => __('آیکون'),
                'section' => 'header_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
                'priority' => 1,
                'type' => 'text',
                'input_attrs' => array( // اختیاری.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __('آیکون را وارد کنید'),
                ),
            )
        );


        $wp_customize->add_setting(
            "headers[{$i}][text]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
    
        $wp_customize->add_control(
            "headers[{$i}][text]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
            array(
                'label' => __('متن'),
                'section' => 'header_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
                'priority' => 1,
                'type' => 'text',
                'input_attrs' => array( // اختیاری.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __('متن را وارد کنید'),
                ),
            )
        );


   
     }
  

     $wp_customize->add_section(
        "services_section",
        [
            "title"=>"خدمات",
            "panel"=>"wpshow_settings",
            "priority"=>2,
            'description_hidden' => true, 
        ]
    );


    for($i=0; $i<4 ; $i++){

        $wp_customize->add_setting(
            "services[{$i}][image]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
    
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "services[{$i}][image]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
            array(
                'label' => __('تصویر'),
                'section' => 'services_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
                'priority' => 1,
                'button_labels' => array( // گزینه های شخصی سازی دکمه .
                    'select' => __('انتخاب تصویر'),
                    'change' => __('تغییر تصویر'),
                    'remove' => __('حذف'),
                    'default' => __('پیش فرض'),
                    'placeholder' => __('تصویری انتخاب نشده است'),
                    'frame_title' => __('انتخاب تصویر'),
                    'frame_button' => __('انتخاب تصویر'),
                )
            )
        ));
       


        $wp_customize->add_setting(
            "services[{$i}][title]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
    
        $wp_customize->add_control(
            "services[{$i}][title]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
            array(
                'label' => __('عنوان'),
                'section' => 'services_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
                'priority' => 1,
                'type' => 'text',
                'input_attrs' => array( // اختیاری.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __('عنوان را وارد کنید'),
                ),
            )
        );

        $wp_customize->add_setting(
            "services[{$i}][desc]", // آیدی تنظیمات که قرار است با این اسم در دیتا بیس ذخیره شود
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
    
        $wp_customize->add_control(
            "services[{$i}][desc]", // آیدی تنظیماتی که این کنترل به آن اتصال دارد
            array(
                'label' => __('توضیحات'),
                'section' => 'services_section', // ایدی سکشنی که میخواهیم این کنترل در آن نمایش داده شود
                'priority' => 1,
                'type' => 'textarea',
                'input_attrs' => array( // اختیاری.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __('توضیحات را وارد کنید'),
                ),
            )
        );


   
     }

  

  

}
add_action("customize_register","wpshow_settings");