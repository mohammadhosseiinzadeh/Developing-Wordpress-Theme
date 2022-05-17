<div class="col-md-3">
    <div class="search_box">
        <form action="<?php bloginfo('home');?>" method="get">
            <input type="text" name="s" placeholder="متن را وارد کنید ..">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <?php if(is_active_sidebar('latest_posts_wig')){
                dynamic_sidebar('latest_posts_wig');
            } ?>
    <?php if(is_active_sidebar('cats_wig')){
                dynamic_sidebar('cats_wig');
            } ?>
</div>