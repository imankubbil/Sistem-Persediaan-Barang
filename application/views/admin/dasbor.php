<!-- Page content -->
  <div id="page-content">
    <!-- Dashboard 2 Header -->
    <div class="content-header">
      <ul class="nav-horizontal text-center">
        <li class="active">
          <a href="<?php echo base_url();?>admin"><i class="fa fa-home"></i> Home</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>admin/barang"><i class="fa fa-cubes"></i> Barang</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>admin/supplier"><i class="fa fa-truck"></i> Supplier</a>
        </li>
        <li>
          <a href="<?php echo base_url();?>admin/customer"><i class="gi gi-group"></i> Customer</a>
        </li>       
        <li>
          <a href="<?php echo base_url();?>admin/kategori"><i class="fa fa-pencil"></i> Kategori</a>
        </li>        
      </ul>
    </div>
    <!-- END Dashboard 2 Header -->

  <div class="content-header">
    <div class="header-section">
      <h1>Sistem Persediaan Barang Pada PT. Agel Langgeng</h1>      
    </div>
  </div>

   <!-- Quick Stats -->
  <div class="row text-center">
      <div class="col-sm-6 col-lg-3">
          <a href="#" class="widget widget-hover-effect2">
              <div class="widget-extra themed-background">
                  <h4 class="widget-content-light"><strong>Barang</strong></h4>
              </div>
              <div class="widget-extra-full"><span class="h2 animation-expandOpen"><?= $brg?></span></div>
          </a>
      </div>
      <div class="col-sm-6 col-lg-3">
          <a href="#" class="widget widget-hover-effect2">
              <div class="widget-extra themed-background-dark">
                  <h4 class="widget-content-light"><strong>Kategori</strong></h4>
              </div>
              <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?= $ktg?></span></div>
          </a>
      </div>
      <div class="col-sm-6 col-lg-3">
          <a href="#" class="widget widget-hover-effect2">
              <div class="widget-extra themed-background-dark">
                  <h4 class="widget-content-light"><strong>Supplier</strong></h4></h4>
              </div>
              <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?= $sup?></span></div>
          </a>
      </div>
      <div class="col-sm-6 col-lg-3">
          <a href="#" class="widget widget-hover-effect2">
              <div class="widget-extra themed-background-dark">
                  <h4 class="widget-content-light"><strong>Customer</strong></h4>
              </div>
              <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?= $cus?></span></div>
          </a>
      </div>
  </div>
  <!-- END Quick Stats -->

</div>

