<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Input Supplier
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Data</strong> Supplier</h2>
          </div>
          <!-- END Form Elements Title -->

          <!-- Basic Form Elements Content -->
          <?=
            form_open_multipart('admin/supplier_ubah', 'role="form" class="form-horizontal form-bordered"');
          ?>

            <div class="form-group">
              <label class="col-md-3 control-label">Kode Supplier</label>
                <div class="col-md-3">
                  <input type="text" name="kode_supp" value="<?=$supplier['kode_supp']?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Supplier</label>
                <div class="col-md-6">
                  <input type="text" name="nama_supp" value="<?=$supplier['nama_supp']?>" class="form-control" >
                </div>
            </div>            
            <div class="form-group">
              <label class="col-md-3 control-label">Telepon</label>
                <div class="col-md-6">
                  <input type="text" name="tlp_supp" value="<?=$supplier['tlp_supp']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Keterangan</label>
                <div class="col-md-6">
                  <input type="text" name="keterangan" value="<?=$supplier['keterangan']?>" class="form-control">
                </div>
            </div>

            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?= base_url('admin/supplier')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Kembali</a>
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
    </div>
     
</div>
