<?php
$keys_json = file_get_contents("keys.json");
$api_key = $_GET['key'];

$keys_array = json_decode($keys_json);

// Check if the API-Key is in keys.json
if (in_array($api_key, $keys_array)) {
    // Get location
    $location = $_GET['location'];

    if(isset($_GET['version'])){
        $version = $_GET['version'];
    };

    $imagelist = file_get_contents("https://raw.githubusercontent.com/awesomebible/verse/master/api/imagelist.json");
    $imagelist_json = json_decode($imagelist);

    if (property_exists($imagelist_json, $location)){
        $url = $imagelist_json->$location;
        header('Content-type: image/jpg;');
		header('Cache-Control: max-age 31536000');
        echo file_get_contents($url);
        die;
    }
}else{
    header('Content-type: application/json;');
    echo '{"error":"234", "message":"Invalid API-Key. Check again, or register one at https://awesomebible.de/kontakt/."}';
    die;
};
?>
