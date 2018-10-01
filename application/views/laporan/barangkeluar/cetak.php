<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if($psn->num_rows() > 0) { ?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="PT. AGEL LANGGENG" />
    <meta name="author" content="PT. AGEL LANGGENG" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_URL()?>assets/img/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="<?=base_URL()?>assets/css/style.css" media="all" />
  </head>
  <body onload="window.print()">
    <header class="clearfix">
      <div id="logo">
        <div class="row">
            <div class="col-sm-12">
                <img src="<?=base_URL()?>assets/img/logo_cetak.png" width="300" alt="kop">
            </div>
        </div>
      </div>
      <h1>LAPORAN BARANG KELUAR - PT. AGEL LANGGENG</h1>
      <h3 align="center"><b><?=getHari($from)?>, <?=getTanggal($from)?></b>&nbsp; s/d &nbsp;<b><?=getHari($to)?>, <?=getTanggal($to)?></b></h3><hr>
    </header>

    <main>
      <table align="center">
        <thead>
          <tr>
            <th style="text-align: center">No. </th>
            <th style="text-align: center">No Barang Keluar</th>                        
            <th style="text-align: center">Tanggal Barang Keluar</th>
            <th style="text-align: center">Nama Customer</th>
            <th style="text-align: center">Nama Barang</th>
            <th style="text-align: center">Total</th>
          </tr>
        </thead>

        <tbody>

          <?php 
            $no = 1; 
            foreach($psn->result() as $p)  :
          ?>

          <tr>
            <td style="text-align: center"><?=$no?>.</td>
            <td style="text-align: center"><?=$p->no_brgkeluar?></td>
            <td style="text-align: center"><?=$p->tgl_keluar?></td>
            <td style="text-align: center"><?=getCustomer($p->kode_customer)?></td>
            <td style="text-align: center"><?=getBarangmasuk($p->kode_barang)?></td>
            <td style="text-align: center"><?=$p->qty?></td>
          </tr>
          <tr>

          <?php $no++; endforeach ?>
         
            <td colspan="5" class="grand total">TOTAL BARANG KELUAR : </td>
            <td class="grand total" style="text-align: center"><?=$pns?></td>
          </tr>
        </tbody>

    </table>

    </main>

    <br><br><br><hr>

  </body>
</html>

<?php } ?>