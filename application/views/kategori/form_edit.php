  <body>
    <div class="container">
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Edit Artikel</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="bs-component">
              <?php echo validation_errors(); ?>
              <?php echo form_open_multipart('kategori/do_update', 'id="id"')?>
              <form class="needs-validation" novalidate>
                <input type="hidden" name="id" value="<?php echo $idKategori; ?>">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nama Kategori</label>
                    <input type="text" class="form-control" name="namaKategori" placeholder="Nama Kategori" required value="<?php echo set_value('namaKategori', $namaKategori) ; ?>">
                    <div class="invalid-feedback">
                      Isi Nama Kategori dulu dong
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Keterangan Kategori</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="<?php echo set_value('keterangan', $keterangan) ; ?>" required>
                    <div class="invalid-feedback">
                      Isi Keterangan dulu dong
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Tanggal Buat Kategori</label>
                    <input type="date" class="form-control" id="validationCustom03" placeholder="City" value="<?php echo set_value('tgl', $tanggalbuat) ; ?>" required>
                    <div class="invalid-feedback">
                      Isi tanggal dong
                    </div>
                  </div>
                </div>
                
                <button class="btn btn-primary" type="submit">Edit Kategori</button>
                <button class="btn btn-warning"><a href="<?php echo base_url()."crud/"; ?>">Back</a></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>