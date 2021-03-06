<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Input Barang Keluar
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Data</strong> Barang Keluar</h2>
          </div>
          <!-- END Form Elements Title -->

          <!-- Basic Form Elements Content -->
          <form action="<?=base_url('admin/barang_keluar_tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

            <div class="form-group">
              <label class="col-md-3 control-label">No Barang Keluar</label>
                <div class="col-md-3">
                  <input type="text" name="no_brgkeluar" value="<?=$kodeunik?>" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Tanggal Keluar</label>
                <div class="col-md-6">
                  <input type="date" name="tgl_keluar" class="form-control" value="<?=date('Y-m-d')?>">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Customer</label>
                <div class="col-md-6">
                  <select name="kode_customer" class="form-control" size="1">
                  <option value="">Pilih Customer</option>
                      <?php foreach ($ctmr as $c) : ?>
                    <option value="<?=$c->kode_customer?>"><?=getCustomer($c->kode_customer)?></option>
                      <?php endforeach ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Barang</label>
                <div class="col-md-6">
                  <select name="kode_barang" class="form-control" size="1">
                  <option value="">Pilih Barang</option>
                      <?php foreach ($barang as $b) : ?>
                    <option value="<?=$b->kode_barang?>"><?=getBarangmasuk($b->kode_barang)?></option>
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
            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?= base_url('admin/barang_masuk')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Batal</a>
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
    </div>
     
</div>
