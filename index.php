<!DOCTYPE php>
<php>
<?php include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
	$user_id = $_SESSION['user_id'];
 }else{
	$user_id = '';
 }
include 'addcart.php';
?>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="css/admin_style.css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		.order{
			display: block;
			width: 100%;
			margin-top: 1rem;
			border-radius: .5rem;
			padding:1rem 3rem;
			font-size: 1.7rem;
			text-transform: capitalize;
			color:var(--black);
			cursor: pointer;
			text-align: center;
			}
		.buy {
			display: block;
			width: 100%;
			margin-top: 1rem;
			border-radius: .5rem;
			padding:1rem 3rem;
			font-size: 1.7rem;
			text-transform: capitalize;
			color:var(--black);
			cursor: pointer;
			text-align: center;
			}
		.buy:hover{
			background-color: var(--black);
			color: white;
					}
		.order:hover{
			background-color: var(--black);
			color: white;
					}
		.order{
			background-color: var(--white);
			}
		.buy{
			background-color: var(--white);
			}

	</style>
	</head>

	<body>
		
	<?php
	include 'components/index_header.php';
	?>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Men's</h1>
					   					<h2 class="head-2">Shoes</h2>
					   					<h2 class="head-3">Collection</h2>
					   					<p class="category"><span>New trending shoes</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Huge</h1>
					   					<h2 class="head-2">Sale</h2>
					   					<h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
					   					<p class="category"><span>Big sale sandals</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">New</h1>
					   					<h2 class="head-2">Arrival</h2>
					   					<h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
					   					<p class="category"><span>New stylish shoes for men</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(images/men.jpg);"></a>
							<div class="desc">
								<h2><a href="men.php">Shop Men's Collection</a></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(images/women.jpg);"></a>
							<div class="desc">
								<h2><a href="women.php">Shop Women's Collection</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
						<h2>Best Sellers</h2>
					</div>
				</div>
				<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-md">	
						
					<?php
						$select_products = $conn->prepare("SELECT * FROM `products`");
						$select_products->execute();
						if($select_products->rowCount() > 0){
						while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
					?>
					
					<div class="col-md-3 col-lg-3 mb-4 text-center">		
						<div class="product-entry border">
						<form action="" method="POST">
						<input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
						<input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
						<input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
						<input type="hidden" name="limit" value="<?= $fetch_products['limit']; ?>">
						<input type="hidden" name="image" value="<?= $fetch_products['image_01']; ?>">
							<a href="product_detail.php?id=<?php echo $fetch_products['id'] ?>" class="prod-img">
								<img src="uploaded_img/<?= $fetch_products['image_01']; ?>" class="img-fluid" alt="Free php5 bootstrap 4 template">
							</a>
							<div class="desc">
								<div class="name"><?= $fetch_products['name']; ?></div>
      							<div class="price">$<span><?= $fetch_products['price']; ?></span></div>	
								  <div class="limit">Sale còn lại: <?= $fetch_products['limit']; ?></div>
							<div style="display:grid" >
							<div class="flex-btn">  
    <div class="order">
        <button type="submit" name="add_to_cart" class="icon-shopping-cart2" style="font-size: 24px" 
        onclick="return checkStock(<?= $fetch_products['limit']; ?>)"></button>
    </div>
    
    <input type="submit" name="buy" class="buy" 
    onclick="return checkStock(<?= $fetch_products['limit']; ?>)" value="Buy">
</div>
								</div>
								</form>	
						</div>
						</div>
					</div>
				
			
		
					<?php
						}}

					?>
						
				</div>
			</div>
		</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
					</div>
				</div>
			</div>
		</div>
		<script>
function checkStock(limit) {
    if(limit <= 0) {
        alert('Hết hàng!');
        return false;
    }
    return confirm('Buy this product?');
}
</script>
		<?php
	include 'components/index_footer.php';
	?>
