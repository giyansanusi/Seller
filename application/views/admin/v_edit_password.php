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
                  <div class="pull-left">Edit Password</div>
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
                         <form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/admin/C_profile/submitEditPassword" enctype="multipart/form-data">
                            <!-- ID -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">ID</label>
                              <div class="col-lg-8"> 
                                <input type="text" name="idadmin2" value="<?php echo $IDADMIN; ?>" placeholder="" class="form-control" disabled>
                                <input type="hidden" name="idadmin" value="<?php echo $IDADMIN; ?>" placeholder="" class="form-control">
                              </div>
                            </div>   
                             <!-- Password lama -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">Password Lama</label>
                              <div class="col-lg-8"> 
                                <input type="password" name="passwordlama" placeholder="" class="form-control" id="entrypassword">
                              </div>
                              <!-- <span class="txt-danger"><?php echo form_error('passwordlama');?></span> -->
                            </div> 

                             <!-- Password Baru -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">Password Baru</label>
                              <div class="col-lg-8"> 
                                <input type="password" name="newpassword" value="" placeholder="" class="form-control" id="entrynew">
                              </div>
                              <!-- <span class="txt-danger"><?php echo form_error('passwordbaru');?></span> -->
                            </div> 

                            <!-- Retype Password -->
                            <div class="form-group">
                              <label class="control-label col-lg-1" for="title">Retype Password</label>
                              <div class="col-lg-8"> 
                                <input type="password" name="retype" value="" placeholder="" class="form-control" id="retypenew">
                              </div>
                              <!-- <span class="txt-danger"><?php echo form_error('retypepassword');?></span> -->
                            </div> 
                                    
                            
                            
                            <!-- Buttons -->
                            <div class="form-group">
                                <!-- Buttons -->
                               <div class="col-lg-offset-1 col-lg-9">
                                <button type="submit" class="btn btn-primary" name="btnPublish" value="1" onclick="Javascript:return passwordValidation()">Submit</button>

                                
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


      <script>
        function passwordValidation() {
          var oldPassword = '<?php echo $PASSWORD; ?>';
          if (oldPassword == document.getElementById('entrypassword').value) {
            if (document.getElementById('entrynew').value == document.getElementById('retypenew').value) {
              return true;  
            }else{
              alert("Retyped password doesnt match with new password");
              return false;
            }
            
          }else{
            alert("Old password doesnt match");
            return false;  
          }
          
          
        }
      </script>

