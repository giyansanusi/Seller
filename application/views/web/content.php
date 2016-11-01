
<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Makanan</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Merchandise</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
						<?php foreach ($listMakanan as $row) { ?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#<?php echo $row['IDBARANG']; ?>" class="offer-img">
										<img src="<?php echo base_url(); ?>gambar/<?php echo $row['GAMBAR']; ?>" class="img-responsive" alt="<?php echo $row['GAMBAR']; ?>">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html"><?php echo $row['NAMABARANG']; ?></a><?php $row['BERATBARANG'] ?></h6>							
										</div>
										<div class="mid-2">
											<p ><label><?php echo "Rp. ".$row['HARGABARANG']*1.25; ?></label><em class="item_price"><?php echo "Rp. ".$row['HARGABARANG']; ?></em></p>
											  <!-- <div class="block">
												<div class="starbox small ghosting"> </div>
											</div> -->
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="<?php echo $row['HARGABARANG'] ?>" data-quantity="1" data-image="<?php echo base_url(); ?>gambar/<?php echo $row['GAMBAR']; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<?php foreach ($listMerchandise as $row) { ?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#<?php echo $row['IDBARANG']; ?>" class="offer-img">
										<img src="<?php echo base_url(); ?>gambar/<?php echo $row['GAMBAR']; ?>" class="img-responsive" alt="<?php echo $row['GAMBAR']; ?>">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html"><?php echo $row['NAMABARANG']; ?></a><?php $row['BERATBARANG'] ?></h6>							
										</div>
										<div class="mid-2">
											<p ><label><?php echo "Rp. ".$row['HARGABARANG']*1.25; ?></label><em class="item_price"><?php echo "Rp. ".$row['HARGABARANG']; ?></em></p>
											  <!-- <div class="block">
												<div class="starbox small ghosting"> </div>
											</div> -->
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="<?php echo $row['HARGABARANG'] ?>" data-quantity="1" data-image="<?php echo base_url(); ?>gambar/<?php echo $row['GAMBAR']; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
							<?php } ?>
							</div>
							<div class="clearfix"></div>
						 </div>		  
					</div>
					
					
				</div>
			</div>
		
	</div>
	</div>
	</div>

<!--content-->