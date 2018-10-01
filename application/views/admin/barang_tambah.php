<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Input Barang
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Data</strong> Barang</h2>
          </div>
          <!-- END Form Elements Title -->

          <!-- Basic Form Elements Content -->
          <form action="<?=base_url('admin/barang_tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

            <div class="form-group">
              <label class="col-md-3 control-label">Kode Barang</label>
                <div class="col-md-3">
                  <input type="text" name="kode_barang" value="<?=$kodeunik?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Barang</label>
                <div class="col-md-6">
                  <input type="text" name="nama_barang" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Kategori</label>
                <div class="col-md-6">
                  <select name="kode_kategori" class="form-control" size="1">
                  <option value="">Pilih Kategori</option>
                      <?php foreach ($ktg as $d) : ?>
                    <option value="<?=$d->kode_kategori?>"><?= getKategori($d->kode_kategori)?></option>
                      <?php endforeach ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Qty</label>
                <div class="col-md-6">
                  <input type="text" name="qty" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Satuan</label>
                <div class="col-md-6">
                  <input type="text" name="satuan" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Detail Barang</label>
                <div class="col-md-6">
                  <input type="text" name="detail_brg" class="form-control" >
                </div>
            </div>
            

            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?= base_url('admin/barang')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Batal</a>
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
    </div>
     
</div>
