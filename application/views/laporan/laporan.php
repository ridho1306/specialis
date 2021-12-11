 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Laporan
            <small>Cetak Laporan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Laporan</a></li>            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
                      
                <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Cetak Laporan</h3>
                </div>
                <form method="POST" action="<?php echo base_url("index.php/Laporan/cetak_laporan");?>"target="_blank" >
                <div class="box-body">
                  <!-- Date range -->
                  <div class="form-group">
                    <label>Date range:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation" name = "range_laporan">
                    </div><!-- /.input group -->                                        
                    </div><!-- /.input group -->                             
                  
                  <!-- Date and time range -->
                  <div class="form-group">                    
                    <div class="input-group">
                      <button class="btn btn-default pull-right" id="daterange-btn">Cetak Laporan</button>
                    </div>
                  </div><!-- /.form group -->
                </div><!-- /.box-body -->          
                </form>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->