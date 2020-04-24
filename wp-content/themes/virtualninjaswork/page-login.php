<?php  
/** 
 * Template Name: Login Page
 */  
 get_header(); 
 global $post;
$post_array = $post->to_array();
//get the banner image
$image = get_field( 'banner_image',$post_array['ID']);
?>
<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $image['url']; ?>');"
    data-stellar-background-ratio="0.5">
    <div id="job-opens" class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <h2 class="mb-3 bread">Login</h2>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h3 class="h3">Login Information</h3>
            <p>Virtual Ninjas, you top freelance hub! Gathering together expert and reliable freelancers, and agencies to collaborate to businesses that offers exemplary opportunities.</p>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form name="loginform" action="<?php echo home_url(); ?>/login" method="post" class="bg-white p-5 contact-form">
            <div class="text-center">
              <h2>Welcome Ninjas</h2>
            </div>
            <div>
            <?php 
             $errors = my_check_login();
            if(!empty($errors)) {  //  to print errors,
                foreach($errors as $err )
                    echo '<p style="color:red;">'.$err.'</p>';
            } ?>
            </div>
              <div class="form-group">
                <input type="text"  name="userName" id="user_login" class="form-control" placeholder="Username" value="">
              </div>
              <div class="form-group">
                <input type="password" name="passWord" id="user_pass" class="form-control" placeholder="Password" value="">
              </div>
              <div>
              <p class="login-remember"><label><input name="rememberMe" type="checkbox" id="rememberme" value="forever"> Remember Me</label>
              </div>
              <div class="form-group">
               <input type="hidden" name="login_Sbumit" >
                <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary py-3 px-5" value="Log In">
                <input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>/wp-admin/index.php">
              </div>
              <div><p>Not yet a Member? Click <a href="<?php echo home_url(); ?>/register">here</a> to register!</p></div>
            </form>         
          </div>

          <div class="col-md-6 d-flex">
          	<div class="bg-white"><img src="<?php bloginfo('stylesheet_directory');?>/assets/logo/default.png" alt="virtual ninjas" style="width: 100%;"></div>
          </div>
        </div>
      </div>
    </section>


 <?php
  get_footer(); 