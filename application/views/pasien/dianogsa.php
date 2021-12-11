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
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->


            <div class="col-sm-8">              
              <form action = "<?php echo base_url('index.php/Pasien/insert_resep');?>/" method="post" name="autoSumForm">
                <div class="box">                
                  <div class="box-header">
                    <h3 class="box-title">RESEP</h3>
                      <div class="box-tools">                    
                      </div>
                  </div><!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tbody><tr>
                      <th>No</th>
                       <th>Nama Obat</th>
                        
                        <th>Jumlah</th>
                        
                      
                      </tr>
                      <?php for($i=0;$i<$n;$i++) 
                      { 
                      ?>
                      <tr withd>
                      
                      <td>
                      <?php echo $i+1; ?> </td>
                        <td>
                         <select name='<?php echo "id_obat["."$i"."]"?>' class="span9"?>>
                            <option value=0> - Pilih Barang - </option>
                              <?php 
                                foreach ($list as $barang)
                                   {
                                      echo "<option value='".$barang->id_obat."'/> ".$barang->nama_barang."</option>";
                              ?>
                              <?php } ?>
                          </select>
                        </td>
                    
                        <td>
 
                          <input type="number"  name="<?php echo "jumlah["."$i"."]" ?>" class="span3" min="0" />
                        </td>
                       
                        
                      </tr>   
                        <?php }?> 

                    </tbody>
                                    
                      
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
         
                  </tfoot>
                    </table>
                    <br>
                  </div><!-- /.box-body -->   
                  <input type="hidden" name="id_dianogsa"  value="<?php echo $id_dianogsa; ?>" class="span3" /> 
                        <input type ="hidden" name="jumlah_baris" value="<?php echo $n;?>">          
                  <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </form>
            </div><!-- /.box -->
              

            </div>
            </section><!-- right col -->           
          </div>



        