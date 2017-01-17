 
<!--main content start-->
<section id="main-content">

    <section class="wrapper"> 

			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i>Profile</h3>
				</div>
			</div>
		<div class="row">	
			<div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Profile</div>
                   
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                  
                    <div class="container">

                        <h2>My Profile</h2>
                       

                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Admin Data</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><img src="<?php echo base_url(); ?>\assets\admin\img\admin\<?php echo $GAMBAR; ?>" alt="" style="width: 250px; height: 250px">
                              </td>

                              <td>
                                <tr>
                                  <td>Nama : <?php echo "&nbsp;&nbsp;". $NAMAADMIN; ?></td>
                                </tr>

                                <tr>
                                  <td>Username : <?php echo "&nbsp;&nbsp;". $USERNAME; ?></td>
                                </tr>
                              </td>


                            </tr>
                            
                            <tr>

                            <td><a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/c_profile/editadmin">Edit</a><?php echo "&nbsp;&nbsp;"; ?><a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/c_profile/editpassword/">Change Password</a></td>

                            

                            </tr>
                          </tbody>
                        </table>

                      </div>
                  </div>
                  <div class="widget-foot" align="center">
                    
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 

              <!-- project team & activity end -->
                   </section>
      </section>
      <!--main content end-->

