<?php
// Check if the API-Key is in keys.json
    // Get location
    $location = $_GET['location'];
    if(isset($_GET['version'])){
        $version = $_GET['version'];
    };

    $imagelist = file_get_contents("https://raw.githubusercontent.com/awesomebible/verse/master/api/v1/".$location.".json");

    echo $imagelist;
    die;
?>