<?php
global $post;
	$jobs_category = array(
		 'taxonomy' => 'job-category',
		 'hide_empty' => false,
		 'order'      => 'ASC'
	);
	$jobs_category_terms = get_terms($jobs_category);	
?>
<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Job Categories</span>
            <h2 class="mb-0">Top Categories</h2>
          </div>
        </div>
		<!--  start of job top categories -->
        <div class="row">		
		<!-- ROW 1  -->
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
				<li><a href="#"><?php echo $jobs_category_terms[0]->name; ?><br><span class="number"><?php echo $jobs_category_terms[0]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[1]->name; ?><br><span class="number"><?php echo $jobs_category_terms[1]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[2]->name; ?><br><span class="number"><?php echo $jobs_category_terms[2]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[3]->name; ?><br><span class="number"><?php echo $jobs_category_terms[3]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>

				</ul>
        	</div>
			<!-- end of ROW 1  -->
		<!-- ROW 2  -->
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
				<li><a href="#"><?php echo $jobs_category_terms[4]->name; ?><br><span class="number"><?php echo $jobs_category_terms[4]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[5]->name; ?><br><span class="number"><?php echo $jobs_category_terms[5]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[6]->name; ?><br><span class="number"><?php echo $jobs_category_terms[6]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[7]->name; ?><br><span class="number"><?php echo $jobs_category_terms[7]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
				</ul>
        	</div>
			<!-- end of ROW 2  -->
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
				<li><a href="#"><?php echo $jobs_category_terms[8]->name; ?><br><span class="number"><?php echo $jobs_category_terms[8]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[9]->name; ?><br><span class="number"><?php echo $jobs_category_terms[9]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[10]->name; ?><br><span class="number"><?php echo $jobs_category_terms[10]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[11]->name; ?><br><span class="number"><?php echo $jobs_category_terms[11]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
				</ul>
        	</div>
			<!-- ROW 3  -->
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
				<li><a href="#"><?php echo $jobs_category_terms[12]->name; ?><br><span class="number"><?php echo $jobs_category_terms[12]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[13]->name; ?><br><span class="number"><?php echo $jobs_category_terms[13]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[14]->name; ?><br><span class="number"><?php echo $jobs_category_terms[14]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		<li><a href="#"><?php echo $jobs_category_terms[15]->name; ?><br><span class="number"><?php echo $jobs_category_terms[15]->count; ?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
				</ul>
        	</div>
			<!-- end of ROW 3  -->
			<!--  end  of job top categories -->
        </div>
    	</div>
    </section>