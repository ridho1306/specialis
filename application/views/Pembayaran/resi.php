 <script>
  function printContent(el)
  {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>
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
            <?php if ($pengguna->status_pembayaran == 0) { ?>
                 <a href="<?php echo base_url('index.php/Pembayaran/bayar/'.$pengguna->id_dianogsa) ?>">
                    <button type="button" class="btn btn-danger"><i class="fa fa-print"> Bayar</i></button>
                </a>
            <?php } 
            else { ?>
                <button type="button" class="btn btn-warning " media="print" target=_blank onclick="printContent('area')"><i class="fa fa-print"> </i></button>
              <?php }?>

              <div class="box box-info" id="area">
            <div class="text-center">
              <h2 class="box-title">Resi Pembayaran</h2>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action = "<?php echo base_url('index.php/Pasien/dianogsa/'.$pengguna->id_dianogsa);?>/" method="post">
              <div class="box-body">
               
                  <div class="box-body">
                    <div class="col-md-10">
                              <p class="lead">Tanggal transaksi <?php echo $pengguna->tanggal; ?></p>

                              <div class="table-responsive">
                                <table class="table">
                                  <tbody><tr>
                                    <th style="width:50%">Nama:</th>
                                    <td><?php echo $pengguna->nama_pasien; ?></td>
                                  </tr>
                                  <tr>
                                    <th>No Kartu</th>
                                    <td><?php echo $pengguna->no_kartu; ?></td>
                                  </tr>
                                  <tr>
                                    <th>No KTP:</th>
                                    <td><?php echo $pengguna->no_kartu; ?></td>
                                  </tr>
                                  <tr>
                                    <th>Dianogsa:</th>
                                    <td><?php echo $pengguna->dianogsa; ?></td>
                                  </tr>
                                  <tr>
                                    <th>Terapi:</th>
                                    <td><?php echo $pengguna->terapi; ?></td>
                                  </tr>
                                  <tr>
                                    <th>Tindakan:</th>
                                    <td><?php echo $pengguna->tindakan; ?></td>
                                  </tr> 
                                  <tr>
                                    <th>Biaya:</th>
                                    <td><?php echo $this->fungsi->rupiah($pengguna->biaya); ?></td>
                                  </tr> 
                                </tbody></table>
                              </div>
                    </div>  

                  </div>


              <!-- /.box-body -->
              <div class="box-footer">
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


