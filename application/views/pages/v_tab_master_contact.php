<?php if(isset($data_contact)){
foreach ($data_contact as $row){
?>

<form class="form-group" method="post" action="<?php echo site_url('master/edit_contact')?>">
    <div class="control-group">
        <label class="control-label">Nama Perusahaan</label>
        <div class="controls">
            <input class="form-control" name="nama" type="text" value="<?php echo $row->nama?>" required maxlength="30" readonly>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Deskripsi Perusahaan</label>
        <div class="controls">
            <input class="form-control" name="desc" type="text" value="<?php echo $row->desc?>" required maxlength="100" readonly>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Pemilik Perusahaan</label>
        <div class="controls">
            <input class="form-control" name="owner" type="text" value="<?php echo $row->owner?>" required maxlength="30" readonly>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Telp / HP </label>
        <div class="controls">
            <input class="form-control" name="telp" type="text" value="<?php echo $row->telp?>" required maxlength="30">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Email</label>
        <div class="controls">
            <input class="form-control" name="email" type="email" value="<?php echo $row->email?>" required maxlength="30" readonly>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Website</label>
        <div class="controls">
            <input class="form-control" name="website" type="text" value="<?php echo $row->website?>" required maxlength="50" readonly>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Alamat</label>
        <div class="controls">
            <textarea class="form-control" name="alamat" rows="5" required readonly><?php echo $row->alamat?></textarea>
        </div>
    </div>

    <input name="id" type="hidden" value="1">
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn btn-info"><i class="icon-edit icon-white"></i> Ubah Kontak </button>
        </div>
    </div>
</form>

<?php }
}
?>