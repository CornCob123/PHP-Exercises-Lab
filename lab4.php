<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <h1>XAMPP (2021)</h>
    <p></p>
    <?php
    $hamburger = 4.95;
    $milkShake = 1.95;
    $coffee = 0.85;
    $total = $hamburger *2  + $milkShake +$coffee;
    $totalWithTax = 0.7 * $hamburger *2  + $milkShake +$coffee;
    $tip =1.27;
    $firstName ="Leon";
    $lastName = "Sia";
    #qns 1
    echo "Qns1<br>";
    echo "<p>How are you?</p>\n";
    echo "\nI'm fine.<br>";

    #qns 2
    echo "Qns2<br>";
    echo "<p>Pre Tax: $total</p>";
    echo "\n<p>Post Tax: $totalWithTax</p>";

    #qns 3
    echo "Qns3<br>";
    echo "<p><b>Items".str_repeat('&nbsp;', 50)."Price Quantity".str_repeat('&nbsp;', 50)."Total </p>\n";
    echo "<p>Hamburgers".str_repeat('&nbsp;', 38)."$4.95 2".str_repeat('&nbsp;', 64).($hamburger*2)."</p>\n";
    echo "<p>Chocolate Milkshake".str_repeat('&nbsp;', 24)."$$milkShake 2".str_repeat('&nbsp;', 64).($milkShake*2)."</p>\n";
    echo "<p>Coffee".str_repeat('&nbsp;', 49)."$$coffee 2".str_repeat('&nbsp;', 64).($coffee*2)."</p>\n";
    echo "<p>".str_repeat('&nbsp;', 60)."Total before Tax Total".str_repeat('&nbsp;', 38).$total."</p>\n";
    echo "<p>".str_repeat('&nbsp;', 60)."Post-Tax Total".str_repeat('&nbsp;', 51).$totalWithTax."</p>\n";
    echo "<p>".str_repeat('&nbsp;', 60)."Pre-Tax Tip".str_repeat('&nbsp;', 55).$tip."</p>\n";
    echo "<p>".str_repeat('&nbsp;', 60)."Total Cost".str_repeat('&nbsp;', 58).($totalWithTax+$tip)."</p>\n";

    #qns 4
    echo "Qns4<br>";
    echo $firstName."&nbsp".$lastName;
    echo strlen($firstName."&nbsp".$lastName);
    echo "<br>";

    #qns 5
    echo "Qns5<br>";
    $count=1;
    $total=1;
    for($i=1; $i<6; $i++){
    echo $count++;
    echo "<br>";
    echo $total*=2;
    echo "<br>";
    }
    #qns 6


    ?> 

    </body>
</html>