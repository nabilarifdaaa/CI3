<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Magazine</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
		<!-- Animate -->
		<link rel="stylesheet" href="<?php echo base_url('./assets/css/animate.css'); ?>">
		<!-- Icomoon -->
		<link rel="stylesheet" href="<?php echo base_url('./assets/css/icomoon.css'); ?>">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css'); ?>">
		<script src="<?php echo base_url('./assets/js/modernizr-2.6.2.min.js'); ?>"></script>
		<style type="text/css">
		.fh5co-post-entry article .content-article a{
			text-decoration: none;
			color: #000;
		}
	</style>
	</head>

	<body>
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="<?php echo base_url('./assets/images/img-dress.png'); ?>" class="img-responsive">
			</figure>
			<h3 class="heading">Artikel</h3>
			<h2>BLOG</h2>
			<p>All About Information U Can Read </p>
			<ul class="fh5co-social">
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-instagram"></i></a></li>
			</ul>
			<div class="fh5co-box">
				<h3 class="heading">Search</h3>
				<form action="#">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Type a keyword">
					</div>
				</form>
			</div>
		</div>

		<div class="fh5co-menu">
			<div class="fh5co-box">
				<h3 class="heading">Artikel</h3>
				<ul>
					<li><a href="<?php echo base_url()."crud/"; ?>">Lihat Artikel</a></li>
					<li><a href="<?php echo base_url()."crud/add_data/"; ?>">Tambah Artikel</a></li>
				</ul>
				<h3 class="heading">Kategori</h3>
				<ul>
					<li><a href="<?php echo base_url()."kategori/preview/"; ?>">Lihat Kategori</a></li>	
					<li><a href="<?php echo base_url()."kategori/add_data/"; ?>">Tambah Kategori</a></li>	
					<li><a href="<?php echo base_url()."kategori/datatable/"; ?>">Data Tables</a></li>	
				</ul>
				<h3 class="heading">User</h3>
				<ul>
					<li><a href="<?php echo base_url()."User/tambahuser/"; ?>">Register</a></li>	
					<li><a href="<?php echo base_url()."User/loginuser/"; ?>">Login</a></li>		
					<li><a href="<?php echo base_url()."User/logout/"; ?>">Logout</a></li>	
				</ul>
			</div>
		</div>
	</div>
	<!-- END #fh5co-offcanvas -->
	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="<?php echo base_url()."crud/"; ?>">Blogs <sup>TM</sup></a></h1>
				</div>

			</div>
		
		</div>

	</header>
	<?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>
