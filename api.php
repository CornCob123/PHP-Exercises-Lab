<?php
header('Content-Type: application/json; charset=utf-8');
$method = $_SERVER['REQUEST_METHOD'];
$endpoint = $_SERVER['PATH_INFO'];

if($method === 'GET'){

    if($endpoint === '/mapPoints'){
        $json = file_get_contents('C:\\Users\\bushk\\Desktop\\androidproj\\RecyclingBins.geojson'); 
        //echo 'test';
        // Decode the JSON file 
        $json_data = json_decode($json,true); 
        
        
        // Display data 
        //print_r($json_data['features'][0]['geometry']['coordinates']); 
        //print_r($json_data['features'][0]['geometry']['coordinates']); 
        //print_r($json_data['features'][0]['properties']);
        $resp = array();
        foreach ($json_data['features'] as $row) {
        $latitude = $row['geometry']['coordinates'][0];
        $longitude = $row['geometry']['coordinates'][1];
        $myString = $row['properties']['Description'];
        $myArray = explode(' ', $myString); 
        $myArray2 = explode('/td', explode('ADDRESSSTREETNAME', $myString)[1]); 
        $myArray3 = explode('/td', explode('ADDRESSBLOCKHOUSENUMBER', $myString)[1]); 
        $count=0;
        $fullAddress = explode('<',explode('</th> <td>',$myArray2[0])[1])[0];
        $AddressNum = explode('<',explode('</th> <td>',$myArray3[0])[1])[0];
        $combine = $fullAddress.' '.$AddressNum;
        $arr=array("latitude"=>$latitude, "longitude"=>$longitude, "address"=>$combine);
        $obj=(object)$arr;
        array_push($resp , $obj);
        }
        //echo $resp[0]->{'address'};
        response($resp);


    }
}

function response($resp){
	$response['response'] = $resp;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>