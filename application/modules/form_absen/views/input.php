<!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		
		
	    <div id="container">
	    	<div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Form Keterangan Tidak Absen</h4>
            </div>
            <div class="grid-body no-border">
              <form class="form-no-horizontal-spacing" id="formaddabsen" action="<?php echo site_url('form_absen/add')?>" method="post"> 
                <div class="row column-seperation">
                  <div class="col-md-12">    
                    <p class="error_msg" id="MsgBad" style="background: #fff; display: none;"></p>
                    <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label text-right">No</label>
                      </div>
                      <div class="col-md-9">
                        <input name="no_form_absen" id="no_form_absen" type="text"  class="form-control" placeholder="No" value="" disabled="disabled">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label text-right">Tanggal</label>
                      </div>
                      <div class="col-md-8">
                        <div class="input-append date success no-padding">
                          <input type="text" class="form-control" name="date_tidak_hadir">
                          <span class="add-on"><span class="arrow"></span><i class="icon-th"></i></span> 
                        </div>
                      </div>
                    </div>
                    <?php foreach ($user_info as $ui) { ?>
                    <input type="hidden" name="user_id" value="<?php echo $ui->id ?>">
                    <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label text-right">Nama</label>
                      </div>
                      <div class="col-md-9">
                        <input name="nama" id="nama" type="text"  class="form-control" placeholder="Nama" value="<?php echo $ui->first_name.' '.$ui->last_name ?>" disabled="disabled">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label text-right">Dept/Bagian</label>
                      </div>
                      <div class="col-md-9">
                        <input name="org_nm" id="org_nm" type="text"  class="form-control" placeholder="Dept/Bagian" value="<?php echo $ui->org_nm ?>" disabled="disabled">
                      </div>
                    </div>
                    <?php } ?>
                    <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label text-right">Keterangan</label>
                      </div>
                      <div class="col-md-9">
                        <div class="radio">
                        <?php 
                        if($num_rows_keterangan_absen > 0){
                          foreach($keterangan_absen as $row){?>
                          <input id="tidak_absen_in<?php echo $row->id?>" type="radio" name="keterangan" value="<?php echo $row->id?>">
                          <label for="tidak_absen_in<?php echo $row->id?>"><?php echo $row->title?></label>
                        <?php }}else{?>
                          <input id="tidak_absen_in" type="radio" name="keterangan" value="0">
                          <label for="tidak_absen_in">No Data</label>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-3">
                        <label class="form-label text-right">Alasan</label>
                      </div>
                      <div class="col-md-9">
                        <input name="alasan" id="alasan" type="text"  class="form-control" placeholder="Alasan" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <div class="pull-right">
                    <button class="btn btn-danger btn-cons" type="submit"><i class="icon-ok"></i> Save</button>
                    <a href="<?php echo site_url('form_absen') ?>"><button class="btn btn-white btn-cons" type="button">Cancel</button></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	          	
		
      </div>
		
	</div>  
	<!-- END PAGE --> 