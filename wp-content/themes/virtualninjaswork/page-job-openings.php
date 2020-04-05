<?php
get_header();
?>
<?php
global $post;
$post_array = $post->to_array();
//get the banner image
$image = get_field( 'banner_image',$post_array['ID']);
?>
<div class="hero-wrap hero-wrap-2"
    style="background-image: url('<?php echo $image['url']; ?>');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <h1 class="mb-3 bread">Job Listing</h1>
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
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3 class="heading-3">Jobs</h3>
                            <li><a href="#">Graphic Designer <span>(12)</span></a></li>
                            <li><a href="#">Visual Assistant <span>(22)</span></a></li>
                            <li><a href="#">Programing <span>(37)</span></a></li>
                            <li><a href="#">Office Admin <span>(42)</span></a></li>
                            <li><a href="#">Web Designer <span>(14)</span></a></li>
                            <li><a href="#">Language <span>(140)</span></a></li>
                        </div>
                    </div>
                    <!-- end -->
                </div>
                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <!-- start -->
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3 class="heading-3">Company</h3>
                            <li><a href="#">Graphic Designer</a></li>
                            <li><a href="#">Visual Assistant</a></li>
                            <li><a href="#">Programing </a></li>
                            <li><a href="#">Office Admin</a></li>
                            <li><a href="#">Web Designer</a></li>
                            <li><a href="#">Language</a></li>
                        </div>
                    </div>
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