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
              <h3 class="box-title ">Pendaftaran Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action = "<?php echo base_url('index.php/Pegawai/insert');?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama Pegawai</label>

                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="nama" placeholder="Nama Pegawai" required/>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">No Induk Pegawai</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="nip" placeholder="NIP">
                  </div>
                </div>

                <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jabatan</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="unit_pegawai">
                         <option  value="Admin">Admin</option>
                        <option  value="Perawat">Perawat</option>
                        <option  value="Dokter">Dokter</option>
                     </select>
                  </div>
              </div>

              <div class="form-group">
                  <label for="JK" class="col-sm-3 control-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="jenis_kelamin">
                        <option name="jenis_kelamin" value="Laki-Laki">Laki-Laki</option>
                        <option name="jenis_kelamin" value="Wanita">Wanita</option>
                     </select>
                  </div>
              </div>


                <div class="form-group">
                  <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">No HP</label>
                  <div class="col-sm-7">
                    <input type="input" class="form-control" name="no_hp" placeholder="No HP">
                  </div>
                       
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Daftar</button>
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


