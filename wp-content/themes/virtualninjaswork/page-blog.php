<?php
/** 
 * Template Name: Blog Page
 */ 
get_header();
global $post;
$post_array = $post->to_array();
//get the banner image
$image = get_field( 'banner_image',$post_array['ID']);
$args = array(
    'post_type' => 'post',
    'order'      => 'ASC',
  //  'posts_per_page' => 3,
    'post_status' => 'publish',
    );
$post_query = new WP_Query($args);
$blogs = $post_query->get_posts();
//hide if no post content
if(count($blogs) > 0){
?>
<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $image['url']; ?>');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo get_home_url(); ?>">Home&nbsp;<i
                                class="ion-ios-arrow-forward"></i></a></span>Blog</p>
                <h2 class="mb-3 bread">Our Blog</h2>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <?php foreach($blogs as $key => $item) :
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


            <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
        </div>
</section>
<!-- featured blogs -->
<?php get_template_part( 'template-parts/featured-blog'); ?>
<!-- end of featured blogs -->

<!-- subscribe -->
<?php get_template_part( 'template-parts/subscribe'); ?>
<!-- end of subscribe -->
<?php
}
?>
<?php
get_footer();