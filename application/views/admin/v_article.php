 
<!--main content start-->
<section id="main-content">

    <section class="wrapper"> 

			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i>Article</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i>Upload</li>
						<li><i class="fa fa-laptop"></i>Article</li>						  	
					</ol>
				</div>
			</div>


              
           
		
		<div class="row">	
			<div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Post List</div>
                  <div class="widget-icons pull-right">
                    <a href="<?php echo base_url(); ?>index.php/admin/c_article/tambahArticle" class="wclose">Tambah Article</a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                  <form class="navbar-form" style="float:right" method="post" action="<?php echo base_url()?>index.php/admin/C_article/cariArticle">
                            <input class="form-control" placeholder="Search judul article ..." type="text" name="search">
                        </form>
                    <div class="container">

                        <h2>Daftar Article</h2>
                        <p>Tabel daftar article tersedia</p>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>JUDUL</th>
                              <th>KATEGORI</th>
                              <th>TANGGAL</th>
                              <th>STATUS</th>
                              <th>AUTHOR</th>
                              <th>AKSI</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($listArticle as $row) { ?>
                            <tr>
                              <td><?php echo $row['ID_ARTICLE']; ?></td>
                              <td><?php echo $row['JUDUL']; ?></td>
                              <td><?php echo $row['KATEGORI']; ?></td>
                              <td><?php echo $row['TANGGAL']; ?></td>
                              <td><?php if ($row['STATUS'] == 0) {
                                echo "DRAFT";
                              }else{
                                echo "PUBLISHED";
                                }  ?></td>
                              <td><?php echo $row['AUTHOR']; ?></td>
                              <td class="col-center"><a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/c_article/editArticle/<?php echo $row['ID_ARTICLE']; ?>">Edit</a> <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/c_article/hapusArticle/<?php echo $row['ID_ARTICLE']; ?>/<?php echo $row['JUDUL'] ?>">Hapus</a></td> 
                            </tr>

                          <?php } ?>
                          </tbody>
                        </table>
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