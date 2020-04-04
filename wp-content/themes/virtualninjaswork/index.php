<?php
get_header();
?>

<div class="hero-wrap img" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/images/bg_1.jpg); ">
      <div class="overlay"></div>
      <div class="container">
      	<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
	        <div class="col-md-10 d-flex align-items-center ftco-animate">
	        	<div class="text text-center pt-5 mt-md-5">
	        		<p class="mb-4">Find Job, Employment, and Career Opportunities</p>
	            <h1 class="mb-5">The Eassiest Way to Get Your New Job</h1>					
				<!-- hero slider -->
				<?php get_template_part( 'template-parts/hero'); ?>
				<!-- end of slider -->
			        </div>
							<div class="ftco-search my-md-5">
								<div class="row">
			            <!-- search candidate -->
						<?php get_template_part( 'template-parts/search-candidate'); ?>
						<!-- end of search -->
			        </div>
	          </div>
	        </div>
	    	</div>
      </div>
    </div>

    <!-- Job categories -->
		<?php get_template_part( 'template-parts/job-categories'); ?>
	<!-- end of Job Categores -->

    <!-- Top Categories -->
	<?php get_template_part( 'template-parts/top-categories'); ?>
	<!-- end of top categories -->

	 <!-- services section -->
	 <?php get_template_part( 'template-parts/services'); ?>
	<!-- services -->  

	<!-- Featured jobs and companies -->
	<?php get_template_part( 'template-parts/featured-jobs'); ?>
	<!-- end of featured jobs -->

	<!-- Testimonials -->
	<?php //get_template_part( 'template-parts/testimonials'); ?>
	<!-- end of testimonials -->

	<!-- candidates -->
	<?php //get_template_part( 'template-parts/candidates'); ?>
	<!-- end of candidates -->

	<!-- blogs -->
	<?php get_template_part( 'template-parts/blog'); ?>
	<!-- end of blogs -->

	<!-- subscribe -->
	<?php get_template_part( 'template-parts/subscribe'); ?>
	<!-- end of subscribe -->


<?php
get_footer();
