<?php
	include('includes/header.php');
	if(!$_GET['id']){
		header("location: index");
	}
	else{
		$product_id=$_GET['id'];
		$product=getProductById($product_id);
	}
?>
   
    <!--======= Breadcrumb Left With BG Image =======-->
    <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/headers/about-us-header.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="iq-mb-0">
                        <h2 class="iq-font-white iq-tw-6">Product Detail</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--======= Breadcrumb Left With BG Image =======-->
	<!--=================================
Main Content -->
	<div class="main-content">
		<section class="overview-block-pt" data-twttr-rendered="true" data-spy="scroll" data-target=".bs-docs-sidebar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5 col-sm-12">
						<div class="iq-slick">
							<div class="slider slider-for">
								<div><img class="img-fluid" alt="#" src="<?php echo $product['image'] ?>"></div>
								
							</div>
							
						</div>
					</div>
					<div class="col-lg-8 col-md-5 col-sm-12">
						<div class="iq-shopdetail indc">
							<h3 class="iq-tw-6"><?php echo $product['title'] ?></h3>
							<div class="iq-rating">
								<ul class="list-inline float-left">
									<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="shop-price w-100 d-inline-block">
								<p>PN <strong>HPX<?php echo $product['id'] ?></strong></p>
							</div>
							<div class="iq-pt-15"><b>Product Detail:</b></div>
							<p>
								<?php echo $product['detail'] ?>
							</p>
							<div><b>Material &amp; Care:</b></div>
							<ul>
								<?php echo $product['material_care'] ?>
							</ul>
							<div class="product_meta iq-pt-15">
								<div> <b>SKU:</b> <?php echo $product['sku'] ?></div>
								<?php  $subcat=getSubCategoryById($product['sub_category_id']); ?>

								<div> <b>Category:</b> <a class="a-dark" href="#"><?php echo $subcat['sub_category_title'] ?></a></div>
								<div> <b>Availability:</b> <a class="a-dark" href="#"><?php echo $product['Availability'] ?></a></div>
							</div>
							<!--Quantity -->
							<ul class="align-items-center selection-box">
								<li class="brd">
									<div><b>Quantity:</b></div>
									<form class="shop-input" id="shopform" method="POST" action="#">
										<input type="button" value="-" class="decrement">
										<input type="text" name="quantity" value="1" class="input-box">
										<input type="button" value="+" class="increment">
									</form>
								</li>
								<!-- color -->
								<li>
									<div class="color-select">
										<div class="d-inline-block"><b>Color:</b></div>
									</div>
									<div class="list-inline iq-widget-menu">
										<ul class="iq-pl-0 iq-color-box">
											<li class="d-inline-block list-item-size">
												<a title="Purple" style="background-color:#9966ff;" href=""></a>
											</li>
											<li class="d-inline-block list-item-size">
												<a title="Blue" style="background-color:#3333cc;" href=""></a>
											</li>
											<li class="d-inline-block list-item-size">
												<a title="Maroon" style="background-color:#800000;" href=""></a>
											</li>
											<li class="d-inline-block list-item-size">
												<a title="Green" style="background-color:#28a745" href=""></a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!-- button -->
							<div class="all-button iq-mtb-15">
								<a class="button grey" href="#">Make an Inquiry</a>
								<a class="button" href="#"><i class="fa fa-heart"></i>&nbsp;Add to Fvourites</a>
							</div>
							<!-- share -->
							<div class="d-inline-block text-uppercase"><b>Share:</b></div>
							<div class="share-box d-inline-block">
								<ul>
									<li class="d-inline-block"><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="d-inline-block"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row iq-detailleft">
					<div class="col-sm-12">
						<div class="tab-box">
							<ul class="nav nav-tabs  justify-content-center" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true" aria-selected="true">Description</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Parameter</a>
								</li>
								
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane active show" id="home" role="tabpanel" aria-labelledby="home-tab">
									<p><?php echo $product['description'] ?></p>
								</div>
								<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<table class="table">
										<tbody>
											<tr>
												<th scope="row">Weight/Article</th>
												<td><?php echo $product['weight_article'] ?></td>
											</tr>
											<tr>
												<th scope="row">GSM</th>
												<td><?php echo $product['gsm'] ?></td>
											</tr>
											<tr>
												<th scope="row">Care</th>
												<td><?php echo $product['care'] ?></td>
											</tr>
											<tr>
												<th scope="row">Printing</th>
												<td><?php echo $product['printing'] ?></td>
											</tr>
											<tr>
												<th scope="row">MOQ</th>
												<td><?php echo $product['moq'] ?></td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="overview-block-ptb iq-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Popular Products</h3>
							<span>Clothes</span>
						</div>
						<div class="owl-carousel arrow-4 popup-gallery" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="4" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="15">
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/01.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/02.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/03.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/04.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/05.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="images/shop/thumb/06.jpg" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<h6><a href="#">Product Name</a></h6>
										<p>Fashion</p>
										<div class="shop-price">
											<del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--=================================
Main Content -->
<?php
    include('includes/footer2.php');
?>