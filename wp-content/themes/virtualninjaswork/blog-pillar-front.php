<?php
/** 
 * Template Name: Blog Pillar Page
 */ 

 //pillar css and js for blog and blog posting only
include( 'configure/pillar-css-js.php' );
get_header();
?>
<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

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
  

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3>Editor's Pick</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="post-entry-1">
                            <a href="post-single.html"><img
                                    src="<?php bloginfo('stylesheet_directory');?>/assets/pillar/images/img_h_1.jpg"
                                    alt="Image" class="img-fluid"></a>
                            <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium
                                neque, voluptatum quam quibusdam.</p>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                        class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="post-entry-2 d-flex bg-light">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/pillar/images/img_v_1.jpg')">
                            </div>
                            <div class="contents">
                                <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                            class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>

                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/pillar/images/img_v_2.jpg')">
                            </div>
                            <div class="contents">
                                <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                            class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>

                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail"
                                style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/pillar/images/img_v_3.jpg')">
                            </div>
                            <div class="contents">
                                <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                            class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title">
                    <h3>Trending</h3>
                </div>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start">01</div>
                    <div class="trend-contents">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start">02</div>
                    <div class="trend-contents">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start">03</div>
                    <div class="trend-contents">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start">04</div>
                    <div class="trend-contents">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <p>
                    <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
                </p>

            </div>
        </div>
    </div>
</div>
<!-- END section -->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <h3>Recent News</h3>
                </div>
                <div class="post-entry-2 d-flex">
                    <div class="thumbnail order-md-2"
                        style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/pillar/images/img_h_4.jpg')">
                    </div>
                    <div class="contents order-md-1 pl-0">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus
                            praesentium neque, voluptatum quam quibusdam.</p>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="post-entry-2 d-flex">
                    <div class="thumbnail order-md-2"
                        style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/pillar/images/img_h_3.jpg')">
                    </div>
                    <div class="contents order-md-1 pl-0">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus
                            praesentium neque, voluptatum quam quibusdam.</p>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="post-entry-2 d-flex">
                    <div class="thumbnail order-md-2"
                        style="background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/pillar/images/img_h_3.jpg')">
                    </div>
                    <div class="contents order-md-1 pl-0">
                        <span class="caption mb-4 d-block">Editor's Pick</span>
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus
                            praesentium neque, voluptatum quam quibusdam.</p>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="section-title">
                    <h3>Popular Posts</h3>
                </div>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start">01</div>
                    <div class="trend-contents">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start">02</div>
                    <div class="trend-contents">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="trend-entry d-flex">
                    <div class="number align-self-start">03</div>
                    <div class="trend-contents">
                        <h2><a href="">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <div class="trend-entry d-flex pl-0">
                    <div class="number align-self-start">04</div>
                    <div class="trend-contents">
                        <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>

                <p>
                    <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <ul class="custom-pagination list-unstyled">
                    <li><a href="#">1</a></li>
                    <li class="active">2</li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();