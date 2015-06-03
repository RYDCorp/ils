<table class="table table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Client</th>
        <th>Nama Client</th>
        <th>Alamat</th>
        <th>Email</th>
        <th class="span2">
            <a href="#modalAddPelanggan" class="btn btn-primary" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> Tambah Client
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_pelanggan)){
        foreach($data_pelanggan as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->kd_pelanggan; ?></td>
                <td><?php echo $row->nm_pelanggan; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->email; ?></td>
                <td>
                    <a class="btn btn-info" href="#modalEditPelanggan<?php echo $row->kd_pelanggan?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a>
                    <a class="btn btn-danger" href="<?php echo site_url('master/hapus_pelanggan/'.$row->kd_pelanggan);?>"
                       onclick="return confirm('Anda yakin?')"> <i class="icon-remove"></i> Hapus</a>
                </td>
            </tr>

        <?php }
    }
    ?>

    </tbody>
</table>

<!-- ============ MODAL ADD PELANGGAN =============== -->
<div id="modalAddPelanggan" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Client</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_pelanggan')?>">
        <div class="modal-body">
            <div class="control-group">
                <label class="control-label">Kode Client</label>
                    <input name="kd_pelanggan" type="text" class="form-control" value="<?php echo $kd_pelanggan; ?>" readonly>
                </div>
          

                <label class="control-label" >Nama Client</label>
        
                    <input name="nm_pelanggan" class="form-control" type="text" placeholder="Input Nama Client">
          
    
                <label class="control-label" >Alamat</label>
           
                    <input name="alamat" type="text" class="form-control" placeholder="Input Alamat...">
       
 
                <label class="control-label">Email</label>
     
                    <input name="email" class="form-control"  type="email" placeholder="Input Email..." >
           
        </div>
        <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
</div>
</div>
</div>


<!-- ============ MODAL EDIT PELANGGAN =============== -->
<?php
if(isset($data_pelanggan)){
    foreach($data_pelanggan as $row){
        ?>
        <div id="modalEditPelanggan<?php echo $row->kd_pelanggan?>" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Pelanggan</h3>
            </div>
            <form class="form-group" method="post" action="<?php echo site_url('master/edit_pelanggan')?>">
                <div class="modal-body">
                        <label class="control-label">Kode Pelanggan</label>
     <input name="kd_pelanggan" class="form-control" type="text" value="<?php echo $row->kd_pelanggan; ?>" readonly>
                
                 
                        <label class="control-label" >Nama Pelanggan</label>
                     
                            <input class="form-control" name="nm_pelanggan" class="form-control" type="text" value="<?php echo $row->nm_pelanggan; ?>">
                  
                        <label class="control-label" >Alamat</label>
                    
                            <input class="form-control" name="alamat" type="text" value="<?php echo $row->alamat; ?>">
                     
                
                        <label class="control-label">Email</label>
                  
                            <input class="form-control"name="email" type="email" value="<?php echo $row->email; ?>">
               </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        </div>
        </div>

    <?php }
}
?>