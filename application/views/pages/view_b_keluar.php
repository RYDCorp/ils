<div class="container">
           <div class="page-header">
              <h3 class='box-title'><i class="fa fa-tag"></i> <?php echo $title?></h3>
            </div>
<!--================ Content Wrapper===========================================-->
<table class="table table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Kode Barang Keluar</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th class="span3">
            <a href="<?php echo site_url('b_keluar/tambah_barang_keluar')?>" class="btn btn-primary" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Barang Keluar
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_penjualan)){
        foreach($data_penjualan as $row){
            ?>
            <tr class="gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tanggal_penjualan)); ?></td>
                <td><?php echo $row->kd_barang_keluar; ?></td>
                <td><?php echo $row->jumlah; ?> Items</td>
                <td><?php echo currency_format($row->total_harga); ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo site_url('b_keluar/detail_barang_keluar/'.$row->kd_barang_keluar)?>">
                        <i class="icon-eye-open"></i> View</a>
                    <a class="btn btn-danger" href="<?php echo site_url('b_keluar/hapus/'.$row->kd_barang_keluar)?>"
                       onclick="return confirm('Anda Yakin ?');">
                        <i class="icon-trash"></i> Hapus</a>
                    <a class="btn btn-primary" href="<?php echo site_url('cetak/cetak_faktur_barang_keluar/'.$row->kd_barang_keluar)?>">
                        <i class="icon-print"></i> Print</a>
                </td>
            </tr>
        <?php }
    }
    ?>

    </tbody>
</table>



