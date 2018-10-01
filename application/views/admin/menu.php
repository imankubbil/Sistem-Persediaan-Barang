
<!-- menu samping -->
<ul class="sidebar-nav">
    <li>
        <a href="<?=base_url()?>admin/dashboard" class=" active"><i class="fa fa-tachometer sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Halaman Utama</span></a>
    </li>
    
     <li>
        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-settings sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Master</span></a>
        <ul>
            <li>
                <a href="<?=base_url()?>admin/kategori"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Kategori</span></a>
            </li>

            <li>
                <a href="<?=base_url()?>admin/barang"><i class="fa fa-cube sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Barang</span></a>
            </li>
            
            <li>
                <a href="<?=base_url()?>admin/supplier"><i class="fa fa-truck sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Supplier</span></a>
            </li>
            
            <li>
                <a href="<?=base_url()?>admin/customer"><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Customer</span></a>
            </li>
        </ul>
    </li>
    
    <li class="sidebar-header">
        <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"></a></span>
        <span class="sidebar-header-title">Transaksi</span>
    </li>
    <li>
        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-shopping_cart sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Barang Masuk</span></a>
        <ul>
            <li>
                <a href="<?=base_url()?>admin/barang_masuk">Transaksi Barang Masuk</a>
            </li>
            <li>
                <a href="<?=base_url()?>laporan_barangmasuk">Laporan Barang Masuk</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-share_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Barang Keluar</span></a>
        <ul>
            <li>
                <a href="<?=base_url()?>admin/barang_keluar">Transaksi Barang Keluar</a>
            </li>
            <li>
                <a href="<?=base_url()?>laporan_barangkeluar">Laporan Barang Keluar</a>
            </li>
        </ul>
    </li>   
    
    <li class="sidebar-header">
        <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
        <span class="sidebar-header-title">Laporan</span>
    </li>
    <li>
        <a href="<?=base_url()?>admin/lapbarang"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Laporan Barang</span></a>
    </li>    
    <li>
        <a href="<?=base_url()?>admin/lapsupplier"><i class="gi gi-film sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Laporan Supplier</span></a>
    </li>
    <li>
        <a href="<?=base_url()?>admin/lapcustomer"><i class="gi gi-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Laporan Customer</span></a>
    </li>

</ul>
