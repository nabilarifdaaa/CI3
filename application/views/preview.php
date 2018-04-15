
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	<style type="text/css">
		.fh5co-post-entry article .content-article a{
			text-decoration: none;
			color: #000;
		}
	</style>

	<script src="<?php echo base_url('./assets/js/modernizr-2.6.2.min.js'); ?>"></script>

	</head>
	<body>
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="<?php echo base_url('assets/images/img-dress.png'); ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
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
		<div class="row fh5co-post-entry single-entry">
			<?php foreach ($isi as $data) { ?>
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<figure class="animate-box">
					<img src="<?php echo base_url('images/uploaded/'.$data['img']); ?>" alt="Image" class="img-responsive">
				</figure>
				<span class="fh5co-meta animate-box"><a href="single.html"><?php echo $data['author']; ?></a></span>
				<h2 class="fh5co-article-title animate-box"><a href="single.html"><?php echo $data['judul']; ?></a></h2>
				<span class="fh5co-meta fh5co-date animate-box"><?php echo $data['tgl']; ?></span>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-8 cp-r animate-box">
							<p><?php echo $data['isi']; ?></p>
						</div>
						<div class="col-lg-4 animate-box">
							<div class="fh5co-highlight right">
								<h4>Highlight</h4>
								<p>Semua Artikel yang membahas tentang Lifestyles ada disini!</p>
							</div>
						</div>
						<div class="col-lg-4 animate-box">
							<div class="fh5co-highlight right">
								<h4>Remember</h4>
								<p>Jangan Lupa untuk selalu hidup Sehat ya!</p>
							</div>
						</div>
						<div class="col-lg-4 animate-box">
							<div class="fh5co-highlight right">
								<h4>Action</h4>
								<button class="btn btn-primary"><a href="<?php echo base_url()."crud/edit_data/".$data['id']; ?>">Edit</a></button>
								<button class="btn btn-warning"><a href="<?php echo base_url()."crud/do_delete/".$data['id']; ?>">Delete</a></button>
							</div>
						</div>
					</div>

					
				</div>
			</article>
			<?php } ?>
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

