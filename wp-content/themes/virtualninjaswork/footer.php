

<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">VirtualNinjas.Work</h2>
              <!-- <p>Virtual Ninjas, you top freelance hub! Gathering together expert and reliable freelancers, and agencies to collaborate to businesses that offers exemplary opportunities.</p> -->
              <p><img src="<?php bloginfo('stylesheet_directory');?>/assets/logo/logos.PNG" style="width:200px;height:122px;opacity: 0.4;" alt="virtual Ninjas"></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
               <!-- Social Media footer Menu -->
               <?php  wp_get_social_media_footer_menu_array('Social Media') ?>
               <!-- end of Social Media footers -->
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
               <?php  
                $home = get_home_url();
                echo '
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                      <li><a href="'.$home.'/" class="pb-1 d-block">Home</a></li>
                      <li><a href="'.$home.'/job-openings/" class="pb-1 d-block">Browse Jobs</a></li>
                      <li><a href="'.$home.'/blog/" class="pb-1 d-block">Blog</a></li>
                      <li><a href="'.$home.'/contact-us/" class="pb-1 d-block">Contact</a></li>
                    </ul>
                  </div>
                </div>
                ';     
               ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">     
              <?php 
               $user = wp_get_current_user();
                if(in_array('hrm_employee',$user->roles) || in_array('employee',$user->roles) ){

                  echo '
                  <h2 class="ftco-heading-2">Candidate</h2>
                  <ul class="list-unstyled">
                  ';
                  
                  wp_get_candidate_footer_menu_array('Candidate');

                }

                if(in_array('hr',$user->roles) || in_array('hrm_manager',$user->roles) ){

                  echo '
                  <h2 class="ftco-heading-2">Employers</h2>
                  <ul class="list-unstyled">
                  ';
                  
                  wp_get_employers_footer_menu_array('Employers');

                }else{
                  echo '
                  <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                      <h2 class="ftco-heading-2">Menu</h2>
                      <ul class="list-unstyled">
                        <li><a href="'.$home.'/job-openings" class="pb-1 d-block">Job Listing</a></li>
                        <li><a href="'.$home.'/" class="pb-1 d-block">Employer Listing</a></li>
                        <li><a href="'.$home.'/" class="pb-1 d-block">Privacy Policy</a></li>
                        <li><a href="'.$home.'/" class="pb-1 d-block">Terms & Conditions</a></li>
                      </ul>
                    </div>
                  </div>
                  ';
                }          
               ?>        
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Account</h2>
              <ul class="list-unstyled">
               <?php 
               //account restriction and set cookie session
               echo candidate_info();     
               ?>
              </ul>
            </div>
          </div>
          <!-- Featured jobs and companies -->
			<?php get_template_part( 'template-parts/company'); ?>
		      <!-- end of featured jobs -->
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Virtual Ninjas</p>
          </div>
        </div>
      </div>
    </footer>
 
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php wp_footer(); ?>
</body>
</html>
