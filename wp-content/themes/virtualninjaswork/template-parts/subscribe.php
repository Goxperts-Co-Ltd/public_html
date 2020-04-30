<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subscribe to our Newsletter</h2>
              <p>Subscribe to emails to learn and be updated of the latest learning and opportunities!</p>   
              <?php 
                if (isset($_POST['subscribeSubmit'])) {
                  $email = $_POST['subscribeEmail']; 
                  $args = ['form_id' => 109 ];
                  $fields = [
                    'email_address_9377650294' => $email
                  ];   
                  $subscribed =  weforms_insert_entry($args, $fields );
                  var_dump($subscribed);
                }
                  ?>   
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                <form action="" method="POST" class="subscribe-form">
                  <div class="subscribe-form">
                    <div class="form-group d-flex">
                     <input type="text" class="form-control" placeholder="Enter email address" id="subscribeEmail" name="subscribeEmail">     
                      <input type="submit" value="Submit" class="submit px-3" name="subscribeSubmit">
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   