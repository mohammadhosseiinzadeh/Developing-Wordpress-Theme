<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file://-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head();?>
</head>
<body>

<div class="top-wwrap">
    <div class="container">
        <div class="row">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="data">
                            <?php
                            $headers = get_theme_mod("headers",false);
                            foreach ($headers as $header) :
                                if (array_key_exists('text', $header) && !empty($header['text'])) :
                            ?>
                                    <span><i class="<?php echo (isset($header['icon']) && !empty($header['icon'])) ? $header['icon'] : null ?>"></i><?php echo $header['text'] ?></span>
                            <?php
                                endif;
                            endforeach;
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu">
                <div class="col-md-9">
                    <div class="menu-items">
                        <?php wp_nav_menu(array(
                            'them_location'=>'Main_menu',
                            'depth'=>'3',
                        )); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="logo-box">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-box text-center">
        <div class="row">
            <div class="col-md-12">
                <h1> قالب اختصاصی فیدس سافت </h1>
                <P>قالبی مناسب برای وب سایت های وبلاگی</P>
                <a href="#" class="site-btn">بیشتر بخوانید</a>
            </div>
        </div>
    </div>
</div>
