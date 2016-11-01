 
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
                    <a href="<?php echo base_url(); ?>index.php/admin/c_item/tambahItem" class="wclose">Tambah Barang</a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                  <form class="navbar-form" style="float:right" method="post" action="<?php echo base_url()?>index.php/admin/C_item/cariBarang">
                            <input class="form-control" placeholder="Search nama barang ..." type="text" name="search">
                        </form>
                    <div class="container">

                        <h2>Daftar Barang</h2>
                        <p>Tabel daftar barang tersedia</p>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>NAMA BARANG</th>
                              <th>HARGA BARANG</th>
                              <th>BERAT BARANG</th>
                              <th>KATEGORI</th>
                              <th align="center">AKSI</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($listBarang as $row) { ?>
                            <tr>
                              <td><?php echo $row['IDBARANG']; ?></td>
                              <td><?php echo $row['NAMABARANG']; ?></td>
                              <td><?php echo "Rp. ".$row['HARGABARANG']; ?></td>
                              <td><?php echo $row['BERATBARANG'].'Kg'; ?></td>
                              <td><?php if ($row['KATEGORI'] == 1) {
                                echo "Makanan";
                              }else{
                                echo "Merchandise";
                                } ?></td>
                              <td class="col-center"><a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/c_item/editBarang/<?php echo $row['IDBARANG']; ?>">Edit</a> <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/c_item/hapusBarang/<?php echo $row['IDBARANG']; ?>/<?php echo $row['GAMBAR']; ?>">Hapus</a></td> 
                            </tr>

                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->

                     <ul class="pagination">

                        <!-- Show pagination links -->
                        <?php foreach ($links as $link) {
                        echo "<li>". $link."</li>";
                        } ?>

                    </ul>

                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 

              <!-- project team & activity end -->
                   </section>
      </section>
      <!--main content end-->

