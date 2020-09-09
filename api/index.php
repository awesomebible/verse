<?php
$keys_json = file_get_contents("keys.json");
$api_key = $_GET['key'];
$output_format = $_GET['output'];

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
        if($output_format == "json" || $output_format == null)
            header('Content-type: application/json;');
            header('Cache-Control: max-age 31536000');
            echo '{"status":"200", "content":"'.$url.'"}';
            die;
        }else{
            header('Content-type: application/json;');
            header('Cache-Control: max-age 31536000');
            echo '{"status":"200", "content":"'.$url.'"}';
            die;
        };
    }
}else{
    header('Content-type: application/json;');
    echo '{"status":"400", "content":"Invalid API-Key. Check again, or register one at https://awesomebible.de/kontakt/."}';
    die;
};
?>
