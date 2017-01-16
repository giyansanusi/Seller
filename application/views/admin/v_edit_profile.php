<!--main content start-->
      <section id="main-content">
          <section class="wrapper"> 
 
  <!-- BREADCRUMB -->

        <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i>Tambah Item</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i>Upload</li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/c_article/tampilkanDaftarArticle"><i class="fa fa-laptop"></i>Item</a></li>
            <li><i class="fa fa-laptop"></i>Tambah Item</li>                    
          </ol>
        </div>
      </div>
              
           
    
    <div class="row"> 
      <div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Quick Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post">
                        <!-- Edit profile form (not working)-->
                         <form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/admin/C_profile/submit" enctype="multipart/form-data">
                            <!-- ID -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">ID</label>
                              <div class="col-lg-8"> 
                                <input type="text" name="username" value="<?php echo $IDADMIN; ?>" placeholder="" class="form-control" disabled>
                              </div>
                            </div>   
                            <!-- Harga -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">Gambar</label>
                              <div class="col-lg-8"> 
                                <input type='file' name='image' size='20'/>
                                <input type="hidden" name='image2' value="">
                              </div>
                              
                            </div> 
                             <!-- BERAT -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">Username</label>
                              <div class="col-lg-8"> 
                                <input type="text" name="username" value="<?php echo $USERNAME; ?>" placeholder="" class="form-control">
                              </div>
                              <span class="txt-danger"><?php echo form_error('username');?></span>
                            </div> 

                             <!-- BERAT -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">Nama</label>
                              <div class="col-lg-8"> 
                                <input type="text" name="namaadmin" value="<?php echo $NAMAADMIN; ?>" placeholder="" class="form-control">
                              </div>
                              <span class="txt-danger"><?php echo form_error('namaadmin');?></span>
                            </div> 
                                    
                            
                            
                            <!-- Buttons -->
                            <div class="form-group">
                                                     <!-- Buttons -->
                               <div class="col-lg-offset-1 col-lg-9">
                                <button type="submit" class="btn btn-primary" name="btnPublish" value="1">Submit</button>
                               </div>
                            </div>
                        </form>
                      </div>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 
              <!-- project team & activity end -->
                   </section>
      </section>
      <!--main content end-->

