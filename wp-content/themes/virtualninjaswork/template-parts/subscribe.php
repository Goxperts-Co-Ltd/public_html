<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subscribe to our Newsletter</h2>
              <p>Subscribe to emails to learn and be updated of the latest learning and opportunities!</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <div class="subscribe-form">
                    <div class="form-group d-flex">
                     <?php 

                      $args = [
                        'contact' => array(
                          'email' => 'ferdinandlazarte20179@gmail.com',
                        ),
                        'groups' => '',
                        'life_stage'=> '',
                      ];

                      $subscribe = new \WeDevs\ERP\CRM\Subscription;
                     // \Subscription::get_instance();
                    // var_dump( create_subsciber( $args));die;
                     //echo do_shortcode('[weforms id="109"]')
                     
                     var_dump($subscribe->create_subsciber( $args));die;
                     ?>
                     <input type="text" class="form-control" placeholder="Enter email address">     
                      <input type="submit" value="Submit" class="submit px-3" name="submit">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   