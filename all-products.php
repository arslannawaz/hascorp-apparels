<?php
    include('includes/header.php');
	$sub_categories=getSubCategories();
?>
   
    <!--======= Breadcrumb Left With BG Image =======-->
    <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/headers/about-us-header.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="iq-mb-0">
                        <h2 class="iq-font-white iq-tw-6">All Products</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="ion-android-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Products</li>
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
		<section class="overview-block-ptb iq-product grey-bg">
			<div class="container-fluid">
				<?php
					if(!empty($sub_categories)){
						for($i=0;$i<count($sub_categories);$i++){ 
				?>
				<div class="row" style="margin-top:14px">
					<div class="col-sm-12">
		
						<div class="title">
							<h3 class="small-title iq-tw-6"><?php echo $sub_categories[$i]['sub_category_title'] ?></h3>
						</div>
						<div class="owl-carousel arrow-4 popup-gallery" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="6" data-items-laptop="5" data-items-tab="4" data-items-mobile="2" data-items-mobile-sm="1" data-margin="15">
							<?php
							    $products=getProductsBySubCategory($sub_categories[$i]['id']);
								if(!empty($products)){
									for($j=0;$j<count($products);$j++){ 
							?>
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="<?php echo $products[$j]['image'] ?>" alt="product image">
										<ul class="product-icon">
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="product-detail">
										<div class="iq-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												
											</ul>
										</div>
										<h6><a href="product-detail?id=<?php echo $products[$j]['id'] ?>"><?php echo $products[$j]['title'] ?></a></h6>
										<?php  $subcat=getSubCategoryById($products[$j]['sub_category_id']); ?>
                                    	<p><?php echo $subcat['sub_category_title'] ?></p>
										<div class="shop-price">
											<!-- <del>$130.00</del>&nbsp;&nbsp;<strong>$98.50</strong> -->
											<p>PN <strong>HPX<?php echo $products[$j]['id'] ?></strong></p>
										</div>
									</div>
								</div>
							</div>
						
							<?php
								}
							}
							?>
							
						</div>
						
					</div>
				</div>
				<?php
						}
					}
				?>
			</div>
		</section>
	</div>
	<!--=================================
Main Content -->

<?php
    include('includes/footer2.php');
?>