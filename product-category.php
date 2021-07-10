<?php
    include('includes/header.php');
	if(!$_GET['id']){
		header("location: index");
	}
	else{
		$cat_id=$_GET['id'];
		$products=getProductsBySubCategory($cat_id);
	}
?>
   
    <!--======= Breadcrumb Left With BG Image =======-->
    <!-- <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/headers/about-us-header.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
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
                            <li class="breadcrumb-item"><a href="home-1.html"><i class="ion-android-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> -->
    <!--======= Breadcrumb Left With BG Image =======-->	<!--======= Breadcrumb Left With BG Image =======-->
	<div class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/headers/about-us-header-02.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<div class="iq-mb-0">
						<div class="iq-font-white iq-tw-6">Product Category</div>
						<h2 class="iq-font-white iq-tw-6">Product Subcategory</h2>
					</div>
				</div>
				<div class="col-lg-4">
					<nav aria-label="breadcrumb" class="text-right">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home-1.html"><i class="ion-android-home"></i>Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Listing</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--======= Breadcrumb Left With BG Image =======-->
	<!--=================================
Main Content -->
	<div class="main-content">
		<section class="overview-block-ptb iq-gridpro">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php
						if(!empty($products)){
							for($j=0;$j<count($products);$j++){ 
						?>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 iq-mtb-30">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="<?php echo $products[$j]['image'] ?>" alt="product image">
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-7 col-sm-12 iq-mtb-30">
								<div class="product-detail">
									<h6><a href="product-detail?id=<?php echo $products[$j]['id'] ?>" class="iq-tw-6"><?php echo $products[$j]['title'] ?></a></h6>
									<div class="iq-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											
										</ul>
									</div>
									<?php  $subcat=getSubCategoryById($products[$j]['sub_category_id']); ?>
                                    <p><?php echo $subcat['sub_category_title'] ?></p>
									<div class="shop-price">
										<p>PN <strong>HPX<?php echo $products[$j]['id'] ?></strong></p> 
									</div>
									<p class="detail-text">
										<?php echo $products[$j]['detail'] ?>
									</p>
									<a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Make an Inquiry</a>
									<div class="button-icon">
										<a href=""> <i class="fa fa-heart-o" aria-hidden="true"></i></a>
										<a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
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
		</section>
	</div>
	<!--=================================
Main Content -->

<?php
    include('includes/footer2.php');
?>