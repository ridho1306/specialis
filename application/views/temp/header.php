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
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/ionicons/2.0.1/css/ionicons.min.css"> 
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
<script type="text/javascript" src="<?php echo base_url('assets');?>/temp/js/script.js"></script> 
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/select2/select2.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/timepicker/bootstrap-timepicker.min.css">
</head>
<body class="sidebar-mini skin-purple wysihtml5-supported">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MIM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><h4> Dokter Specialis THTKL</h4></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">              
                <li>
                  <a href="<?php echo site_url('Profil');?>">
                    <i class="fa fa-user"></i>
                    <span class="text-black "><b>
                    <?php echo $this->session->userdata('nama'); ?> ||
                    <?php echo $this->session->userdata('unit_pegawai'); ?>
                    </b></span>
                  </a>
                </li>

             

                <li>
                  <a href="<?php echo site_url('Login/logout');?>">
                    <i class="glyphicon glyphicon-off"></i>
                    <span class="text-black "><b>Logout </b></span>
                  </a>
                </li>
             </ul>
          </div>
        </nav>
      </header> 