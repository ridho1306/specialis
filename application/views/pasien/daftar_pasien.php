
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
                    <th>NO KTP</th>
                    <th>No Kartu</th>
                    <th>Pekerjan</th>
                    <th>Tgl Lahir</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Action</th>
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
                        "<td>".$out->no_ktp."</td>".
                        "<td>".$out->no_kartu."</td>".
                        "<td>".$out->pekerjaan."</td>".
                        "<td>".$out->tgl_lahir."</td>".
                        "<td>".$out->alamat."</td>".
                        "<td>".$out->no_telp."</td>".
                        '<td class="col-md-2">
                            <center>'; ?>
                                <a class="btn btn-social-icon text-red" onclick="return confirm('Hapus data?')" title="Delate" href="<?php echo base_url('index.php/pasien/delete/'.$out->id_pasien) ?>"><i class="fa fa-remove"></i></a> 
                                <a class="btn btn-social-icon text-white"  title="Delate" href="<?php echo base_url('index.php/pasien/edit/'.$out->id_pasien) ?>"><i class="fa fa-pencil"></i></a> 
                                <a class="btn btn-social-icon text-blue" onclick="return confirm('Masukan Pasien keantrian?')"  title="Booking" href="<?php echo base_url('index.php/pasien/pendaftaran/'.$out->id_pasien) ?>"><i class="fa fa-book"></i></a> 

                                <?php echo '
                                <a class="btn btn-social-icon text-green" title="View" href="'.base_url("index.php/pasien/detail/".$out->id_pasien).'"><i class="fa fa-eye"></i></a>    
                                <a class="btn btn-social-icon text-yellow" title="Kartu Pasien" target="_blank" href="'.base_url("index.php/pasien/kartu/".$out->id_pasien).'"><i class="fa fa-file"></i></a>  
                                
                            </center>
                        </td>';       
                                              
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

