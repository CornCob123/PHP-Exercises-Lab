<!DOCTYPE html>
<?php 
$name = $gender ="";
$operation = $num1 = $num2 ="";
$errMsg = "";
$error = FALSE;
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["name"])){
	$error = TRUE;
	$errMsg = "Name cannot be NULL";
	}
	else {
        $name = $_POST["name"];
	}
	if (isset($_POST["gender"])){
        $gender = $_POST["gender"];
	}
}
?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label>Name:</label> 
    <input type="text" name="name" value = <?php echo"$name"?>><span class="err">* <?php echo $errMsg?></span><br>
    
    <label>Gender:</label> 
    <input type="radio" name=gender value="male" checked> Male
    <input type="radio" name=gender value="female" <?php if($gender=="female")echo"checked"?>> Female<br>
<input type="submit">
</form>


<?php 

 if($_SERVER["REQUEST_METHOD"]== "POST"){
	if ($error ==TRUE){
            return;
	}
    echo "Hi $name<p/>";
	echo "You are $gender";

	}
?>
</body>

</html>