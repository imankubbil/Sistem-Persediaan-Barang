<div id="page-content">
	<div class="block">
	    <div class="block-title">
	        <h2><strong>Table</strong> Customer</h2>
	    </div>
	    <div class="table-options clearfix">                                
            <div class="pull-left">
                <a href="<?=base_url('admin/customer_tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>                           
            </div>
        </div>
    <!-- Responsive Full Content -->
	    <div class="table-responsive">
	        <table class="table table-vcenter table-striped">
	            <thead>
	                <tr>
	                    <th style="width: 50px;" class="text-center">No. </th>
	                    <th class="text-center">Kode Customer</th>
	                    <th class="text-center">nama Customer</th>	                    
	                    <th class="text-center">telpon</th>
	                    <th class="text-center">Keterangan</th>
	                    <th style="width: 150px;" class="text-center">Actions</th>
	                </tr>
	            </thead>
	            <tbody>                
	                   <?php 
                          $no = 1; 
                          foreach($customer as $p)  :
                        ?>

                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td align="center"><?=$p->kode_customer?></td>
                            <td class="text-center"><?=$p->nama_customer?></td>
                            <td class="text-center"><?=$p->tlp_customer?></td>
                            <td class="text-center"><?=$p->keterangan?></td>
                            <td class="actions" align="center">
                                <a href="<?=base_url('admin/customer_ubah')?>/<?=$p->kode_customer?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="<?=base_url('admin/customer_hapus')?>/<?=$p->kode_customer?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
	            </tbody>
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