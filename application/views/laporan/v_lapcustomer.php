<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="text-center"><?=$title?></title>

    <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_URL()?>assets/img/favicon.png">

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">       
        <link rel="stylesheet" href="<?=base_url()?>assets/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?=base_url()?>assets/js/vendor/modernizr.min.js"></script>
</head>
<body>

                <!-- Page content -->
                    <div id="page-content">
                        <!-- END Invoice Header -->

                        <!-- Invoice Block -->
                        <div class="block full">
                            <!-- Invoice Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" onclick="App.pagePrint();"><i class="fa fa-print"></i> Print</a>
                                </div>
                                <h2>PT Agel Langgeng</h2>
                            </div>
                            <div class="row push-top-bottom">
                                <div class="col-xs-12">
                                    <p><img src="<?=base_url()?>assets/img/logo_cetak.png" alt="image" class="img-responsive"></p>
                                </div>
                                    <hr>
                                        <h3 class="text-center">Laporan Data Customer</h3>
                                    <hr>
                                </div>
                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Customer</th>
                                            <th class="text-center">Nama Customer</th>
                                            <th class="text-center">Telepon Customer</th>
                                            <th class="text-center">Keterangan</th>
                                        </tr>
                                    </thead>

                                    <?php 
                                    $no = 1; 
                                    foreach($cust as $c)  :
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td class="text-center"><?=$no?>.</td>
                                            <td class="text-center"><?=$c->kode_customer?></td>
                                            <td class="text-center"><?=$c->nama_customer?></td>
                                            <td class="text-center"><?=$c->tlp_customer?></ctd>
                                            <td class="text-center"><?=$c->keterangan?></td>
                                        </tr>
                                        <?php $no++; endforeach ?>

                                        <tr class="active">
                                            <td colspan="6" class="text-right"><span class="h5"><strong>Total Stok Barang : </strong></span></td>
                                            <td class="text-right"><span class="h3"><strong><?=$total?></strong></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>                          
                             
                        </div>
                        <!-- END Invoice Block -->
                    </div>
                    <!-- END Page Content -->
                

    
</body>
</html>