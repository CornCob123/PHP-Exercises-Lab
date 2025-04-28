<!DOCTYPE html>
<?php 
$name = $gender ="";
$operation = "";
$num1 = $num2 = 0;
$errMsg = "";
$error = FALSE;
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty(test_input($_POST["num1"]))){
	$error = TRUE;
	$errMsg = "Number1 cannot be NULL";
	}
	else {
        $num1 = $_POST["num1"];
	}
    
    if (empty(test_input($_POST["num2"]))){
        $error = TRUE;
        $errMsg = "Number2 cannot be NULL";
        }
        else {
            $num2 = $_POST["num2"];
        }
	if (test_input(isset($_POST["operation"]))){
        $operation = $_POST["operation"];
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
    <label>Enter Number:</label> 
    <input type="number" name="num1" value = <?php echo"$num1"?>><span class="err">* <?php echo $errMsg?></span><br>
    
    <label>Enter Number:</label> 
    <input type="number" name="num2" value = <?php echo"$num2"?>><span class="err">* <?php echo $errMsg?></span><br>
    
     
    <input type="radio" name=operation value="addition" checked> <label>Addition</label><br>
    <input type="radio" name=operation value="subtraction" checked> <label>Subtraction</label><br>
    <input type="radio" name=operation value="multiplication" checked> <label>Multiplication</label><br>
    <input type="radio" name=operation value="division" checked> <label>Division</label><br>
    
<input type="submit">
</form>

<?php 

 if($_SERVER["REQUEST_METHOD"]== "POST"){
	if ($error ==TRUE){
            return;
	}
    if($operation=="addition"){
        echo ($num1+$num2);
    }
    if($operation=="subtraction"){
        echo $num1-$num2;
    }
    if($operation=="multiplication"){
        echo $num1*$num2;
    }
    if($operation=="division"){
        echo $num1/$num2;
    }


	}
?>
</body>
<script>

function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
</script>
</html>