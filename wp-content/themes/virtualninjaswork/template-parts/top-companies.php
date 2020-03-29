<?php 
//erp company query - require ERP Plugins
$company_type = array(
	'type' => 'company'
);
$contact_companies = erp_get_peoples($company_type);
?>	
<div class="col-lg-3 sidebar" id="list-companies">
		        <div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Top Recruitments</h2>
		          </div>
		        </div>
				<?php foreach($contact_companies as $key => $company) :
				      //limit for 4 post only
				      if($key === 4){
					    break;
					  }
				      //ERP company Website
				      if($company->website == ''){
                        $url = '';
					  }else{
						$url = 'href="https://'.$company->website.'"';
					  }
                      //ERP Image url
					  $image_url = erp_crm_get_avatar_url($company->id);
					  //erp company query - require AWSM Job Listing Plugins
					  $company_count = array(
						'taxonomy' => 'job-company',
						'name' => $company->first_name				
					   );
					  $company_count_post_job = get_terms($company_count);
					  if($company_count_post_job[0]->count == ''){
                        $com_job_open = 0 ;
					  }else{
                        $com_job_open = $company_count_post_job[0]->count;
					  }				  
					?>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">					
			        	<a <?php echo $url; ?> class="company-wrap"><img src="<?php echo  $image_url;?>" class="img-fluid" alt="<?php echo $company->first_name; ?>"></a>
			        	<div class="text p-3">
			        		<h3><a <?php echo $url; ?> rel="nofollow" target="_blank"><?php echo $company->first_name; ?></a></h3>
			        		<p><span class="number"><?php echo $com_job_open;?></span> <span>Open position</span></p>
			        	</div>
		        	</div>
		        </div>
				<?php endforeach;wp_reset_query(); ?>   
		      </div>