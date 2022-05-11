<?php 

include "../lib/php/functions.php";

$empty_product = (object)[
	"name"=>"",
	"description"=>"",
	"price"=>"",
	"category"=>"",
	"thumbnail"=>""
];












// TEMPLATES
function productListItem($r,$o){
return $r.<<<HTML
<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name</a></div>
HTML;
}

function showProductPage($o){

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$thumbnail = explode(",",$o->thumbnail);


 $display = <<< HTML
    <div>
    <h2>$o->name</h2>
    <div>
        <strong>Type</strong>
        <span>$o->type</span>
    </div>
    <div>
        <strong>Email</strong>
        <span>$o->email</span>
    </div>
    <div>
        <strong>Classes</strong>
        <span>$thumbnail</span>
    </div>
    </div>

    HTML;    

    $form =  <<<HTML
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
       <h2>$addoredit User</h2>
        <div class="form-control">
            <label class="form-label" for="user-name">Name</label >
          <input type="text" value="$o->name" class="form-input" name="user-name" id="user-name" placeholder="Enter the User Name">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-type">Type</label >
          <input type="text" value="$o->type" class="form-input" name="user-type" id="user-type" placeholder="Enter the User Type">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-email">Email</label >
         <input type="text" value="$o->email" class="form-input" name="user-email" id="user-email" placeholder="Enter the User Email">
        </div>      
         <div class="form-control">
            <label class="form-label" for="user-classes">Classes</label >
              <input type="text" value="$thumbnail" class="form-input" name="user-classes" id="user-classes" placeholder="Enter the User Classes, comma seperated">
        </div> 

         <div class="form-control">
                <input class="form-button" type="submit" value="Save Changes">
        </div>
         
    </form>
HTML;

$output = $id == "new" ? $form :
    "<div class-'grip gap'>
        <div class='col-xs-12 col-md-7'>$display</div>
        <div class='col-xs-12 col-md-5'>$form</div>
    </div>
    ";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<nav class="display-flex">
    <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
    <div class="flex-none">$delete</div>
</nav>
$output
HTML;
}









?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Admin Page</title>

    <?php include"../Parts/meta.php"; ?>
</head>
<body>

  <header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>Product Admin</h1>
        </div>
        <div class="flex-stretch"></div>
        <nav class="nav nav-flex flex-none">
                     <ul>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                    </ul>
        </nav>
    </div>
  </header>

	<div class="container">
	
	  <?php

                if(isset($_GET['id'])) {
                 showProductPage(
                  	$_GET['id']=="new"	?
                  		$empty_product : 
                  		makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
                  	);

                } else {

                ?>

                <h2>Product List</h2>
 
                <?php


                $result = makeQuery(makeConn(),"SELECT * FROM `products`");

                echo array_reduce($result,'productListItem');

                }


                ?>


	</div>
  </body>