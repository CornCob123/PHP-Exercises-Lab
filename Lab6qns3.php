<!DOCTYPE html>
<?php 
$name = $gender ="";
$operation = $num1 = $num2 ="";
$errMsg = "";
$error = FALSE;
if ($_SERVER["REQUEST_METHOD"] == "GET"){

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
    <form action="Lab6qns3.php" method="get">
    <label>Name:</label> 
    <input type="text" name="name" value = <?php echo"$name"?>><span id="nameerr"></span><br>
    
    <label>Gender:</label> 
    <input type="radio" name=gender value="male" > Male
    <input type="radio" name=gender value="female"> Female <span id="gendererr"></span><br>
<input type="button" value="Submit" onclick="validateInputs();">
</form>


<?php 

 if($_SERVER["REQUEST_METHOD"]== "get"){
	if ($error ==TRUE){
            return;
	}
    echo "Hi $name<p/>";
	echo "You are $gender";

	}
?>
</body>
<script>
function validateInputs(){
    
    var name = document.getElementsByName("name")[0].value;
    var gender = document.getElementsByName("gender")[0].checked;
    if(!name || name ==="" ){
        alert("Im fucker");
         document.getElementById("nameerr").innerHTML = "Name is required";
    }
    if(!gender || gender ===""){
        alert("Im fucker");
        document.getElementById("gendererr").innerHTML = "Select your gender";
    }

}

</script>
</html>