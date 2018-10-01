<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Laporan Barang Masuk
        </h1>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><strong>Data</strong> Barang Masuk</h2>
                </div>
        <div class="block full">                            
            <div class="block-title">
                <div class="block-options">
                    <h2 class="pull-right"><strong><a href="<?=base_URL()?>laporan_barangmasuk" data-toggle="tooltip" title="Refresh" class="btn btn-xs btn-default"><i class="fa fa-refresh"></i></a></strong></h2>
                </div>
            </div>

                  <?=form_open_multipart('laporan_barangmasuk/lihat', array('id' => 'lapbarangmasuk'))?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DARI TANGGAL</label>
                                    <input type="text" name="from" id="tanggal_dari" class="form-control input-datepicker-close" data-date-format="yyyy-mm-dd" placeholder="DARI TANGGAL" required="yes">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DARI TANGGAL</label>
                                    <input type="text" name="to" id="tanggal_sampai" class="form-control input-datepicker-close" data-date-format="yyyy-mm-dd" placeholder="SAMPAI TANGGAL" required="yes">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-search"></i> Proses</button>
                        <a href="<?= base_url('admin/barang_masuk')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Batal</a>
                    </div>
                  <?=form_close()?>
              </div>
        </div>
            </div>
        </div>
        <div id="result"></div>
    </div>

    