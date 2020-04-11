<?php
get_header();
?>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-lg-4">
                <div class="row" id="filter">
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
                <div class="sidebar-box bg-white p-4 ftco-animate">
                <!-- recent blog -->
                <?php get_template_part( 'template-parts/recent-blogs'); ?>
                <!-- end of recent blog -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe -->
<?php //get_template_part( 'template-parts/subscribe'); ?>
<!-- end of subscribe -->

<?php
get_footer();