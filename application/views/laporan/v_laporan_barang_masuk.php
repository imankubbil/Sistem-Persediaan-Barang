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
                                <hr>
                                <h3 class="text-center">Laporan Barang Masuk</h3>
                                <hr>
                            <!-- Invoice Content -->
                            <!-- 2 Column grid -->
                            <div class="row block-section">
                                <!-- Company Info -->
                                <div class="col-sm-6 col-sm-offset-5">
                                    
                                </div>
                                <!-- END Company Info -->
                            </div>
                            <!-- END 2 Column grid -->

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">No Barang Masuk</th>
                                            <th class="text-center">Tanggal Masuk</th>
                                            <th class="text-center">Customer</th>
                                            <th class="text-center">Barang</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>

                                    <?php 
                                    $no = 1; 
                                    foreach($bin as $in)  :
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td class="text-center"><?=$no?>.</td>
                                            <td class="text-center"><?=$in->no_brgmasuk?></td>
                                            <td class="text-center"><?=$in->tgl_masuk?></td>
                                            <td class="text-center"><?=$in->username?></td>
                                            <td class="text-center"><?=getBarangmasuk($in->kode_barang)?></td>
                                            <td class="text-center"><?=$in->qty?></td>
                                        </tr>
                                        <?php $no++; endforeach ?>

                                        <tr class="active">
                                            <td colspan="5" class="text-right"><span class="h5"><strong>Total Barang Masuk : </strong></span></td>
                                            <td class="text-right"><span class="h3"><strong><?=$total?></strong></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <hr>
                            </div>
                        </div>
                        <!-- END Invoice Block -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

    
</body>
</html>