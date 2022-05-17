<div class="footer_box">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسترسی سریع</span>
                        <?php wp_nav_menu(array(
                            'them_location'=>'footer1',
                            'depth'=>'1',
                        )); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسنه بندی موضوعی</span>
                        <?php wp_nav_menu(array(
                            'them_location'=>'footer2',
                            'depth'=>'1',
                        )); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسترسی سریع</span>
                        <?php wp_nav_menu(array(
                            'them_location'=>'footer3',
                            'depth'=>'1',
                        )); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <?php if(is_active_sidebar('footerwgh')){
                    dynamic_sidebar('footerwgh');
                } ?>
            </div>
            <div class="col-md-12 text-center">
                <div class="copy-r">
                    <span>
                        &copy; حقوق انتشار برای fidessoft محفوط است
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>