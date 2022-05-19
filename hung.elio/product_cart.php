
<?php


            include_once "lib/php/functions.php";
            include_once "Parts/templates.php";

            $cart = getCart();

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN(4,7,10)");


$cart_items = getCartItems();



        ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart Page</title>

	<?php include "Parts/meta.php"; ?>
</head>
<body>

<?php include "Parts/navbar.php"; ?>

<div class="container">
	<h2>In Your Cart</h2>

	<?php

	if(count($cart)){
		?>
	<div class="grid gap">
		<div class="col-xs-12 col-md-8">
			<div class="card soft">
				<?= array_reduce(getCartItems(),'cartListTemplate') ?>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="card soft flat">
				<?= cartTotals() ?>
		<div class="card-section">
                    <a href="product_checkout.php" class="form-button">Checkout</a>
                </div>
			</div>
			
		</div>
		
	</div>
	<?php
	} else {
	?>

		<p style="font-size: 1em">No items in cart</p>

		<h3>You may like these...</h3>
		 <?php recommendedAnything();?>
	
	<?php
	}
	?>
</div>

</body>
</html> 