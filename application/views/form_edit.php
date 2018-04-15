<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Minty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css'); ?>" media="screen">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.css"> -->
  </head>
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
              <?php echo form_open_multipart('crud/do_update', 'id="id"')?>
              <form>
                <fieldset>
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
                  </div>
                  <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input type="date" class="form-control" id="tgl" name="tgl" placeholder="<?php echo $tgl; ?>">
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?php echo $author; ?>">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Artikel</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3"><?php echo $isi; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="img">Upload Gambar</label>
                    <input type="file" class="form-control-file" id="img" name="userfile"><?php echo $img ?>
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
  </body>
</html>