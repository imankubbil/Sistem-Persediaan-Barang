<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Daftar Kategori
        </h1>
      </div>
    </div>
        

  <div class="block full">
    <div class="block-title">
        <h2><strong>Table</strong> Kategori</h2>
    </div>
    <div class="table-options clearfix">                    
        <div class="pull-left">
            <a href="<?=base_url('admin/kategori_tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>                           
        </div>
    </div>
    <!-- Responsive Full Content -->
    <div class="table-responsive">
        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th style="width: 50px;" class="text-center">No. </th>
                    <th class="text-center">Kode Kategori</th>
                    <th class="text-center">Nama Kategori</th>                    
                    <th style="width: 150px;" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                   <?php 
                          $no = 1; 
                          foreach($kategori as $p)  :
                        ?>      
                <tr>
                    <td class="text-center"><?=$no?>.</td>
                    <td class="text-center"><?=$p->kode_kategori?></td>
                    <td class="text-center"><?=$p->nama_kategori?></td>                    
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="<?=base_url('admin/kategori_ubah')?>/<?=$p->kode_kategori?>" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="<?=base_url('admin/kategori_hapus')?>/<?=$p->kode_kategori?>" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
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