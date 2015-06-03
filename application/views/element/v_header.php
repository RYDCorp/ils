<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Logistik PT. Bonet">
    <meta name="author" content="Djava-ui">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('flat/dist/asset/dist/css/flat-ui.css')?>"/>
 <link rel="stylesheet" href="<?php echo base_url('asset/css/grid.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/dashboard.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/jumbotron.css')?>"/>

    <link rel="stylesheet" href="<?php echo base_url('asset/css/chosen.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/demo.css')?>"/>
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico')?>">

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/dist/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/chosen.jquery.js');?>"></script>
    <script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>

</head>

<body>
  <body>
    <style>
      body {
        min-height: 2000px;
      }

      .navbar-static-top {
        margin-bottom: 19px;
      }
    </style>
<div class="container">

    <!--========================= Header + Navbar ==============================-->
    <?php if ($this->session->userdata('LEVEL') == 'admin'){ ?>
       <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
 <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Sistem Informasi Logistik</a>
        </div>
    <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                
                        <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
                            <a href="<?php echo site_url('dashboard')?>"><i class="icon-home"></i> Dashboard</a>
                        </li>
                        <li class="<?php if(isset($active_b_keluar)){echo $active_b_keluar ;}?>">
                            <a href="<?php echo site_url('b_keluar')?>"><i class="icon-barcode"></i> Barang Keluar</a>
                        </li>
                        <li class="<?php if(isset($active_laporan)){echo $active_laporan ;}?>">
                            <a href="<?php echo site_url('laporan')?>"><i class="icon-file"></i> Laporan</a>
                        </li>
                        <li class="<?php if(isset($active_master)){echo $active_master ;}?>">
                            <a href="<?php echo site_url('master')?>"><i class="icon-cog"></i> Master Data</a>
                        </li>
                        <li class="<?php if(isset($active_about)){echo $active_about ;}?>">
                            <a href="<?php echo site_url('about')?>"><i class="icon-cog"></i> Tentang kami</a>
                        </li>
                        <li><a href="<?php echo site_url('login/logout')?>" ;></i>  Logout</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
   
    <?php } else { ?>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
 <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Sistem Informasi Logistik</a>
        </div>
    <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                   <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
                            <a href="<?php echo site_url('dashboard')?>"><i class="icon-home"></i> Dashboard</a>
                        </li>
                        <li class="<?php if(isset($active_b_keluar)){echo $active_b_keluar ;}?>">
                            <a href="<?php echo site_url('b_keluar')?>"><i class="icon-barcode"></i> Barang Keluar</a>
                        </li>
                        <li class="<?php if(isset($active_laporan)){echo $active_laporan ;}?>">
                            <a href="<?php echo site_url('laporan')?>"><i class="icon-file"></i> Laporan</a>
                        </li>
                           <li class="<?php if(isset($active_about)){echo $active_about ;}?>">
                            <a href="<?php echo site_url('about')?>"><i class="icon-cog"></i> Tentang kami</a>
                        </li>
                    </li>
                   <li><a href="<?php echo site_url('login/logout')?>" ;></i>  Logout</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <br>

<?php } ?>