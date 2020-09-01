<?php
$keys_json = file_get_contents("keys.json");
$api_key = $_GET['key'];

$keys_array = json_decode($keys_json);

// Check if the API-Key is in keys.json
if (in_array($api_key, $keys_array)) {
    return true;
}else{
    die;
};

// Get location
$location = $_GET['location'];
$imagelist = file_get_contents("https://raw.githubusercontent.com/awesomebible/verse/master/api/imagelist.json");

if (property_exists($imagelist, $location)){
    echo "treu";
}
?>