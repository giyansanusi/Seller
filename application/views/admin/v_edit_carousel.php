 
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

                        <h2>Upload gambar carousel</h2>
                         <form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/admin/C_addcarousel/submitItem/<?php echo $idgambar;?>/<?php  echo $namagambarold; ?>" enctype="multipart/form-data">

                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>IMAGE <?php echo $idgambar; ?></th>
                            </tr>
                          </thead>
                          <tbody>
                          

                            <tr>
                              <!-- Tags -->
                               
                                <td><input type='file' name='image' size='20'/></td>
                                <td><input type="hidden" name='image2' value=""></td>
                                  
                            </tr>

                            <tr>      
                              <td><button type="submit" class="btn btn-primary" name="btnPublish" value="1" style="display: inline-block;">Submit</button></td>
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

