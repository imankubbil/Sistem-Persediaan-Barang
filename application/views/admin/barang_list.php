<div id="page-content">
	
	<div class="block">
		
	    <div class="block-title">
	        <h2><strong>Table</strong> barang</h2>	        
	    </div>
	    <div class="table-options clearfix">                                
            <div class="pull-left">
                <a href="<?=base_url('admin/barang_tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>                           
            </div>
        </div>
    <!-- Responsive Full Content -->
	    <div class="table-responsive">
	        <table id="general-table" class="table table-striped table-vcenter">
	            <thead>
	                <tr>	                    
	                    <th style="width: 50px;" class="text-center">No. </th>
	                    <th class="text-center">Kode Barang</th>
	                    <th class="text-center">Nama Barang</th>
	                    <th class="text-center">Kategori</th>
                        <th class="text-center">Qty</th>
	                    <th class="text-center">Satuan</th>
	                    <th class="text-center">Detail</th>
	                    <th style="width: 150px;" class="text-center">Actions</th>
	                </tr>
	            </thead>
	            <tbody>                
	                   <?php 
                          $no = 1; 
                          foreach($barang as $p)  :
                        ?>

                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td align="center"><?=$p->kode_barang?></td>
                            <td align="center"><?=$p->nama_barang?></td>
                            <td align="center"><?=getKategori($p->kode_kategori)?></td>
                            <td align="center"><?=$p->qty?></td>
                            <td align="center"><?=$p->satuan?></td>
                            <td align="center"><?=$p->detail_brg?></td>
                            <td class="actions" align="center">
                                <a href="<?=base_url('admin/barang_ubah')?>/<?=$p->kode_barang?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="<?=base_url('admin/barang_hapus')?>/<?=$p->kode_barang?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
	            </tbody>
	            <tfoot>
                   
                </tfoot>
	        </table>
	    </div>
	</div>
</div>


<?php include 'footer.php';?>
<?php include 'kaki.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="<?=base_url()?>assets/js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'template_end.php'; ?>