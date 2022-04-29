<?php 

include_once "lib/php/functions.php";

resetCart();

?>    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmation Page</title>

	<?php include "Parts/meta.php"; ?>
</head>
<body>

<?php include "Parts/navbar.php"; ?>

<div class="container">
	<div class="card soft">
		<h2>Thank you for your purchase!</h2>
		<p><a href="product_list.php">Continue Shopping</a></p>
	</div>
</div>

</body>
</html> 