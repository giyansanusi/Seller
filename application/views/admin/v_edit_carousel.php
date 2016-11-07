 
<!--main content start-->
<section id="main-content">

    <section class="wrapper"> 

			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i>Carousel</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i>UI Element</li>
            <li><i class="fa fa-laptop"></i><a href="<?php echo base_url(); ?>index.php/admin/c_addcarousel/index">Carousel</a></li>
						<li><i class="fa fa-laptop"></i>Edit Carousel</li>						  	
					</ol>
				</div>
			</div>


              
           
		
		<div class="row">	
			<div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Edit Carousels</div>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                  
                    <div class="container">

                        <h2>Daftar Gambar Carousel</h2>
                         <form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/admin/C_addcarousel/submitItem" enctype="multipart/form-data">

                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>IMAGE 1</th>
                              <th>IMAGE 2</th>
                              <th>IMAGE 3</th>
                              <th>IMAGE 4</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><img src="" alt="" style="width: 250px; height: 250px"></td>
                              <td><img src="" alt="" style="width: 250px; height: 250px"></td>
                              <td><img src="" alt="" style="width: 250px; height: 250px"></td>
                              <td><img src="" alt="" style="width: 250px; height: 250px"></td>
                            </tr>

                            <tr>
                              <td><input type='file' name='image1' size='20' /></td>
                              

                              <td><input type='file' name='image2' size='20' /></td>
                              

                              <td><input type='file' name='image3' size='20' /></td>
                            

                              <td><input type='file' name='image4' size='20' /></td>
                            </tr>

                            <tr>      
                              <button type="submit" class="btn btn-primary" name="btnPublish" value="1" style="float: right">Submit</button>
                            </tr>
                  
                          </tbody>
                        </table>
                        </form>
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

