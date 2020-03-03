
<div class="sidebar-box ftco-animate">
              <h3 class="heading-3">Recent Blog</h3>
              <?php
    
    $current_post = $post->ID;
    $cat_name = get_the_category();
    $uncategorized = get_cat_ID('uncategorized');
    $categories = get_categories( array(
       'orderby' => 'name',
       'order'   => 'ASC',
     //  'hide_empty' => 1
     //  'exclude' => $uncategorized
         ) );

         foreach( $categories as $category ){
            $cute = $category->term_id;
         }

    $args = array(
        'post_type' => 'post',
        'order'      => 'ASC',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post__not_in' => array($current_post),
        'cat' => 0
        );

      $post_query = new WP_Query($args);
      if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
      $post_query->the_post();
      $size = 'featured-post-img';
      $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
     
?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php  echo $featuredImg['0']; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php echo get_permalink($post->ID);?>"><?php the_title(); ?></a></h3>
                  <div class="meta">
                    <div><span class="icon-calendar"></span>&nbsp;<?php echo get_the_date(); ?></div>
                    <div><span class="icon-person"></span><?php echo strtoupper(get_the_author()); ?></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
          </div>
          <?php  } } ?>
</div>