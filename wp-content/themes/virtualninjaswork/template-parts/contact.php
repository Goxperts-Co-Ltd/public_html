<?php
global $post;
$post_array = $post->to_array();
//get the banner image
$image = get_field( 'banner_image',$post_array['ID']);
$company = new \WeDevs\ERP\Company();
$virtual_ninjas = $company->address;
$virtual_add = $virtual_ninjas['address_1'].','.$virtual_ninjas['city'].','.$virtual_ninjas['zip'];
$virtual_phone = $company->phone;
$virtual_email = $company->fax; 
?>
<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $image['url']; ?>');" data-stellar-background-ratio="0.5">
      <div id="contacts" class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo get_home_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact</span></p>
            <h2 class="mb-3 bread">Contact us</h2>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h3 class="h3">Contact Information</h3>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span><?php echo $virtual_add;?></p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://<?php echo $virtual_phone;?>"><?php echo $virtual_phone;?></a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:<?php echo $virtual_email;?>"><?php echo $virtual_email;?></a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3865.0503690261653!2d121.01761091431791!3d14.366497236623472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCJA%20Building%20B5-G%20L2%20Bach%20St.%20Jade%20Ave.%20Jade%20Heights%20Tunasan%2CMuntinlupa%2C1773!5e0!3m2!1sen!2sph!4v1586185999159!5m2!1sen!2sph" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
          </div>
        </div>
      </div>
    </section>
