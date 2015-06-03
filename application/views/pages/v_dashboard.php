<body><!--========================= Content Wrapper ==============================-->

          <!-- COLOR PALETTE -->
          <div class="container">
           <div class="page-header">
              <h3 class='box-title'><i class="fa fa-tag"></i> <?php echo $title?></h3>
            </div>
<?php if(isset($dt_contact)){
foreach($dt_contact as $row){
?>
    <div class="row well" style="text-align: right">
       <h1 class="text-info" style="text-align: right">Sistem Informasi Logistik</h1>
        <h3><?php echo $row->nama?></h3>
        <h4><?php echo $row->desc?></h4>
        <h5 class="muted"><?php echo $row->alamat?></h5>
        <h5 class="muted"><?php echo $row->email?> || <?php echo $row->telp?> || <?php echo $row->website?></h5>
</div>
</div>
<?php }
}
?>

</body>