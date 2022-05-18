<?php 

include_once "lib/php/functions.php";
include_once "Parts/templates.php";

?>    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Landing Page</title>
    <?php include"Parts/meta.php"; ?>
</head>
<body>
<?php include"Parts/navbar.php"; ?>
<div class="view-window"
        style="background-image: url('https://media0.giphy.com/media/USE3Aegr87SiWNIODh/200.gif');">
    </div>
    <div class="container" id="typography">
        <div class="card soft" id="paragraphs">
            <h2 id="title">WELCOME TO MR. JUGUETE!</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae eligendi quaerat sint autem eveniet
                facere, odio quibusdam doloribus suscipit odit aut voluptatum assumenda illum nihil qui natus sapiente
                maiores enim?</p>
            <p>Consequuntur expedita ratione nesciunt soluta dolore rem ipsum ullam iure nam architecto animi, vero
                corrupti iusto magnam voluptatum mollitia, est illo deserunt voluptas a perspiciatis delectus facere
                eius? Expedita, sequi.</p>
            <p>Neque vitae, exercitationem quisquam, quaerat hic mollitia culpa facere odit tenetur deleniti ratione a
                animi laboriosam reprehenderit eum aliquid perferendis veritatis libero laborum beatae aliquam dolores.
                Voluptas deleniti veritatis unde.</p>
                
        </div>
    </div>

    <div class="container">
        <h3 style="margin-top: 1.5em; margin-bottom: -0.2em;">Trending Toys</h3>
        <?php recommendedCategory("monster");?>
        <h3 style="margin-top: 2em; margin-bottom: -0.2em;">Classic Movies</h3>
        <?php recommendedCategory("movies");?>
    </div>

</body>
</html>