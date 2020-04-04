<?php
//erp company query - require ERP Plugins
$employee_args = array(
	'type' => 'employee'
);
$employees = erp_get_peoples($employee_args);

//loop if employee list available
if(count($employees) > 0){

?>
<section class="ftco-section ftco-candidates bg-primary">
    	<div class="container">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Candidates</span>
            <h2 class="mb-4">Latest Candidates</h2>
          </div>
        </div>
    	</div>
    	<div class="container">
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-candidates owl-carousel">
					<?php foreach($employees as $eid => $employee) :
					    //limit for 10 only only
						if($eid === 30){
					    break;
					  }
					  $name = $employee->first_name.' '.$employee->last_name;
					  if(empty($employee->country)){
						$address = $employee->created;
					  }else{
						$address = $employee->city.', '.$employee->country;
					  }	
					  $image_url = get_avatar_url($employee->email);			 
					?>
        			<div class="item">
		        		<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(<?php echo $image_url; ?>);"></div>
		        			<h2><?php echo $name; ?></h2>
		        			<span class="position"><?php echo $address; ?></span>
		        		</a>
        			</div>
        		    <?php endforeach; wp_reset_query();?>		        		
        		</div>
        	</div>
        </div>
    	</div>
	</section>
	
<?php
}//loop if employee is listed
?>