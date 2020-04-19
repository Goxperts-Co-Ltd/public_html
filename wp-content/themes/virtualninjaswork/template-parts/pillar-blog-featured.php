<?php
$args = array(
  'post_type' => 'post',
  'order'      => 'ASC',
  'category_name'  => 'featured',
  'post_status' => 'publish',
  'empty'      => False,
  );
$post_query = new WP_Query($args);
$post = $post_query->get_posts();
//hide if no post content
if(count($post) > 0){
 foreach($post as $key => $item) :
            $author = get_author_name($item->post_author);
            $size = 'featured-post-img';
            $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($item->ID), $size );
            $desc = get_post_meta( $item->ID, '_yoast_wpseo_metadesc', true);   
?>
<div class="site-section">
    <div class="container">
        <div class="half-post-entry d-block d-lg-flex bg-light">
            <div class="img-bg" style="background-image: url('<?php  echo $featuredImg['0'];?>')"></div>
            <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="<?php echo get_permalink( $item);?>"><?php echo $item->post_title; ?></a></h2>
                <p class="mb-3"><?php echo $desc; ?></p>
                <div class="post-meta">
                    <span class="d-block"><a href="#"><?php echo $author; ?></a> in <a href="#">Food</a></span>
                    <span class="date-read"><?php echo get_the_date(); ?><span class="mx-1">&bullet;</span> 3 min read
                        <span class="icon-star2"></span></span>
                </div>

            </div>
        </div>
    </div>
</div>
<?php endforeach;wp_reset_query();?>
<?php
}
?>