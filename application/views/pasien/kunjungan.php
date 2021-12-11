
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><?php echo $judulhalaman ?></h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            
            <li class="active"><?php echo $judulhalaman ?></li>
          </ol>
        </section>  

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <div class='box-header'> 
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
                    <th>Biaya</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                
                <tbody class="">
                  <?php $i=0; if($pengguna != 0)
                  {                  
                    foreach ($pengguna as $out) {
                    echo 
                      "<tr>".
                       "<td>".($i+1)."</td>".
                        "<td>".$out->nama_pasien."</td>".
                        "<td>".$out->no_kartu."</td>".
                        "<td>".$out->dianogsa."</td>".
                        "<td>".$out->terapi."</td>".
                        "<td>".$out->tindakan."</td>".
                        "<td>".$this->fungsi->rupiah($out->biaya)."</td>".
                        "<td>".$out->tanggal."</td>";       
                                              
                      echo "</tr>";
                       $i++;
                    }
                   }
                 
                  ?>
                </tbody>
                </form>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

