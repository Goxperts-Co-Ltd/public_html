<?php
	global $post;
	$main_category = array(
		 'taxonomy' => 'main-category',
		 'hide_empty' => false
	);
	$main_category_terms = get_terms($main_category);
	$root_home = esc_url( home_url( '/?post_type=awsm_job_openings&jq=&main__category_spec=' ));		
?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="category-wrap">
    					<div class="row no-gutters"> 
						<!-- start of main categories -->
						<?php foreach($main_category_terms as $key => $category) :
						    if($key === 6){
							break;
							}			
							$count = $key;
							$title = $category->name;
							$open_positions =  $category->count;
							if($count == 1){
								$active = ' active';
							}elseif($count == 0){
								$border = ' no-border-left';
							}else{
								$active = '';
							}
							?>
    						<div class="col-md-2">
    							<div class="top-category text-center <?php echo $border; echo $active; ?>">
    								<h3><a href="<?php echo $root_home.$category->slug; ?>"><?php echo $title; ?></a></h3>
    								<span class="icon <?php echo $icon; ?>"></span>
    								<p><span class="number"><?php echo $open_positions; ?></span> <span>Open position</span></p>
    							</div>
    						</div>
						<?php endforeach;  wp_reset_query(); ?>
						<!-- END of main categories -->
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>