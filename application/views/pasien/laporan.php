<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Klinik Dokter Specialis THTKL dr. Denny Satria Utama, M.Si. Med., FICS., Sp. T.H.T.K.L.(K)</title>
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
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            
          </ol>
        </section>  

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <div class='box-header text-center'> <h2>
              Klinik Dokter Specialis THTKL dr. Denny Satria Utama, M.Si. Med., FICS., Sp. T.H.T.K.L.(K)</h2>
            </div> 
            <div class="col-md-5">
            
            </div> 
             <div class="box-body">
              <?php if($this->session->flashdata('berhasil')): ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                  <?php echo $this->session->flashdata('berhasil');?>
                </div>
              <?php endif; ?>
              <?php if($this->session->flashdata('gagal')): ?>
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Gagal!</h4>
                  <?php echo $this->session->flashdata('gagal');?>
                </div>
              <?php endif; ?>
          
           <table  class="table table-bordered text-center "  id="persediaan_keluar" >
                <thead>
                  <tr>
                    <th> No</th>
                    <th>Nama Pasien</th>
                    <th>No kartu</th>
                    <th>Dianogsa</th>
                    <th>Terapi</th>
                    <th>Tindakan</th>
                    <th>Tanggal</th>
                    <th>Biaya</th>
                  </tr>
                </thead>
                
                <tbody class="">
                  <?php $i=0; if($pengguna != 0)
                  {                  
                    $total=0;
                    foreach ($pengguna as $out) {
                    echo 
                      "<tr>".
                       "<td>".($i+1)."</td>".
                        "<td>".$out->nama_pasien."</td>".
                        "<td>".$out->no_kartu."</td>".
                        "<td>".$out->dianogsa."</td>".
                        "<td>".$out->terapi."</td>".
                        "<td>".$out->tindakan."</td>".
                        "<td>".$out->tanggal."</td>".
                        "<td>".$this->fungsi->rupiah($out->biaya)."</td>";
                        $total=$total + $out->biaya;
                                              
                      echo "</tr>";
                       $i++;
                    }
                   }
                 
                  ?>
                  <tr>
                    <td colspan="6">Total</td>
                    <td><?= $this->fungsi->rupiah($total) ?></td>
                  </tr>
                </tbody>
                </form>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

</body>
</html>