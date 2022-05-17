<?php get_header(); ?>
<?php get_template_part("inc/page", "baner"); ?>
<div class="container">
    <div class="row">
        <div class="page-content single_content">
        <?php while(have_posts()){ the_post(); ?>
            <div class="col-md-9">
                <div class="content_bx">
                <?php if(has_post_thumbnail()){ ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
                    <?php } ?>
                    <div class="meta">
                        <span><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>
                        <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?> نظر </span>
                        <span><i class="fa fa-archive"></i>  <a > <?php the_category(" , ")?> </a></span>
                    </div>
                    <h1><?php the_title(); ?> </h1><hr>
                    <div class="p_text">
                        <?php the_content(); ?>
                    </div>
                    <div class="post_tags">
                        #
                        <?php the_tags(); ?>
                    </div>
                    <div class="comments_box">
                        <?php comments_template(); ?>
                    </div>
                </div>
            </div>
        <?php }?>
        <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>