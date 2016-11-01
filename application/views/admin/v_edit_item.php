 
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
                                      <form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/admin/C_item/submitItemEdit/<?php echo $listBarang[0]['IDBARANG']; ?>" enctype="multipart/form-data">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="title">Nama Barang</label>
                                            <div class="col-lg-8"> 
                                              <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?php echo $listBarang[0]['NAMABARANG']; ?>">
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('namabarang');?></span>
                                          </div>   
                                          <!-- Harga -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="title">Harga</label>
                                            <div class="col-lg-8"> 
                                              <input type="text" class="form-control" id="hargabarang" name="hargabarang" value="<?php echo $listBarang[0]['HARGABARANG']; ?>">
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('hargabarang');?></span>
                                          </div> 
                                           <!-- BERAT -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="title">Berat (Kg)</label>
                                            <div class="col-lg-8"> 
                                              <input type="text" class="form-control" id="beratbarang" name="beratbarang" value="<?php echo $listBarang[0]['BERATBARANG']; ?>">
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('beratbarang');?></span>
                                          </div> 
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1">Kategori</label>
                                            <div class="col-lg-8">                               
                                                <select class="form-control" id="kategori" name="kategori">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">Makanan</option>
                                                  <option value="2">Merchandise</option>
                                                </select>  
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('kategori');?></span>
                                          </div>            
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="content">Deskripsi</label>
                                            <div class="col-lg-8">
                                              <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $listBarang[0]['DESKRIPSI']; ?></textarea>
                                            </div>
                                            <span class="txt-danger"><?php echo form_error('deskripsi');?></span>
                                          </div>                                  
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-1" for="tags">Gambar</label>
                                            <div class="col-lg-8  ">
                                              <input type='file' name='image' size='20'/>
                                              <input type="hidden" name='image2' value="<?php echo $listBarang[0]['GAMBAR'] ?>">
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