<?php
include_once "lib/php/functions.php";
include_once "Parts/templates.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>Product List</title>

    <?php include"Parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
     <script src="js/templates.js"></script>
     <script src="js/product_list.js"></script>


</head>
<body>
    
<?php include "Parts/navbar.php"; ?>

	<div class="container">
			<h2>Product List</h2>
			

            <div class="form-control">
                <form class="hotdog light" id="product-search">
                    <input type="search" placeholder="Search Products">
                </form>
            </div>

            <div class="form-control display-flex">
                <div class="flex-none">
                    <button data-filter="category" data-value="" type="button" class="form-button">All</button>
                </div>
                &nbsp;
                <div class="flex-none">
                    <button data-filter="category" data-value="movies" type="button" class="form-button">Movies</button>
                </div>
                &nbsp;
                <div class="flex-none">
                    <button data-filter="category" data-value="street fighter" type="button" class="form-button">Street Fighter</button>
                </div>
                &nbsp;
                <div class="flex-none">
                    <button data-filter="category" data-value="monster" type="button" class="form-button">Monster</button>
                </div>
                    <div class="display-flex" style="margin-left: auto;">
                    <div class="form-select" style="margin: 0;">
                    <select class="js-sort" style="width: -webkit-fill-available;">
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                    <option value="3">Lowest Price</option>
                    <option value="4">highest Price</option>
                     </select>
                    </div>
                    </div>
            </div>


            <div class='productlist grid gap'></div>

        </div>
		
	
</body>
</html>