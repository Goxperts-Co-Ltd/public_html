<?php
$services_1 = get_field( 'services_1',$post_array['ID']);
$services_2 = get_field( 'services_2',$post_array['ID']);
$services_3 = get_field( 'services_3',$post_array['ID']);
$services_4 = get_field( 'services_4',$post_array['ID']);
?>
<section class="ftco-section services-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
               <?php echo $services_1;?>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-team"></span></div>
              <div class="media-body">
              <?php echo $services_2;?>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-career"></span></div>
              <div class="media-body">
              <?php echo $services_3;?>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employees"></span></div>
              <div class="media-body">
              <?php echo $services_4;?>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>