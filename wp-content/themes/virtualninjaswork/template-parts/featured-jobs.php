<?php
	global $post;
	$job_post = query_posts(array(
		'post_type' => 'awsm_job_openings',
		'orderyby' => 'ASC',
		'showposts' => 9
	));
	$awsm_filters   = get_option( 'awsm_jobs_filter' );
	$listing_specs  = get_option( 'awsm_jobs_listing_specs' );
?>
<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 pr-lg-5">
						<div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Recently Added Jobs</span>
		            <h2 class="mb-4">Featured Jobs Posts For This Week</h2>
		          </div>
		        </div>
						<div class="row">
						<!-- Latest Job Post -->
				  <?php foreach($job_post as $key => $latest_job) : 
							$post_title   =  $latest_job->post_title;
							$post_link    =  $latest_job->guid;
							$job_type     =  get_the_terms($latest_job->ID, 'job-type');
							$job_location =  get_the_terms($latest_job->ID, 'job-location');
							$job_company =  get_the_terms($latest_job->ID, 'job-company');			
					?>
							<div class="col-md-12 ftco-animate">
		            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
		              <div class="one-third mb-4 mb-md-0">
		                <div class="job-post-item-header align-items-center">
		                	<span class="subadge"><?php echo $job_type[0]->name;?></span>
		                  <h2 class="mr-3 text-black"><a href="<?php echo the_permalink($latest_job->ID);?>"><?php echo $post_title;?></a></h2>
		                </div>
		                <div class="job-post-item-body d-block d-md-flex">
		                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $job_company[0]->name;?></a></div>
		                  <div><span class="icon-my_location"></span> <span><?php echo $job_location[0]->name;?></span></div>
		                </div>
		              </div>

		              <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
		              	<div>
			                <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
			                	<span class="icon-heart"></span>
			                </a>
		                </div>
		                <a href="<?php echo the_permalink($latest_job->ID);?>" class="btn btn-primary py-2">Apply Job</a>
		              </div>
		            </div>
		          </div>
				  <?php endforeach;  wp_reset_query(); ?>
				  <!-- end of job post -->
		        </div>
		      </div>
		      <div class="col-lg-3 sidebar">
		        <div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Top Recruitments</h2>
		          </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="<?php bloginfo('stylesheet_directory');?>/images/company-1.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">Company Company</a></h3>
			        		<p><span class="number">500</span> <span>Open position</span></p>
			        	</div>
		        	</div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="<?php bloginfo('stylesheet_directory');?>/images/company-2.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">Facebook Company</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="<?php bloginfo('stylesheet_directory');?>/images/company-3.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">IT Programming INC</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="<?php bloginfo('stylesheet_directory');?>/images/company-4.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">IT Programming INC</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		      </div>
				</div>
			</div>
		</section>
