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
	      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">VirtualNinjas.Work</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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
    <!-- END nav -->


