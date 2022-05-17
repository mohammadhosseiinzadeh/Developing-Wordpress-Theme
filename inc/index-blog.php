<?php 
$index_posts = new WP_Query(array(
    'post_type'=>'post',
    'posts_per_page'=>'3',
    'post_status'=>'publish',
));

if($index_posts->have_posts()){
?>



<div class="index-blog">
    <div class="container">
        <?php $i=0; while($index_posts->have_posts()){$index_posts->the_post(); ?>
            <?php if($i%2==0){ ?>
                <div class="row row1">
                    <div class="col-md-6">
                        <div class="desc">
                            <h4><?php the_title(); ?> </h4>
                            <div class="meta">
                                <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?> </span>
                                <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?></span>
                                <span><i class="fa fa-user"></i> <?php echo get_the_author(); ?></span>
                            </div>
                            <p><?php echo get_the_excerpt();?> </p>
                            <div class="text-left">
                                <a href="<?php the_permalink(); ?>" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                    </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pic">
                            <?php if(has_post_thumbnail()){ ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row row1">
                <div class="col-md-6">
                <div class="pic">
                    <?php if(has_post_thumbnail()){ ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
                    <?php } ?>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="desc">
                        <h4><?php the_title(); ?> </h4>
                        <div class="meta">
                            <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?> </span>
                            <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?></span>
                            <span><i class="fa fa-user"></i> <?php echo get_the_author(); ?></span>
                        </div>
                        <p><?php echo get_the_excerpt();?> </p>
                        <div class="text-left">
                            <a href="<?php the_permalink(); ?>" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            <?php }?>
        <?php $i++; } wp_reset_postdata(); ?>
    </div>
</div>
<?php } ?>
