<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 


    echo "<div>Hello World</div>"; 
    echo "<div>Goodbye World</div>";

    // Variables
    $a = 5;

    echo $a;


    // String Interpolation
    echo "<div>I have $a things</div>";
    echo '<div>I have $a things</div>';


    // Number
    // Interger
    $b = 15;
    // Float
    $b = 0.576;

    $b = 10;

    // String
    $name = "Yerguy2";

    // Boolean
    $isOn = true;



    // Math
    // PEMDAS
    echo (5 - 4) * 2;

    // Concatenation
    echo "<div> b + a" . " =c</div>";
    echo "<div> $b + $a" . " = ($a+$b)</div>";
    echo "<div> $b + $a =".($a+$b)."</div>";









    ?>

    <hr>
    <div>This is my name</div>
    <div>
    <?php

    $firstname = "Erh Chien";
    $lastname = "Chen";
    $fullname = "$firstname $lastname";

    echo $fullname;


    ?>

    </div>

    <hr>
    <?php 

    // Superglobal
    // ?name=HAHAHA
    echo "<a href='?name=HAHAHA'>visit</a><br>";
    echo "<div> My name is {$_GET['name']} </div>";

    // ?name=HAHAHA&type=h1
    echo "<a href='?name=HAHAHA&type=h1'>visit</a><br>";
    echo "<{$_GET['type']}> My name is {$_GET['name']} </{$_GET['type']}>";

    ?>
    <hr>
    <?php

    // Array
    $colors = array("red", "green" , "blue");

    echo $colors[0];

    echo "
        <br>$colors[0]
        <br>$colors[1]
        <br>$colors[2]
    ";

    echo count($colors);

    ?>

    <div style="color:<?= $colors[1] ?>">
        This text is green
    </div>

    <hr>
    <?php  

    // Associative Array
    $colorAssociative = [
        "red" => "#f00",
        "green" => "#0f0",
        "blue" => "#00f",
    ];

    echo $colorAssociative['green'];

    ?>

    <hr>
    <?php

    // Casting
    $c = "$a";
    $d = $c*1;

    echo $d;

    $colorsObject = (object)$colorAssociative;

    echo $colors;
    // echo $colorsObject;
    

    echo "<hr>";

    // Array Index Notation
    echo $colors[0]."<br>";
    echo $colorAssociative['red']."<br>";
    echo $colorAssociative[$colors[2]]."<br>";


    // Object Property Notation
    echo $colorsObject->red."<br>";
    echo $colorsObject->{$colors[2]}."<br>";
    ?>

    <hr>
    <?php  

    print_r($colors);
    echo "<hr>";
    print_r($colorAssociative);
    echo "<hr>";
    print_r($colorsObject);
    echo"<pre>",print_r($colorsObject),"</pre>";

    // Function
    function print_p($v) {
        echo"<pre>",print_r($v),"</pre>";
    }
    print_p($_GET);
    


    ?>


</body>
</html>