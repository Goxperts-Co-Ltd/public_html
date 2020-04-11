<?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'featured',
        'order'      => 'ASC',
        'posts_per_page' => 5,
        'post_status' => 'publish',
        );
    $post_query = new WP_Query($args);
    if($post_query->have_posts() ) {
          echo ' <div class="sidebar-box ftco-animate">
          <h3 class="heading-3">Featured Blog</h3>';
    while($post_query->have_posts() ) {
    $post_query->the_post();
    $size = 'featured-post-img';
    $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
    $comment = get_comment_count($post->ID);   
?>
<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(<?php  echo $featuredImg['0']; ?>);"></a>
    <div class="text">
        <h3 class="heading"><a href="<?php echo get_permalink($post->ID);?>"><?php the_title(); ?></a></h3>
        <div class="meta">
            <div><span class="icon-calendar"></span>&nbsp;<?php echo get_the_date(); ?></div>
            <div><span class="icon-person"></span><?php echo strtoupper(get_the_author()); ?></div>
            <div><a href="<?php echo get_permalink($post->ID);?>#comments"><span
                        class="icon-chat"></span>&nbsp;<?php echo $comment['approved'];?></a></div>
        </div>
    </div>
</div>
<?php  } } ?>
</div>