

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Magazine &mdash; Free Fully Responsive HTML5 Bootstrap Template by FREEHTML5.co</title>
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

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('./assets/js/modernizr-2.6.2.min.js'); ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="<?php echo base_url('assets/images/img-dress.png'); ?>" class="img-responsive">
			</figure>
			<h3 class="heading">Artikel</h3>
			<h2>Life Styles</h2>
			<p>All About Life and Fashion</p>
			<ul class="fh5co-social">
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-instagram"></i></a></li>
			</ul>
		</div>

		<div class="fh5co-menu">
			<div class="fh5co-box">
				<h3 class="heading">Categories</h3>
				<ul>
					<li><a href="<?php echo base_url()."crud/add_data/"; ?>">Add Data</a></li>	
				</ul>
			</div>
			<div class="fh5co-box">
				<h3 class="heading">Search</h3>
				<form action="#">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Type a keyword">
					</div>
				</form>
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
					<h1 id="fh5co-logo"><a href="<?php echo base_url()."crud/"; ?>">LifeStyle <sup>TM</sup></a></h1>
				</div>

			</div>
		
		</div>

	</header>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<?php foreach ($result as $data) { ?>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
					<a href="<?php echo base_url()."crud/do_preview/".$data['id']; ?>"><img src="<?php echo base_url('images/uploaded/'.$data['img']); ?>" alt="Image" class="img-responsive"></a>
				</figure>
				<span class="fh5co-meta"><a href="<?php echo base_url()."crud/do_preview/".$data['id']; ?>"><?php echo $data['author']; ?></a></span>
				<h2 class="fh5co-article-title"><a href="<?php echo base_url()."crud/do_preview/".$data['id']; ?>"><?php echo $data['judul']; ?></a></h2>
				<span class="fh5co-meta fh5co-date"><?php echo $data['tgl']; ?></span>
			</article>
			<?php } ?>
			<div class="clearfix visible-xs-block"></div>
		</div>
	</div>

	<footer id="fh5co-footer">
		<p><small>&copy; 2018. Artikel LifeStyles. Nabila Rifda. <br></small></p>
	</footer>


	
	<!-- jQuery -->
	<script src="<?php echo base_url('./assets/js/jquery.min.js'); ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('./assets/js/jquery.easing.1.3.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('./assets/js/bootstrap.min.js'); ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('./assets/js/jquery.waypoints.min.js'); ?>"></script>
	<!-- Main JS -->
	<script src="<?php echo base_url('./assets/js/main.js'); ?>"></script>

	</body>
</html>

