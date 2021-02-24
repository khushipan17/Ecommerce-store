<?php
//session_start();
//echo $_SESSION['username']; 
include("partials/connect.php");

?>

<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

			
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

		
			
			<div class="header-cart-content flex-w js-pscroll">
							<ul class="header-cart-wrapitem w-full">

							<?php
								   
								   $total = 0;
								    if(isset($_SESSION['cart'])){

										foreach($_SESSION['cart'] as $key => $value){

											$total = $total + $value['item_price'] * $value['quantity'];
                                           
											$item_name = $value['item_name'];

											$sql = "SELECT picture from products where name = '$item_name'";
											$pic = mysqli_query($con,$sql);

											if($pic->num_rows > 0 ){
												while($row = mysqli_fetch_assoc($pic)){
													$image = 'admin/uploads/'.$row['picture']; ?>
											
										 
							
										
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?php echo $image ?>" alt="IMG"> <?php }}?>
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="product.php" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								 <?php echo $value['item_name']; ?>
							</a>

							<span class="header-cart-item-info">
							<?php echo $value['quantity']; ?>
							</span>

							<span class="header-cart-item-info">
							$ <?php echo $value['item_price'] ?>
							</span>
						</div>
					</li>

					

				

				
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						$<?php echo $total; ?>
					</div>
					<?php } } ?>
					<div class="header-cart-buttons flex-w w-full">
						<a href="shopping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shopping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>