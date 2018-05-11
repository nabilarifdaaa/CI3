
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<?php foreach ($result as $data) { ?>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
					<a href="<?php echo base_url()."crud/do_preview/".$data['id']; ?>"><img src="<?php echo base_url('images/uploaded/'.$data['img']); ?>" alt="Image" class="img-responsive"></a>
				</figure>
				<span class="fh5co-meta"><a href="<?php echo base_url()."crud/do_preview/".$data['id']; ?>"><?php echo $data['namaKategori']; ?></a></span>
				<h2 class="fh5co-article-title"><a href="<?php echo base_url()."crud/do_preview/".$data['id']; ?>"><?php echo $data['judul']; ?></a></h2>
				<span class="fh5co-meta fh5co-date"><?php echo $data['tgl']; ?></span>
			</article>
			<?php } ?>
			<?php 
		// $links ini berasal dari fungsi pagination 
		// Jika $links ada (data melebihi jumlah max per page), maka tampilkan
		if (isset($links)) {
			echo $links;
		} 
		?>
			<div class="clearfix visible-xs-block"></div>
		</div>
	</div>



	

