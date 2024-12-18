<div class="colorlib-loader"></div>
<?php 

include 'components/connect.php'; 
if(isset($_SESSION['user_id'])){
	$user_id = $_SESSION['user_id'];
 
}else{
	$user_id ="";
}

$select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
      $select_cart->execute([$user_id]);
	  $count_cart_items=0;
      if($select_cart->rowCount() > 0){ while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
		$count_cart_items++;
	  }}

?>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.php">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button  class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
						<ul>
								<li class="active"></li>
								<li class="has-dropdown">
								<a href="index.php">Home</a>
									<ul class="dropdown">
										<li><a href="product-detail.php">Product Detail</a></li>
										<li><a href="cart.php">Shopping Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="order-complete.php">Order Complete</a></li>
										<li><a href="add-to-wishlist.php">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="men.php">Men</a></li>
								<li><a href="women.php">Women</a></li>								
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li class="cart"><a href="cart.php"><i class="icon-shopping-cart"></i> Cart[<?php $count_cart_items ?>]</a>
								<div class="profile">
								<div class="dropdown">
								<?php  
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){ 
				 $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC)
                ?>
    								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon-user"></i><?= $fetch_profile["name"]; ?></a>
									<span class="caret"></span></button>
   									 <ul class="dropdown-menu">										
								<a href="upload_users.php" class="btn">update profile</a>
       							  <div class="flex-btn">
            						<a href="users_register.php" class="option-btn">register</a>
          						    <a href="users_login.php" class="option-btn">login</a>
         						</div>
         							<a href="user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
							</div></div></li></ul>
						</div>
					</div>					
				</div>
			</div>
			<?php }
			else{
				?>						
       							  	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon-user"></i>user</a>
									<span class="caret"></span></button>
   									 <ul class="dropdown-menu">															
       							  <div class="flex-btn">
            						<a href="users_register.php" class="option-btn">register</a>
          						    <a href="users_login.php" class="option-btn">login</a>
         						</div>  					
							</div></div></li></ul>
						</div>
					</div>
				</div>
			</div>
			<?php 
			}
			?>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>