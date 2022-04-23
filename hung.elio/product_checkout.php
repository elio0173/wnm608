<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkout Page</title>

	<?php include "Parts/meta.php"; ?>
</head>
<body>

<?php include "Parts/navbar.php"; ?>

<div class="container">
	<div class="card soft">
		<h2>Product Checkout</h2>
			
		<h3>Address</h3>	
		<form class="form">
                <div class="form-control">
                    <label class="form-label">Street</label>
                    <input type="text" placeholder="Street Name" class="form-input">
                </div>
       <div class="form-control display-flex flex-align-center">
                    <div class="flex-none">
                        <label class="form-label">City</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="City" class="form-input flex-stretch">
                    </div>
                    <div class="flex-none">
                        <label class="form-label">State</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="State" class="form-input flex-stretch">
                    </div>
                </div>
                <div class="form-control display-flex flex-align-center">
                    <div class="flex-none">
                        <label class="form-label">Zip Code</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="Zip Code" class="form-input flex-stretch">
                    </div>
                    <div class="flex-none">
                        <label class="form-label">Country</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="Country" class="form-input flex-stretch">
                    </div>
                </div>
  
            </form>

            <h3>Payment</h3>

            <form class="form">
      			<div class="form-control display-flex flex-align-center">
                    <div class="flex-none">
                        <label class="form-label">First Name</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="First Name" class="form-input flex-stretch">
                    </div>
                    <div class="flex-none">
                        <label class="form-label">Last Name</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="Last Name" class="form-input flex-stretch">
                    </div>
                </div>

                <div class="form-control">
                    <label class="form-label">Card Number</label>
                    <input type="text" placeholder="####-####-####-####" class="form-input">
                </div>


                <div class="form-control display-flex flex-align-center">
                    <div class="flex-none">
                        <label class="form-label">Expiration</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="MM-YY" class="form-input flex-stretch">
                    </div>
                    <div class="flex-none">
                        <label class="form-label">CVV</label>
                    </div>
                    <div class="flex-stretch">
                        <input type="search" placeholder="CVV" class="form-input flex-stretch">
                    </div>
                </div>
           
                <a href="product_confirmation.php" class="form-button">Complete Checkout</a>
            </form>

	</div>
</div>

</body>
</html>