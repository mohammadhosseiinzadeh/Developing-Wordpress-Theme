<?php 
    $posts_cats = wp_get_post_categories( get_the_ID(), array( 'fields' => 'ids' ) );

    $releated_posts = new WP_Query(array(
        'post_type'=>'post',
        'posts_per_page'=>'3',
        'post_status'=>'publish',
        'category__in'=>$posts_cats,
        'post__not_in' =>array($post->ID),
        'orderby' => 'rand'
    ));

    if($releated_posts->have_posts()){
?>

<div class="releated_posts">
    <span class="releated_posts_span">طراحی اختصاصی مطالب مرتبط بدون استفاده از افزونه</span>
    <?php while($releated_posts->have_posts()){ $releated_posts->the_post(); ?>
        <a href="<?php the_permalink(); ?>"><h5><i class="fa fa-angle-left"></i><?php the_title(); ?></h5></a>
    <?php } wp_reset_postdata(); ?>
</div>

<?php } ?>