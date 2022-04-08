<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>Product List</title>
    <?php include"Parts/meta.php"; ?>
</head>
<body>
    
<?php include "Parts/navbar.php"; ?>

	<div class="container">
		<!-- <div class="card soft">
			<h2>Product List</h2>
			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div> -->
		<div class="container" id="figure">
        <h3>Extreme Dinosaurs</h3>
        <div class="grid gap">
            <div class="col-lg-3">
            <a href="product_item.php?id=1">
                <figure class="figure product">
                    <img src="https://detoyboys.nl/172662-thickbox_default/extreme-dinosaurs-bullzeye-arial-fighter.jpg"
                        alt="">
                    <figcaption>
                        <div>Product</div>
                        <div>$15.99</div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3">
            <a href="product_item.php?id=2">
                <figure class="figure product">
                    <img src="https://detoyboys.nl/172662-thickbox_default/extreme-dinosaurs-bullzeye-arial-fighter.jpg"
                        alt="">
                    <figcaption>
                        <div>Product</div>
                        <div>$13.99</div>
                    </figcaption>
                </figure>
            </div>
                <div class="col-lg-3">
                <a href="product_item.php?id=3">
                    <figure class="figure product">
                        <img src="https://detoyboys.nl/172662-thickbox_default/extreme-dinosaurs-bullzeye-arial-fighter.jpg"
                            alt="">
                        <figcaption>
                            <div>Product</div>
                            <div>$14.99</div>
                        </figcaption>
                    </figure>
                </div>
        </div>
    </div>
	</div>
</body>
</html>