<!DOCTYPE html>
<?php 
$name = $gender ="";
$post="thththth,gfdgfgf,gfgfgfg";
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
<div id="test">
  <p><label for="w3review">Review of W3Schools:</label></p>
  <textarea id="w3review" name="w3review" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
  <br>
  <?php 

 for ($x = 0; $x <= 2; $x++) {
    echo (explode(",",$post))[$x]."<br>";
  }
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =
“my_db”;
// Create connection
$conn = new mysqli($servername, $username,
$password, $dbname);
// Check connection
if (mysqli_connect_error()) {
die("Database connection failed: " .
mysqli_connect_error());
}
$sql = "SELECT * FROM Persons";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "id:".$row['ID'];
}
} else {
echo "0 results";
}
$conn->close();
?>

  <button onclick="addPost()">Click me</button>
</div>

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
function addPost(){

    document.getElementById("test")
                .innerHTML +=
'<br><img src="Leon.jpg" width="50" height="50"> <label> Name: Leon</label><br>';
document.getElementById("test")
                .innerHTML +=
"<h3>This is the text which has been inserted by JS</h3>";

}

function loadPost(test){

//call database select all from table
//for each record
alert(test)
}
function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
</script>

</html>