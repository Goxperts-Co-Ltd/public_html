<?php  
/** 
 * Template Name: Register Page
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
                <h2 class="mb-3 bread">Register</h2>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb bg-light">
    <div class="container">
        <div class="row justify-content-center mb-4">
        </div>
        <div class="row">
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">I'am a Freelancer</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">I'am a Employer</a>

                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content p-4" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-nextgen-tab">
                                <form action="<?php echo home_url(); ?>/register" method="post" class="search-job">
                                    <section class="ftco-section bg-light">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-md-12 col-lg-8 mb-5">

                                                    <form action="#" class="p-5 bg-white">
                                                        <div class="text-center">
                                                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/logo/forms.svg"
                                                                alt="virtual register" style="width: 8%;">
                                                            <h2>Registration Form</h2>
                                                            <?php 
                                                               
                                                                    $candidate_result = [];
                                                                    $candidate_result = my_candidate_register();
                                                                    if(is_array( $candidate_result )){
                                                                        if($candidate_result)
                                                                       
                                                                    
                                        
                                                                    } 
                                                       
                                                                ?>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold" for="fullname">First
                                                                    Name</label>
                                                                <input type="text" id="firstName" name="firstName"
                                                                    class="form-control" placeholder="eg. David"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold" for="fullname">Last
                                                                    Name</label>
                                                                <input type="text" id="lastName" name="lastName"
                                                                    class="form-control" placeholder="eg. Anderson."
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
            
                                                            <span> <label class="font-weight-bold"
                                                                    for="Email">Email</label>                  
                                                                <input type="email" id="candidateEmail"
                                                                    name="candidateEmail" class="form-control"
                                                                    placeholder="eg. david@virtualninjas.work."
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold"
                                                                    for="mobile">Mobile</label>
                                                                <input type="number" id="candidateMobile"
                                                                    name="candidateMobile" class="form-control"
                                                                    placeholder="eg. +63-975-4123-445" required>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold"
                                                                    for="mobile">Website</label>
                                                                <input type="text" id="candidateWebsite"
                                                                    name="candidateWebsite" class="form-control"
                                                                    placeholder="eg. www.linkedin.com/profile/david.anderson"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold"
                                                                    for="Gender">Gender</label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <!-- <input type="text" class="form-control" placeholder="Western City, UK -->
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="candidateGender" id="candidateGender"
                                                                        class="form-control" required>
                                                                        <option value="">Select</option>
                                                                        <?php
                                                                    //kunin natin gender
                                                                     $genders = erp_hr_get_genders();
                                                                     foreach($genders as $gkey => $gender){
                                        
                                                                         echo '<option value="'.$gkey.'">'. $gender.'</option>';

                                                                     }
                                                                    ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row form-group mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold" for="Job Type">Job
                                                                    Type</label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <!-- <input type="text" class="form-control" placeholder="Western City, UK -->
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="candidateType" id="candidateType"
                                                                        class="form-control" required>
                                                                        <option value="">Select</option>
                                                                        <?php 
                                                                          //kunin natin kung anung job scpecification ni candidate
                                                                          $types = erp_hr_get_employee_types();
                                                                          foreach( $types as $tkey => $type){
                                                                              echo '<option value="'.$tkey.'">'.$type.'</option>';
                                                                          }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold" for="Pay rate">Pay Rate
                                                                    ($/hour)</label>
                                                                <input type="number" id="candidatePayRate"
                                                                    name="candidatePayRate" class="form-control"
                                                                    placeholder="eg. 100" required>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold" for="Job Type">Pay
                                                                    Type</label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <!-- <input type="text" class="form-control" placeholder="Western City, UK -->
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="candidatePayType"
                                                                        id="candidatePayType" class="form-control"
                                                                        required>
                                                                        <option value="">Select</option>
                                                                        <?php 
                                                                          //kunin natin kung anung sahuran, gusto nya. tama ba!
                                                                          $payTypes = erp_hr_get_pay_type();
                                                                          foreach(  $payTypes as $paykey => $paytype){
                                                                              echo '<option value="'.$paykey.'">'.$paytype.'</option>';
                                                                          }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row form-group mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold"
                                                                    for="Source">Source</label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <!-- <input type="text" class="form-control" placeholder="Western City, UK -->
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="candidateSource" id="candidateSource"
                                                                        class="form-control" required>
                                                                        <option value="">Select</option>
                                                                        <?php 
                                                                          //saan nakita or reference ang virtual ninjas job portal
                                                                          $sources = erp_hr_get_employee_sources();
                                                                          foreach(  $sources as $skey => $source){
                                                                              echo '<option value="'.$skey.'">'.$source.'</option>';
                                                                          }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row form-group mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold"
                                                                    for="location">Location</label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <!-- <input type="text" class="form-control" placeholder="Western City, UK -->
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="candidateLocation"
                                                                        id="candidateLocation" class="form-control" required>
                                                                        <option value="">Select</option>
                                                                        <?php 
                                                                        //kunin natin mga bansa
                                                                        $load_cuntries_states = \WeDevs\ERP\Countries::instance();
                                                                        $countries            = $load_cuntries_states->countries;
                                                                        foreach( $countries as $ckey => $country){
                                                                            echo ' <option value="'.$ckey.'">'.$country.'</option>';
                                                                        }           
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold"
                                                                    for="description">Biography
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <textarea name="personalDesc" class="form-control"
                                                                    id="personalDesc" cols="30" rows="5"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12" style="margin-top: 10px;">
                                                                <input type="submit" value="Register"
                                                                    class="btn btn-primary  py-2 px-5"
                                                                    name="Candidate_Register">
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                                <!-- Need Assistance -->
                                                <?php get_template_part( 'registration-parts/assistance'); ?>
                                                <!-- End of Need Assistance-->
                                            </div>
                                        </div>
                                    </section>

                                </form>

                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-performance-tab">
                                <form action="#" class="search-job">
                                    <section class="ftco-section bg-light">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-md-12 col-lg-8 mb-5">

                                                    <form action="#" class="p-5 bg-white">
                                                        <div class="text-center">
                                                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/logo/company.svg"
                                                                alt="virtual register" style="width: 8%;">
                                                            <h2>Registration Form</h2>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold"
                                                                    for="companyname">Company
                                                                    Name</label>
                                                                <input type="text" id="companyName" class="form-control"
                                                                    placeholder="eg. Google">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold"
                                                                    for="fullname">Email</label>
                                                                <input type="email" id="companyEmail"
                                                                    class="form-control"
                                                                    placeholder="eg. david@virtualninjas.work.">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold" for="companyphone">Phone
                                                                    Number</label>
                                                                <input type="text" id="companyPhone"
                                                                    class="form-control" placeholder="eg. Anderson.">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold"
                                                                    for="companysite">Website
                                                                </label>
                                                                <input type="text" id="webSite" class="form-control"
                                                                    placeholder="eg. Anderson.">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold"
                                                                    for="location">Country</label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <!-- <input type="text" class="form-control" placeholder="Western City, UK -->
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="">Philippines</option>
                                                                        <option value="">USA</option>
                                                                        <option value="">Singapore</option>
                                                                        <option value="">Japan</option>
                                                                        <option value="">East Timor</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row form-group mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold" for="source">Contact
                                                                    Source
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <!-- <input type="text" class="form-control" placeholder="Western City, UK -->
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="">Advertisement</option>
                                                                        <option value="">News Letter</option>
                                                                        <option value="">Web Search</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12" style="margin-top: 10px;">
                                                                <input type="submit" value="Register"
                                                                    class="btn btn-primary  py-2 px-5">
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>

                                                <!-- Need Assistance -->
                                                <?php get_template_part( 'registration-parts/assistance'); ?>
                                                <!-- End of Need Assistance-->
                                            </div>
                                        </div>
                                    </section>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<?php
  get_footer(); 