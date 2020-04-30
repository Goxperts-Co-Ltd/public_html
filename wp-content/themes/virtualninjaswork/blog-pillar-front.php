<?php
/** 
 * Template Name: Blog Pillar Page
 */ 

 //pillar css and js for blog and blog posting only
include( 'configure/pillar-css-js.php' );
get_header();
?>
    <div class="container">
        <div class="d-flex align-items-center">

            <div class="mr-auto">


            </div>

        </div>
    </div>

</div>

</div>
<div class="site-section py-0">
      <div class="owl-carousel hero-slide owl-style">

        
<!-- featured blogs -->
<?php get_template_part( 'template-parts/pillar-blog-featured'); ?>
      <!-- end of featured blogs -->


      </div>
    </div>
  
<!-- featured blogs -->
<?php get_template_part( 'template-parts/blog-featured'); ?>
<!-- end of featured blogs -->

<!-- recent blogs -->
<?php //get_template_part( 'template-parts/recent-pillar'); ?>
<!-- end of recent blogs -->

<?php
get_footer();