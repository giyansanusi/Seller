 
<!--main content start-->
<section id="main-content">

    <section class="wrapper"> 

			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i>Log Aktivitas</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i>Log Aktivitas</li>						  	
					</ol>
				</div>
			</div>

		<div class="row">	
			<div class="col-lg-12 col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Activity List</div>
                  <div class="widget-icons pull-right">
                    <!-- <a href="<?php echo base_url(); ?>index.php/admin/c_article/tambahArticle" class="wclose"></a> -->
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">

                  <div class="padd">

                  <!-- ini contoh method on change, jsscript nya ada di bawah -->
                 <!--  <select name="showLogOption" id="ddlLog">
                    <option value="byDate">Show By Date</option>
                    <option value="all">Show All</option>
                  </select> -->

                  <a id="btnShowAll" class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/C_log/tampilkanDaftarSemuaLog">Show All</a> 

                  <form class="form-group" style="float:right" method="post" action="<?php echo base_url()?>index.php/admin/C_log/tampilkanDaftarLog">
                            <input type="date" name="date" value="" placeholder="Search by Date" id="fieldDate">
                            <input type="submit" name="" value="Search" id="btnSearchByDate">
                        </form>
                    <div class="container">

                        <h2>Daftar Article</h2>
                        <p>Tabel daftar article tersedia</p>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>ADMIN</th>
                              <th>TANGGAl</th>
                              <th>WAKTU</th>
                              <th>DESKRIPSI</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                          $counter = 1;
                          foreach ($listLog as $row) { ?>
                            <tr>
                              <td><?php echo $counter; ?></td>
                              <td><?php echo $row['ADMIN']; ?></td>
                              <td><?php echo $row['TANGGAL']; ?></td>
                              <td><?php echo $row['JAM']; ?></td>
                              <td><?php echo $row['DESKRIPSI']; ?></td>
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

      <script>
        $('select').on('change', function() {
          if (this.value == 'byDate') {
            $('#btnShowAll').prop("disabled", true);
            $('#btnSearchByDate').prop("disabled", false);
            $('#fieldDate').prop("disabled", false);
          }else{
            $('#btnShowAll').prop("disabled", false);
            $('#btnSearchByDate').prop("disabled", true);
            $('#fieldDate').prop("disabled", true);
          }
        });
      </script>