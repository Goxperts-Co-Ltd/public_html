<?php
 //pillar css and js for blog and blog posting only
 include( 'configure/pillar-css-js.php' );
get_header();
?>
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
<?php 
    $blog_content = get_field('blog_field'); 
    $size = 'featured-post-img';
    $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size );
    $author =  get_the_author();
    $author_desc = get_the_author_description();
    $image_author = get_avatar_url(get_the_author_ID());
?>


<div class="container">
    <div class="d-flex align-items-center">
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">

                <p class="mb-5">
                    <img src="<?php  echo $featuredImg[0]; ?>" alt="<?php the_title();?>" class="img-fluid">
                </p>
                <h2 class="mb-4">
                    <?php the_title();?>
                </h2>
                <div class="post-meta d-flex mb-5">
                    <div class="bio-pic mr-3">
                        <img src="<?php  echo $image_author; ?>" alt="<?php  echo strtoupper($author); ?>"
                            class="img-fluidid">
                    </div>
                    <div class="vcard">
                        <span class="d-block"><a href="#"><?php echo $author;?></a> in <a
                                href="#"><?php print_r(get_primary_category(get_the_ID()), true) ?></a></span>
                        <span class="date-read"><?php echo get_the_date(); ?><span class="mx-1">&bullet;</span><span
                                class="icon-star2"></span></span>
                    </div>
                </div>
                <?php 
                   $content = get_the_content($more_link_text, $strip_teaser);
                if($content){
                    echo $content;
                    //get blog tags
                    $tags = get_the_tags();
                    if( $tags){
                      echo '<div class="pt-5">';
                      foreach($tags as $key => $tag)
                      {  
                        echo '<a href="#">'.$tag->name.'</a>';   
                      }
                        echo '</div>';

                      }             
                 ?>

                <div class="pt-5 mt-5">
                    <!-- <h3 class="mb-5">6 Comments</h3> -->
                    <ul class="comment-list">
                        <?php comments_template(); ?>
                        </li>
                    </ul>
                    <!-- END comment-list -->

                    <?php
                }else{
                    echo '<p> No Blog Content!</p>';
                }
           ?>
                </div>
            </div>

              <!-- recent blog -->
              <?php get_template_part( 'template-parts/recents-post'); ?>
             <!-- end of recent blog -->

             
            
             <!-- recent blog -->
             <?php // get_template_part( 'template-parts/latest-open-jobs'); ?>
                <!-- end of recent blog -->      
    
</div>

<?php endwhile; else: ?>
<p>No matching entries found.</p>
<?php endif; ?>

<?php
get_footer();