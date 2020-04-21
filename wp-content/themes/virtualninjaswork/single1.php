<?php
get_header();
?>
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
<?php 
    $blog_content = get_field('blog_field'); 
    $size = 'featured-post-img';
    $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size );
    $root = esc_url( home_url( '/search/' ));
    if(is_single() || is_archive()){
?>
<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php  echo $featuredImg[0]; ?>');"
    data-stellar-background-ratio="0.5">
    <div id="single" class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo get_home_url(); ?>">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a
                            href="<?php //print_r(get_primary_url(get_the_ID()), true); ?>"><?php print_r(get_primary_category(get_the_ID()), true) ?>&nbsp;<i
                                class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title();?></span></p>
                <h2 class="mb-3 bread"><?php the_title();?></h2>
            </div>
        </div>
    </div>
</div>
<?php
    }
    ?>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate">
                <?php 
                   $content = get_the_content($more_link_text, $strip_teaser);
                if($content){
                    echo $content;
                    //get blog tags
                    $tags = get_the_tags();
                    if( $tags){
                      echo ' <div class="tag-widget post-tag-container mb-5 mt-5">
                      <div class="tagcloud">';
                      foreach($tags as $key => $tag)
                      {  
                        echo '<a href="#" class="tag-cloud-link">'.$tag->name.'</a>';   
                      }
                        echo '</div>
                        </div>';

                      }             
                 ?>
                <!-- Authorship -->
                <?php get_template_part( 'template-parts/authorship'); ?>
                <!-- end of authorship -->


                <div class="pt-5 mt-5">
                    <!-- <h3 class="mb-5">6 Comments</h3> -->
                    <ul class="comment-list">
                        <?php comments_template(); ?>
                        </li>
                    </ul>
                    <!-- END comment-list -->


                </div>

                <?php
                }else{
                    echo '<p> No Blog Content!</p>';
                }
           ?>



            </div> <!-- .col-md-8 -->
            <div class="col-md-4 pl-md-5 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="<?php echo $root;?>" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="eg. Garphic. Web Developer"
                                value="<?php echo get_search_query();?>" name="jq">
                        </div>
                    </form>
                </div>

                <!-- recent blog -->
                <?php get_template_part( 'template-parts/latest-jobs'); ?>
                <!-- end of recent blog -->

                <!-- recent blog -->
                <?php get_template_part( 'template-parts/recent-blogs'); ?>
                <!-- end of recent blog -->

                <!-- featured blogs -->
                <?php get_template_part( 'template-parts/sidebar-featured'); ?>
                <!-- end of featured blogs -->


            </div>
        </div>
    </div>
</section> <!-- .section -->

<!-- subscribe -->
<?php get_template_part( 'template-parts/subscribe'); ?>
<!-- end of subscribe -->


<?php endwhile; else: ?>
<p>No matching entries found.</p>
<?php endif; ?>

<?php
get_footer();