
<table class="table table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Harga</th>
        <th class="span2">
            <a href="#modalAddBarang" class="btn btn-primary" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Barang
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

    <?php
    $no=1;
    if(isset($data_barang)){
    foreach($data_barang as $row){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->kd_barang; ?></td>
        <td><?php echo $row->nm_barang; ?></td>
        <td><?php echo $row->stok; ?></td>
        <td><?php echo currency_format($row->harga);?></td>
        <td>
            <a class="btn btn-info" href="#modalEditBarang<?php echo $row->kd_barang?>" data-toggle="modal"><i class="fui-new"></i> Edit</a>
            <a class="btn btn-danger" href="<?php echo site_url('master/hapus_barang/'.$row->kd_barang);?>"
               onclick="return confirm('Anda yakin?')"> <i class="icon-remove"></i> Hapus</a>
        </td>
    </tr>

    <?php }
    }
    ?>

    </tbody>
</table>


<!-- ============ MODAL ADD BARANG =============== -->
<div id="modalAddBarang" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Data Barang</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_barang')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">Kode Barang</label>
                    <input name="kd_barang" type="text" value="<?php echo $kd_barang; ?>" class="form-control"  readonly>
                </div>
      
                <label class="control-label" >Nama Barang</label>
   
                    <input name="nm_barang" type="text" class="form-control" placeholder="Input Nama Barang...">
         
       
                <label class="control-label" >Stok</label>
               
                    <input name="stok" type="text" class="form-control" placeholder="Input Stok...">

                <label class="control-label">Harga</label>
           
                    <input name="harga" type="text" class="form-control" placeholder="Input Harga...">
               
        </div>
        <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
</div>
</div>
</div>


<!-- ============ MODAL EDIT BARANG =============== -->
<?php
if (isset($data_barang)){
    foreach($data_barang as $row){
        ?>
        <div id="modalEditBarang<?php echo $row->kd_barang?>" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Barang</h3>
            </div>
            <form class="form-group" method="post" action="<?php echo site_url('master/edit_barang')?>">
                <div class="modal-body">
                        <label class="control-label">Kode Barang</label>
                            <input name="kd_barang" type="text" value="<?php echo $row->kd_barang;?>" placeholder="Kode barang"  class="form-control" readonly>
                        <label class="control-label" >Nama Barang</label>
                            <input name="nm_barang" type="text" value="<?php echo $row->nm_barang;?>" placeholder="Nama barang" class="form-control" >
                        <label class="control-label" >Stok</label>
                            <input name="stok" type="text" value="<?php echo $row->stok;?>"placeholder="Stok" class="form-control" >
         <label class="control-label">Harga</label>
                    
                            <input name="harga" type="text" value="<?php echo $row->harga;?>"placeholder="Harga" class="form-control" >
                     
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        </div>
        </div>

    <?php }
}
?>