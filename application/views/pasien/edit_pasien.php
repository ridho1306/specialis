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
        <div class="row">
           <div class="col-md-7">
              <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title ">Dianogsa Pasien</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action = "<?php echo base_url('index.php/Pasien/update/'.$pengguna->id_pasien);?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama pasien</label>

                  <div class="col-sm-7">
                    <input type="input" name="nama_pasien" class="form-control" value="<?php echo $pengguna->nama_pasien; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">NO KTP</label>
                  <div class="col-sm-7">
                    <input type="input" name="no_ktp" class="form-control" value="<?php echo $pengguna->no_ktp; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">Tanggal lahir</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" id="jadwalPemakaian0" name="tgl_lahir" value="<?php echo $pengguna->tgl_lahir; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" name="alamat"  ><?php echo $pengguna->alamat; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">Pekerjaan</label>
                  <div class="col-sm-7">
                    <input type="input" name="pekerjaan" class="form-control" value="<?php echo $pengguna->pekerjaan; ?>">
                  </div>
                </div>


                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">No HP</label>
                  <div class="col-sm-7">
                    <input type="input" name="no_telp" class="form-control" value="<?php echo $pengguna->no_telp; ?>">
                  </div>
                       
              </div>

 


              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/pasien/daftar_pasien') ?>">
                    <button type="button" class="btn btn-danger"><i class="fa fa-reply"> Back</i></button>
                </a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            <!-- pembertihuaan -->
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
         <!--akhir pembertihuaan -->
          </div>
        </div>                      
         
        

            </section><!-- right col -->

          </div><!-- /.row (main row) -->


