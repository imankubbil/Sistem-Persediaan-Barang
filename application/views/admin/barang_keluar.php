<div id="page-content">
	
	<div class="block">
		
	    <div class="block-title">
	        <h2><strong>Transaksi</strong> Barang Keluar</h2>	        
	    </div>
	    <div class="table-options clearfix">                                
            <div class="pull-left">
                <a href="<?=base_url('admin/barang_keluar_tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>
                <!-- <a href="<?=base_url('admin/lapbarangkeluar')?>" type="button" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan</a> -->                           
            </div>
        </div>

        <div class="table-responsive">
	        <table id="general-table" class="table table-striped table-vcenter">
	            <thead>
	                <tr>	                    
	                    <th style="width: 50px;" class="text-center">No. </th>
	                    <th class="text-center">No Barang Keluar</th>	                    
	                    <th class="text-center">Tanggal Barang Keluar</th>
                        <th class="text-center">Nama Customer</th>
	                    <th class="text-center">Nama Barang</th>
	                    <th class="text-center">Total</th>
	                    <th style="width: 150px;" class="text-center">Actions</th>
	                </tr>
	            </thead>
	            <tbody>                
	                   <?php 
                          $no = 1; 
                          foreach($bout as $p)  :
                        ?>

                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td align="center"><?=$p->no_brgkeluar?></td>
                            <td align="center"><?=$p->tgl_keluar?></td>
                            <td align="center"><?=getCustomer($p->kode_customer)?></td>
                            <td align="center"><?=getBarangkeluar($p->kode_barang)?></td>
                            <td align="center"><?=$p->qty?></td>                        
                            
                            <td class="actions" align="center">
                                <a href="<?=base_url('admin/barang_ubah')?>/<?=$p->kode_barang?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="<?=base_url('admin/barang_hapus')?>/<?=$p->kode_barang?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
	            </tbody>
	            <tfoot>
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
                </tfoot>
	        </table>
	    </div>
    </div>
</div>