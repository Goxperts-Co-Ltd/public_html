<!DOCTYPE HTML>

<html <?php language_attributes(); ?> style="margin-top:0 !important;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- header start -->
    <?php wp_head(); ?>
    <!-- end of Header -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid px-md-4	">
		<h1 class="brands">VirtualNinjas.Work</h1>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">VirtualNinjas.Work</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <!-- main header -->
                    <?php 
			  wp_get_menu_array('Main Menu');
			 ?>
                </ul>
            </div>
        </div>
    </nav>
<?php
if(is_page('search')){
global $post;
$post_array = $post->to_array();
//get the banner image
$image = get_field( 'banner_image',$post_array['ID']);?>
    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $image['url']; ?>');"
        data-stellar-background-ratio="0.5">
        <div id="single" class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-12 ftco-animate text-center mb-5">
                    <h2 class="mb-3 bread">Search Results</h2>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
?>