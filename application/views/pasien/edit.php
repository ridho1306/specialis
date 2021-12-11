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
            <form class="form-horizontal" action = "<?php echo base_url('index.php/Pasien/dianogsa/'.$pengguna->id_pasien);?>/" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputNama" class="col-sm-3 control-label">Nama pasien</label>

                  <div class="col-sm-7">
                    <label for="inputNama" class="form-control"><?php echo $pengguna->nama_pasien; ?> </label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">NO Kartu</label>
                  <div class="col-sm-7">
                    <label for="inputNama" class="form-control"><?php echo $pengguna->no_kartu; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="identitas" class="col-sm-3 control-label">NO KTP</label>
                  <div class="col-sm-7">
                    <label for="inputNama" class="form-control"><?php echo $pengguna->no_ktp; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" disabled="alamat"  ><?php echo $pengguna->alamat; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">Tanggal Lahir</label>
                  <div class="col-sm-7">
                    <label for="inputNama" class="form-control"><?php echo $pengguna->tgl_lahir; ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">No HP</label>
                  <div class="col-sm-7">
                    <label for="inputNama" class="form-control"><?php echo $pengguna->no_telp; ?></label>
                  </div>
                       
              </div>

                <div class="form-group">
                  <label for="Alamat" class="col-sm-3 control-label">Dianogsa</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" name="dianogsa"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">Terapi</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" name="terapi"></textarea>
                  </div>
                       
              </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">Tindakan</label>
                  <div class="col-sm-7">
                       <select  name='id_tindakan' class="form-control">
                        <?php foreach ($tindakan as $tindak) { ?>
                        <option value="<?=$tindak->id_tindakan ?>"><?=$tindak->tindakan ?></option>
                        <?php } ?>
                        </select>
                  </div>
                       
              </div>

                <div class="form-group">
                  <label for="HP" class="col-sm-3 control-label">Biaya</label>
                  <div class="col-sm-7">
                       <select  name='biaya' class="form-control">
                        <option value="0">Free</option>
                        <option value="250000">Rp. 250.000,00</option>
                        <option value="500000">Rp. 500.000,00</option>
                        </select>
                  </div>
                       
              </div>


              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="<?php echo base_url('index.php/pasien') ?>">
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


