<div id="page-content">
	
	<div class="block">
		
	    <div class="block-title">
	        <h2><strong>Transaksi</strong> Barang Masuk</h2>	        
	    </div>
	    <div class="table-options clearfix">                                
            <div class="pull-left">
                
                <a href="<?=base_url('admin/barang_masuk_tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>
                <!-- <a href="<?=base_url('laporan_barangmasuk')?>" type="button" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan</a> -->
                <!-- <a href="javascript: w=window.open('<?=base_url()?>admin/barang_masuk_cetak', 'newwindow', 'width=1300, height=650', 'resizable=yes'); w.focus(); w.print();" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan</a> -->
                <!-- <a href="javascript: w=window.open('<?=base_URL()?>pengguna/laporanproduk/cetak', 'newwindow', 'width=1300, height=650', 'resizable=yes'); w.focus(); w.print();" class="btn btn-sm btn-success pull-right"><i class="fa fa-print"></i>&nbsp; <span>Cetak</span></a> -->
            </div>
        </div>

        <div class="table-responsive">
	        <table id="general-table" class="table table-striped table-vcenter">
	            <thead>
	                <tr>	                    
	                    <th style="width: 50px;" class="text-center">No. </th>
	                    <th class="text-center">No Barang Masuk</th>	                    
	                    <th class="text-center">Tanggal</th>
                        <th class="text-center">Nama Supplier</th>
	                    <th class="text-center">Barang</th>
	                    <th class="text-center">Total</th>
                        <th class="text-center">Author</th>
	                    <th style="width: 150px;" class="text-center">Actions</th>
	                </tr>
	            </thead>
	            <tbody>                
	                   <?php 
                          $no = 1; 
                          foreach($bin as $b)  :
                        ?>

                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td align="center"><?=$b->no_brgmasuk?></td>
                            <td align="center"><?=$b->tgl_masuk?></td>
                            <td align="center"><?=getSupp($b->kode_supp)?></td>
                            <td align="center"><?=getBarangmasuk($b->kode_barang)?></td>
                            <td align="center"><?=$b->qty?></td>
                            <td align="center"><?=$b->username?></td>                        
                            <td class="actions" align="center">
                                <a href="<?=base_url('admin/barang_ubah')?>/<?=$b->kode_barang?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                <!-- <a href="<?=base_url('admin/barang_masuk_hapus')?>/<?=$b->no_brgmasuk?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a> -->
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
	            </tbody>
	            <!-- <tfoot>
                   <tr>
                     <td colspan="9">
                        <div class="btn-group btn-group-sm pull-right">
                            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                            <div class="btn-group btn-group-sm dropup">
                                <a href="javascript:void(0)" class="btn btn-primary pull-right dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
	                                <li><a href="javascript:void(0)"><i class="fa fa-print pull-right"></i> Print</a></li>
	                                <li class="dropdown-header"><i class="fa fa-share pull-right"></i> Export As</li>
	                                <li>
	                                   <a href="javascript:void(0)">.pdf</a>
	                                   <a href="javascript:void(0)">.cvs</a>
	                                </li>
                               </ul>
                            </div>
                        </div>                                                
                     </td>
                    </tr>
                </tfoot> -->
	        </table>
	    </div>

    </div>
</div>