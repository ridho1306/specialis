     <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <img src="<?php echo base_url('assets');?>/logo.jpeg" class="profile-user-img img-responsive img-circle" alt="User Image">
           
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <?php if($judulhalaman == "Home"):?>
                <li class= "active">
                    <a href=<?php echo base_url('index.php/dashboard') ?>>
                      <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-home"> </i> <span >Home</span></div>
                    </a>
                </li>
            <?php else:?>
                <li>
                    <a href=<?php echo base_url('index.php/dashboard') ?>>
                      <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-home"> </i><span > Home</span></div> 
                    </a>
                </li>
            <?php endif;?>

            <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
              <?php if($judulhalaman == "Pegawai"):?>
                  <li class= "active">
                        <a href="<?php echo base_url('index.php/Pegawai') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="glyphicon glyphicon-user  "></i> <span>Karyawan</span></div> 
                        </a>
                  </li>
              <?php else:?>
                  <li>
                        <a href="<?php echo base_url('index.php/Pegawai') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="glyphicon glyphicon-user  "></i> <span>Karyawan</span></div> 
                        </a>
                  </li>
            <?php endif;
              endif;?> 


            <?php if($this->session->userdata('unit_pegawai') == "Admin" ||  $this->session->userdata('unit_pegawai') =="Perawat"):?>
              <?php if($judulhalaman == "Pendaftaran Pasien"):?>
                  <li class= "active">
                      <a href="<?php echo base_url('index.php/Pasien/form') ?>">
                      <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-users  "></i> <span>Pendaftaran Pasien</span></div></a></li>  
            <?php else:?>
                      <li><a href="<?php echo base_url('index.php/Pasien/form') ?>"><div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-users  "></i><span> Pendaftaran Pasien</span></div></a></li>  
            <?php endif;
                endif;?>
                
            <?php if( $this->session->userdata('unit_pegawai') =="Admin" ||  $this->session->userdata('unit_pegawai') =="Perawat"):?>
              <?php if($judulhalaman == "Daftar Pasien"):?>
                  <li class= "active">
                        <a href="<?php echo base_url('index.php/Pasien/daftar_pasien') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-users  "></i> <span>Daftar Pasien</span></div> 
                        </a>
                  </li> 
              <?php else:?>
                  <li>
                        <a href="<?php echo base_url('index.php/Pasien/daftar_pasien') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-users  "></i> <span>Daftar Pasien</span></div> 
                        </a>
                  </li>
            <?php endif;
              endif;?> 
                  
            <?php if( $this->session->userdata('unit_pegawai') =="Dokter" ):?>
              <?php if($judulhalaman == "Pasien"):?>
                  <li class= "active">
                        <a href="<?php echo base_url('index.php/Pasien') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-users  "></i> <span>Pasien</span></div> 
                        </a>
                  </li> 
              <?php else:?>
                  <li>
                        <a href="<?php echo base_url('index.php/Pasien') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-users  "></i> <span>Pasien</span></div> 
                        </a>
                  </li>
            <?php endif;
              endif;?> 

            <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
              <?php if($judulhalaman == "Pembayaran"):?>
                  <li class= "active">
                        <a href="<?php echo base_url('index.php/Pembayaran') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-dollar  "></i> <span>Pembayaran</span></div> 
                        </a>
                  </li>
              <?php else:?>
                  <li>
                        <a href="<?php echo base_url('index.php/Pembayaran') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-dollar  "></i> <span>Pembayaran</span></div> 
                        </a>
                  </li>
            <?php endif;
              endif;?> 


            <?php if($this->session->userdata('unit_pegawai') == "Admin" ||$this->session->userdata('unit_pegawai') == "Dokter"):?>
              <?php if($judulhalaman == "History"):?>
                  <li class= "active">
                      <a href="<?php echo base_url('index.php/Pasien/history') ?>">
                      <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-book  "></i> <span>History</span></div></a></li>  
            <?php else:?>
                      <li><a href="<?php echo base_url('index.php/Pasien/history') ?>"><div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-book  "></i><span> History</span></div></a></li>  
            <?php endif;
                endif;?>

            <?php if($this->session->userdata('unit_pegawai') == "Admin" ):?>
              <?php if($judulhalaman == "Tindakan"):?>
                  <li class= "active">
                      <a href="<?php echo base_url('index.php/Tindakan') ?>">
                      <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-book  "></i> <span>Tindakan</span></div></a></li>  
            <?php else:?>
                      <li><a href="<?php echo base_url('index.php/Tindakan') ?>"><div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-book  "></i><span> Tindakan</span></div></a></li>  
            <?php endif;
                endif;?>

<!--             <?php if($this->session->userdata('unit_pegawai') == "Admin" ||$this->session->userdata('unit_pegawai') == "Dokter"):?>
              <?php if($judulhalaman == "Kunjungan Pasien"):?>
                  <li class= "active">
                      <a href="<?php echo base_url('index.php/Pasien/kunjungan') ?>">
                      <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-user  "></i> <span>Kunjungan</span></div></a></li>  
            <?php else:?>
                      <li><a href="<?php echo base_url('index.php/Pasien/kunjungan') ?>"><div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-user  "></i><span> Kunjungan</span></div></a></li>  
            <?php endif;
                endif;?> -->

            <?php if($this->session->userdata('unit_pegawai') == "Dokter"):?>
              <?php if($judulhalaman == "Laporan"):?>
                  <li class= "active">
                        <a href="<?php echo base_url('index.php/Laporan') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-print  "></i> <span>laporan</span></div> 
                        </a>
                  </li>
                <?php else:?>
                  <li>
                        <a href="<?php echo base_url('index.php/Laporan') ?>">
                          <div class="btn btn-block btn-social  btn bg-purple"><i class="fa fa-print  "></i> <span>laporan</span></div> 
                        </a>
                  </li>
              <?php endif;
                endif;?>  
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>