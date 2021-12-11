<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dokter Specialis THTKL | Log in</title>
         <link rel="Shortcut Icon" href="<?php echo base_url('assets');?>/logo.jpeg"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/temp/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
  <div class="wrapper">
       <!-- <img class="img-responsive" src="<?php echo base_url('assets');?>/logo/Head.jpg" width="1350"> -->
       </div>


    <div class="login-box">

     <h2>
        <img src="<?php echo base_url('assets');?>/logo.jpeg" class="profile-user-img img-responsive img-circle" alt="">
         <span class="text-black description-block ">
          <b> Praktek Dokter THTKL</b><br> dr. Denny Satria Utama, Sp.T.H.T.K.L(K)., M.Si.Med., FICS</span>

         

         
                   
      </h2>              
                  
      <div class="box box-warning box-solid">
        <?php if(!$this->session->flashdata('login')): ?>
        <p class="login-box-msg">Sign in to start your session</p>
    
      <?php else: ?>
        <p class="login-box-msg"><?php echo $this->session->flashdata('login');?> </p>
      <?php endif; ?>
        <form action="<?php echo base_url('index.php/login');?>/autentication" method="post">
          
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="nip" name="nip">
            <span class="glyphicon glyphicon-user form-control-feedback bg-blue"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback bg-blue"></span>
          </div>
     
              <button type="submit" class="btn btn-default btn-block btn-flatt bg-blue">Sign In</button>
              <p></p>
           
        
        <p class="login-box-msg widget-user-header bg-x color-palette text-black"><strong>Copyright &copy; 2021</strong> -.</p>
            </div><!-- /.col -->
            </form>                    
      </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->

    </body>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets');?>/temp/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets');?>/temp/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets');?>/temp/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
