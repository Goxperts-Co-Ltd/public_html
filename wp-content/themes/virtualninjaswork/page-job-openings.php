<?php
get_header();
?>
<?php
global $post;
$post_array = $post->to_array();
//get the banner image
$image = get_field( 'banner_image',$post_array['ID']);
?>
<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $image['url']; ?>');"
    data-stellar-background-ratio="0.5">
    <div id="job-opens" class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <h2 class="mb-3 bread">Job Listing</h2>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-lg-4">
                <div class="row">
                    <!-- start search -->
                    <?php echo do_shortcode('[awsmjobs]') ?>
                    <!-- end of search filters -->
                </div>
            </div>
            <div class="col-lg-3 sidebar">
                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <!-- start -->
                    <?php get_template_part( 'template-parts/latest-jobs'); ?>
                    <!-- end -->
                </div>
                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <!-- start -->
                    <?php get_template_part( 'template-parts/latest-company'); ?>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe -->
<?php get_template_part( 'template-parts/subscribe'); ?>
<!-- end of subscribe -->

<?php
get_footer();