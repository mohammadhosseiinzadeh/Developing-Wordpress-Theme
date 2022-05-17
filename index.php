<?php get_header(); ?>
<?php get_template_part("inc/page", "baner"); ?>
    <div class="container">
        <div class="row">
            <div class="page-content index-blog">
                <span class="page_title"><i class="fa fa-angle-left"></i>
                <?php if(is_home()){
                    echo "اخبار و مقالات";
                }
                elseif(is_category()){
                    echo single_cat_title();
                }
                elseif(is_tag()){
                    echo single_tag_title();
                }
                elseif(is_search()){
                    echo "نتایج جستوجو برای عبارت  : ";
                    echo $_GET['s'];
                }
                ?>
                </span>
        <?php if(have_posts()){ ?>
        <?php $i=0; while(have_posts()){the_post(); ?>
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
        <?php $i++; } wp_reset_postdata(); } else { echo"متاسفانه نتیجه ای یافت نشد!"; } ?>
                <div class="col-md-12 text-center">
                    <div class="pagination-box">
                        <?php echo paginate_links(); ?>
                    </div>
            </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>