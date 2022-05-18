
<?php


include_once "lib/php/functions.php";
include_once "Parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images, function($r,$o){
    return $r."<img src='styleguide/images/$o'>";
});

//print_p($_SESSION);


        ?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Item</title>

    <?php include"Parts/meta.php"; ?>

    <script src="js/product_thumbs.js"></script>
</head>
<body>

<?php include"Parts/navbar.php"; ?>

    <div class="container">
      <div class="grid gap">
          <div class="col-xs-12 col-md-7"> <!-- change that i made -->
              <div class="card soft">
            
                  <div class="images-main">      
                    <img src="styleguide/images/<?= $product->thumbnail ?>">
                    </div>
                    <div class="images-thumbs">
                       <p><?= $product->description ?></p>
                    </div>
              </div>
          </div>
          <div class="col-xs-12 col-md-5"> <!-- change that i made -->
              <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

                <input type="hidden" name="product-id" value="<?= $product->id ?>">


                 <div class="card-section">
                    <p><?= $product->category ?></p>
                  <h3 class="product-name"><?= $product->name ?></h3>
                   <div class="product-price">&dollar;<?= $product->price ?></div>
                </div>


                <div class="card-section">
                    <label for="product-amount" class="form-label">Amount</label>
                    <div class="form-select">
                        <select id="product-amount" name="product-amount">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                     </select>
                    </div>
                </div>


                   <div class="card-section">
                       <input type="submit" class="form-button" value="Add To Cart">
                   </div>


              </form>
          </div>
  
      </div> 

   <h3 style="margin-top: 2em; margin-bottom: -0.2em;">Recommended Products</h3>
   <?php
    recommendedSimilar($product->category,$product->id);
   ?>
    </div>
</body>
</html>