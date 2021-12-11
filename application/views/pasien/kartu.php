<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Dokter Specialis THTKL</title>
    <link rel="Shortcut Icon" href="<?php echo base_url('assets');?>/logo.jpeg"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome Icons -->
<link href="<?php echo base_url('assets'); ?>/temp/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="<?php echo base_url('assets'); ?>/temp/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onLoad="javascript:window.print()">
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <!-- <h1>
            <?php echo $judulhalaman ?>
            
          </h1> -->
         
        </section>

        <!-- Main content -->
        <section class="content">
         
              
          <!-- Main row -->
        <div class="">
           <div  width="200">
              <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title ">Kartu Pasien</h3>
            </div><div class="box box-info box-solid direct-chat direct-chat-info">
        <div class="box-header">
          <h3  align="center">dr. Denny Satria Utama, Sp.T.H.T.K.L(K)., M.Si.Med., FICS</h3>
          <h5  align="center">SIP. No. 446/IPD/0795/DPMPTSP-PPK/2020</h5>
          <h5  align="center"> Jl. Mayor Salim Batubara No. 65 C, Kelurahan Sekip Jaya, Kecamatan Kemuning, Kota Palembang</h5>
          <hr>
          
        </div><!-- /.box-header -->
        <table>
          <tr>
            <td width="100"></td>
            <td width="100"><h3>No Kartu</h3></td>
            <td><h3>: </h3></td>
            <td><h3><?php echo $pengguna->no_kartu; ?></h3></td>
          </tr>
          <tr>
            <td width="100"></td>
            <td width="100"><h3>Nama</h3></td>
            <td><h3>: </h3></td>
            <td><h3><?php echo $pengguna->nama_pasien; ?></h3></td>
          </tr>
          <tr>
            <td width="100"></td>
            <td width="100"><h3>Pekerjaan</h3></td>
            <td><h3>: </h3></td>
            <td><h3><?php echo $pengguna->pekerjaan; ?></h3></td>
          </tr>
          <tr>            <td width="100"></td>
            <td width="100"><h3>Alamat</h3></td>
            <td><h3>: </h3></td>
            <td><h3><?php echo $pengguna->alamat; ?></h3></td>
          </tr>
        </table>
            <div class="input-group" align="center">
              KARTU INI HARAP DIBAWAH SAAT BEROBAT
            </div>
        </div><!-- /.box-footer-->
      </div>
          </div>  
          </div>
          </div>      
         
        

            </section><!-- right col -->

          </div><!-- /.row (main row) -->
</body>
</html>


