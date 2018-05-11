
  <body>
    <div class="container">
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Tambah Kategori</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="bs-component">
               <?php echo form_open('kategori/do_insert', array('class' => 'needs-validation','novalidate' => ''));?>
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nama Kategori</label>
                    <input type="text" class="form-control" name="namaKategori" placeholder="Nama Kategori" required>
                    <div class="invalid-feedback">
                      Isi Nama Kategori dulu dong
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Keterangan Kategori</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required>
                    <div class="invalid-feedback">
                      Isi Keterangan dulu dong
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Tanggal Buat Kategori</label>
                    <input type="date" class="form-control" id="validationCustom03" placeholder="City" required>
                    <div class="invalid-feedback">
                      Isi tanggal dong
                    </div>
                  </div>
                </div>
                
                <button class="btn btn-primary" type="submit">Add Kategori</button>
                <button class="btn btn-warning"><a href="<?php echo base_url()."crud/"; ?>">Back</a></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>