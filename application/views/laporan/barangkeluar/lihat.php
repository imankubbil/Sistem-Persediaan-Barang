<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if($psn->num_rows() > 0) { ?>

<div class="block full">                            
    <div class="block-title">
        <div class="block-options">
            <form action="<?=base_URL()?>laporan_barangkeluar/cetak" method="post" target="_blank">
                <input type="hidden" name="from" value="<?=$from?>">
                <input type="hidden" name="to" value="<?=$to?>">
                <h2 class="pull-right"><strong>
                    <button type="submit" name="submit" data-toggle="tooltip" title="Cetak" class="btn btn-xs btn-default"><i class="fa fa-print"></i></button>
                </strong></h2>
            </form>
        </div>
    </div>

     <div class="table-responsive">
        <div class='alert alert-success' id='alert' align="center">
            Barang Keluar dari <b><?=getHari($from)?>, <?=getTanggal($from)?>
            </b> s/d <b><?=getHari($to)?>, <?=getTanggal($to)?></b>
        </div>
        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>                        
                    <th style="width: 50px;" class="text-center">No. </th>
                    <th class="text-center">No Barang Keluar</th>                        
                    <th class="text-center">Tanggal Barang Keluar</th>
                    <th class="text-center">Nama Customer</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>            
                <tbody>                
                       <?php 
                          $no = 1; 
                          foreach($psn->result() as $b)  :
                        ?>
                        
                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td align="center"><?=$b->no_brgkeluar?></td>
                            <td align="center"><?=$b->tgl_keluar?></td>
                            <td align="center"><?=getCustomer($b->kode_customer)?></td>
                            <td align="center"><?=getBarangmasuk($b->kode_barang)?></td>
                            <td align="center"><?=$b->qty?></td>
                                                    
                        </tr>
                    <?php $no++; endforeach; ?>     
                </tbody>
        </table>
    </div>

<?php } else if($psn->num_rows() == 0) { ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                    <!-- /.box-header -->
                <div class="box-body">
                    <div class='alert alert-warning' align="center">
                        Pemesanan dari <b><?=getHari($from)?>, <?=getTanggal($from)?>
                        </b> s/d <b><?=getHari($to)?>, <?=getTanggal($to)?></b> tidak ditemukan !
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script>
  //Notifikasi
  $("#alert").fadeTo(3000, 500).slideUp(500, function() {
    $("#alert").alert('close');
  })
</script>