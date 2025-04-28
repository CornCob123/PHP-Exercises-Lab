<?php 
// Read the JSON file  
$json = file_get_contents('C:\\Users\\bushk\\Desktop\\androidproj\\RecyclingBins.geojson'); 
  
// Decode the JSON file 
$json_data = json_decode($json,true); 


//Display data 
print_r($json_data['features'][0]['geometry']['coordinates']); 
print_r($json_data['features'][0]['properties']);
$myString = $json_data['features'][0]['properties']['Description'];
$myArray = explode(' ', $myString); 
$myArray2 = explode('/td', explode('ADDRESSSTREETNAME', $myString)[1]); 
$myArray3 = explode('/td', explode('ADDRESSBLOCKHOUSENUMBER', $myString)[1]); 
$count=0;
foreach ($myArray as $x) {
    if (strpos($x, 'ADDRESSSTREETNAME') !== false) {
        echo "$x <br>";
        echo $count;
    }
    $count++;
  }
echo $myArray[21];
echo '<br>';
$buildingNum = explode('<',$myArray2[0])[0];
$address = explode('<',$myArray3[0])[0];
$fullAddress = $buildingNum." ".$address;
echo $fullAddress;



?>