<body>
  <div class="container">
    <div class="row">
      <div >
        <h2 align="center">Kategori</h2>
        <div class="card" >
          <div class="card-body">
            <?php foreach ($result as $data) { ?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
              <h3 class="card-title" align="center"><?php echo $data['namaKategori']; ?></h3>
              <p class="card-text" align="center"><?php echo $data['keterangan']; ?></p>
              <a href="<?php echo base_url()."kategori/lihat/".$data['idKategori']; ?>" class="btn btn-primary" >Lihat Artikel</a>
              <a href="<?php echo base_url()."kategori/edit_data/".$data['idKategori']; ?>" class="btn btn-warning" >Edit Kategori</a>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>