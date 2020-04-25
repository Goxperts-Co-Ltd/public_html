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
                                <form action="#" class="search-job">
                                    <section class="ftco-section bg-light">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-md-12 col-lg-8 mb-5">

                                                    <form action="#" class="p-5 bg-white">
                                                        <div class="text-center">
                                                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/logo/forms.svg"
                                                                alt="virtual register" style="width: 8%;">
                                                            <h2>Registration Form</h2>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold" for="fullname">First
                                                                    Name</label>
                                                                <input type="text" id="firstName" class="form-control"
                                                                    placeholder="eg. David">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold" for="fullname">Last
                                                                    Name</label>
                                                                <input type="text" id="lastName" class="form-control"
                                                                    placeholder="eg. Anderson.">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <label class="font-weight-bold"
                                                                    for="fullname">Email</label>
                                                                <input type="email" id="lastName" class="form-control"
                                                                    placeholder="eg. david@virtualninjas.work.">
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
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="">Full Time</option>
                                                                        <option value="">Part Time</option>
                                                                        <option value="">Freelance</option>
                                                                        <option value="">Internship</option>
                                                                        <option value="">Temporary</option>
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

                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold" for="description">Brief
                                                                    Personal Description</label>
                                                            </div>
                                                            <div class="col-md-12 mb-3 mb-md-0">
                                                                <textarea name="" class="form-control" id="" cols="30"
                                                                    rows="5"></textarea>
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

                                                <div class="col-lg-4">
                                                    <div class="p-4 mb-3 bg-white">
                                                        <h2>Need Assistance?</h2>
                                                        <h3 class="h5 text-black mb-3">Visit or Contact us</h3>
                                                        <p class="mb-0 font-weight-bold">Address</p>
                                                        <p class="mb-4">CJA Building B5-G L2 Bach St. Jade Ave. Jade
                                                            Heights Tunasan, Muntinlupa,1773
                                                            , Philippines</p>

                                                        <p class="mb-0 font-weight-bold">Phone</p>
                                                        <p class="mb-4"><a href="tel: 02-8-372-6294"> (02) 8-372-6294
                                                            </a></p>

                                                        <p class="mb-0 font-weight-bold">Email Address</p>
                                                        <p class="mb-0"><a href="mailto: info@virtualninjas.work"><span
                                                                    class="__cf_email__">info@virtualninjas.work</span></a>
                                                        </p>

                                                    </div>

                                                    <div class="p-4 mb-3 bg-white">
                                                        <h3 class="h5 text-black mb-3">More Info</h3>
                                                        <p>Once the application is submitted, wait for 2-3 days
                                                            verification and identification process,
                                                            your email address will be your register login username and
                                                            your password will be sent via email once approved.</p>
                                                    </div>
                                                </div>
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

                                                <div class="col-lg-4">
                                                    <div class="p-4 mb-3 bg-white">
                                                        <h2>Need Assistance?</h2>
                                                        <h3 class="h5 text-black mb-3">Visit or Contact us</h3>
                                                        <p class="mb-0 font-weight-bold">Address</p>
                                                        <p class="mb-4">CJA Building B5-G L2 Bach St. Jade Ave. Jade
                                                            Heights Tunasan, Muntinlupa,1773
                                                            , Philippines</p>

                                                        <p class="mb-0 font-weight-bold">Phone</p>
                                                        <p class="mb-4"><a href="tel: 02-8-372-6294"> (02) 8-372-6294
                                                            </a></p>

                                                        <p class="mb-0 font-weight-bold">Email Address</p>
                                                        <p class="mb-0"><a href="mailto: info@virtualninjas.work"><span
                                                                    class="__cf_email__">info@virtualninjas.work</span></a>
                                                        </p>

                                                    </div>

                                                    <div class="p-4 mb-3 bg-white">
                                                        <h3 class="h5 text-black mb-3">More Info</h3>
                                                        <p>Once the application is submitted, wait for 2-3 days
                                                            verification and identification process,
                                                            your email address will be your register login username and
                                                            your password will be sent via email once approved.</p>
                                                    </div>
                                                </div>
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