
<?php


            include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images, function($r,$o){
    return $r."<img src='styleguide/images/$o'>";
});

//print_p($product);


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
          <div class=".col-xl-12.col-md-12" style="width: 450px;"> <!-- change that i made -->
              <div class="card soft">
            
                  <div class="images-main">      
                    <img src="styleguide/images/<?= $product->thumbnail ?>">
                    </div>
                    <div class="images-thumbs">
                       <?= $image_elements ?>
                       <p><?= $product->description ?></p>
                    </div>
              </div>
          </div>
          <div class=".col-xl-12.col-md-5" style="width: 330px;"> <!-- change that i made -->
              <div class="card soft flat">
                 <div class="card-section">
                    <p><?= $product->category ?></p>
                  <h3 class="product-name"><?= $product->name ?></h3>
                   <div class="product-price">&dollar;<?= $product->price ?></div>
                </div>


                <div class="card-section">
                    <label for="product-amount" class="form-label">Amount</label>
                    <div class="form-select" id="product-amount">
                     <select>
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
                       <a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a>
                   </div>


              </div>
          </div>
  
      </div> 

   
    </div>
</body>
</html>