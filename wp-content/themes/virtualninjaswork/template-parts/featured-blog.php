<?php
$args = array(
  'post_type' => 'post',
  'order'      => 'ASC',
  'category_name'  => 'featured',
  'post_status' => 'publish',
  );
$post_query = new WP_Query($args);
$post = $post_query->get_posts();
//hide if no post content
if(count($post) > 0){
?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2><span>Featured</span> Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach($post as $key => $item) :
            $author = get_author_name($item->post_author);
            $size = 'featured-post-img';
            $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($item->ID), $size );   
          ?>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="<?php echo get_permalink( $item);?>" class="block-20"
                        style="background-image: url(<?php  echo $featuredImg['0']; ?>);">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#"><span class="icon-calendar"></span>&nbsp;<?php echo get_the_date(); ?></a>
                            </div>
                            <div><a href="#"><?php echo $author; ?></a></div>
                            <div><a href="<?php echo get_permalink($item->ID).'#comments';?>" class="meta-chat"><span
                                        class="icon-chat"></span>&nbsp;<?php echo $item->comment_count; ?></a></div>
                        </div>
                        <h3 class="heading"><a
                                href="<?php echo get_permalink($item->ID);?>"><?php echo $item->post_title; ?></a></h3>
                    </div>
                </div>
            </div>
            <?php endforeach;wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php
}
?>