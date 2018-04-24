<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Minty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css'); ?>" media="screen">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.css"> -->
    <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>
    <div class="container">
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Tambah Artikel</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="bs-component">
              <?php echo validation_errors(); ?>
              <?php echo form_open_multipart('crud/do_insert', array(
                'class' => 'needs-validation','novalidate' => '') 
                );
              ?>
              <form>
                <fieldset>
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="<?php echo set_value('judul')?>" required>
                    <div class="invalid-feedback">Judulnya kosong isi dong</div>
                  </div>
                  <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Judul" value="<?php echo set_value('tanggal')?>" required>
                    <div class="invalid-feedback">Tanggalnya kosong isi dong</div>
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" aria-describedby="emailHelp" placeholder="Author" value="<?php echo set_value('author')?>" required>
                    <div class="invalid-feedback">Authornya kosong isi dong</div>
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Artikel</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3" required><?php echo set_value('isi') ?></textarea>
                    <div class="invalid-feedback">Isi kontennya dong</div>
                  </div>
                  <div class="form-group">
                    <label for="img">Upload Gambar</label>
                    <input type="file" class="form-control-file" id="img" name="userfile">
                  </div>
                  <button type="submit" class="btn btn-primary" name="btnSubmit" id="btnSubmit" value="Simpan">Submit</button>
                  <button class="btn btn-warning"><a href="<?php echo base_url()."crud/"; ?>">Back</a></button>
                </fieldset>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url('./assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('./assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
  </body>
</html>