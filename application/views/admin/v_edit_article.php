 
<!--main content start-->
      <section id="main-content">
          <section class="wrapper"> 
 
  <!-- BREADCRUMB -->

			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i>Tambah Article</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i>Upload</li>
						<li><a href="<?php echo base_url(); ?>index.php/admin/c_article/tampilkanDaftarArticle"><i class="fa fa-laptop"></i>Article</a></li>
            <li><i class="fa fa-laptop"></i>Tambah Article</li>    						  	
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
                                      <form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/admin/C_article/submitArticle/edit" enctype="multipart/form-data">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="title">Judul</label>
                                            <div class="col-lg-8"> 
                                              <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $listArticle[0]['JUDUL']; ?>">
                                              <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $listArticle[0]['ID_ARTICLE']; ?>">
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('judul');?></span>
                                          </div>   
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="content">Konten</label>
                                            <div class="col-lg-8">
                                              <textarea class="form-control" id="konten" name="konten"><?php echo $listArticle[0]['KONTEN']; ?></textarea>
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('konten');?></span>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1">Kategori</label>
                                            <div class="col-lg-8">                               
                                                <select class="form-control" id="kategori" name="kategori" value="<?php echo $listArticle[0]['KATEGORI']; ?>">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">Kuliner</option>
                                                  <option value="2">Wisata</option>
                                                  <option value="3">Berita</option>
                                                  <option value="4">Lesson Learn</option>
                                                </select>  
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('kategori');?></span>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="tags">Tags</label>
                                            <div class="col-lg-8  ">
                                              <input type="text" class="form-control" id="tags" name="tags" value="<?php echo $listArticle[0]['TAG']; ?>">
                                            </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                                                   <!-- Buttons -->
                      											 <div class="col-lg-offset-1 col-lg-9">
                      												<button type="submit" class="btn btn-primary" name="btnPublish" value="1">Publish</button>
                      												<button type="submit" class="btn btn-danger" name="btnPublish" value="2">Save Draft</button>
                      												<button type="reset" class="btn btn-default">Reset</button>
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