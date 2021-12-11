 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <h1>
              <?php echo $extra ?>
            </h1>
            
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $extra ?></a></li>
             
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
          <!-- Main row --> 
          <div class="row">
 

      <div class="container-fluid">
          
            <div class="row">
                  <div class="col-xl-12">
                      <div class="breadcrumb-holder">
                          <div class="clearfix"></div>
                      </div>
                  </div>
            </div>
            <!-- end row -->  

            <div class="alert alert-info" role="alert">
            <h3 class="alert-heading">Halo <?php echo $this->session->userdata('nama');?> ,</h3>
            <h4 class="alert-heading">Selamat Datang di Website Rekam Medis Dokter dr. Denny Satria Utama, M.Si. Med., FICS., Sp. T.H.T.K.L.(K)</h4>
            <p></p>
            <p>Pada sistem ini, anda mempunyai kepentingan sebagai <b><?php echo $this->session->userdata('unit_pegawai');?></b>.</p>
            <p>Untuk lebih lanjut, anda dapat klik berbagai menu di sebelah kiri untuk melakukan kegiatan sesuai kepentingan anda.</p>
            </div>
            </div>
            
            </div>
        </section>
      </div>
