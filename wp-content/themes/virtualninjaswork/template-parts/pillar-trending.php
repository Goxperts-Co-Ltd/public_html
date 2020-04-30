<?php
 $current_post = $post->ID;
 $cat_name = get_the_category();
 $uncategorized = get_cat_ID('uncategorized');
 $categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
      ) );
?>

<div class="col-lg-4">
    <div class="section-title">
        <h2>Trending</h2>
    </div>
    <?php
               foreach( $categories as $category ){
                $cute = $category->term_id;
             }
    
        $args = array(
            'post_type' => 'post',
            'order'      => 'ASC',
            'posts_per_page' => 5,
            'post_status' => 'publish',
            'post__not_in' => array($current_post),
            'cat' => 0
            );
    
          $post_query = new WP_Query($args);
          if($post_query->have_posts() ) {
            $count = 0;
            while($post_query->have_posts() ) {
          $count++;
          if($count === 4){
          break;
          }
          $post_query->the_post();
          $size = 'featured-post-img';
          $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
          $comment = get_comment_count($post->ID);         
            
         ?>

    <div class="trend-entry d-flex">
        <div class="number align-self-start">0<?php echo $count;?></div>
        <div class="trend-contents">
            <h2><a href="<?php echo get_permalink($post->ID);?>"><?php the_title();?></a></h2>
            <div class="post-meta">
                <span class="d-block"><a href="#"><?php echo strtoupper(get_the_author()); ?></a> in <a href="#"></a></span>
                <span class="date-read"><?php echo get_the_date(); ?><span class="mx-1">&bullet;</span><span
                        class="icon-star2"></span></span>
            </div>
        </div>
    </div>
    <?php  } } ?>

    <!-- <p>
              <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
            </p> -->

</div>