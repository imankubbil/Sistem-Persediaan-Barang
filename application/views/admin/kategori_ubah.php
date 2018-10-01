            <!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Input Kategori
        </h1>
      </div>
    </div>
    
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Form</strong> Kategori</h2>
          </div>
          <!-- END Form Elements Title -->

          <!-- Basic Form Elements Content -->
          <?=
            form_open_multipart('admin/kategori_ubah', 'role="form" class="form-horizontal form-bordered"');            
          ?>

            <div class="form-group">
              <label class="col-md-3 control-label" for="example-text-input">Kode Kategori</label>
                <div class="col-md-3">
                  <input type="text" name="kode_kategori" value="<?=$kategori['kode_kategori']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="example-email-input">Nama Kategori</label>
                <div class="col-md-3">
                  <input type="text" name="nama_kategori" value="<?=$kategori['nama_kategori']?>" class="form-control">
                </div>
            </div>

            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?=base_url('admin/kategori')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Kembali</a>           
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      
</div>