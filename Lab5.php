<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
    <body>
    <h1>XAMPP (2021)</h>
    <p></p>
    <?php
    $age = 12;
    $shoe_size = 13;
    if ($age > $shoe_size) {
    print "Message 1.";
    } elseif (($shoe_size++) && ($age > 20)) {
    print "Message 2.";
    } else {
    print "Message 3.";
    }
    print "Age: $age. Shoe Size: $shoe_size";

    echo "<br><br><table><tr>";
    echo "<th>Fahrenheit</th>";
    echo "<th>Celcius</th></tr>";
    $i = 0;
    while($i <50){

        echo "<tr><td>$i</td><td>$i</td></tr>";
        $i += 1;
    }
    echo "</table><br><br>";

    echo "<br><br><table><tr>";
    echo "<th>Fahrenheit</th>";
    echo "<th>Celcius</th></tr>";
    $i = 0;
    for($i=0; $i<50; $i++){

        echo "<tr><td>$i</td><td>$i</td></tr>";
    }
    echo "</table><br><br>";

    $cars=array();
    $average = 0;
    for($i=1;$i<11;$i++){

        $cars[$i]=$i;
        $average += $i;
    }
    $average = $average/10;
    echo count($cars)."<br>";
    echo $average."<br>";

    foreach($cars as $num){
         if($num % 2==1){
            $square = $num **2;
            echo $square."<br>";

         }
    }

    $salary = array("Peter"=>3800, "Lily"=>2300, "Helen"=>3100);

    echo "<br><table><tr><th>Name</th><th>Salary</th></tr><tr>";
    foreach($salary as $person => $person_value){
        echo "<tr><td>$person</td><td>$person_value</td></tr>";

    }
    echo "</table>";
    ?>
    </body>
</html>
