<?php
    // Get location
    $location = $_GET['location'];
    $output = $_GET['output'];


    if(isset($_GET['version'])){
        $version = $_GET['version'];
    };

    $imagelist = file_get_contents("https://codeberg.org/awesomeBible/verse/raw/branch/master/api/v1/".$location.".json");
    $imagelist_json = json_decode($imagelist);

    $url = $imagelist_json->$version;
    if (property_exists($imagelist_json, $version)){
    if($output == "image"){
        header('Content-type: image/jpeg;');
        header('Cache-Control: max-age 31536000');
        echo file_get_contents($url);
        die;
    }else{
        header('Content-type: application/json;');
        header('Cache-Control: max-age 31536000');
        echo '{"status":"200", "content":"'.$url.'"}';
        die;
    }
}else{
    header('Content-type: application/json;');
    echo '{"status":"404", "content":"You probably didnt specify any parameters."}';
    die; 
}else{
    header('Content-type: application/json;');
    echo '{"status":"400", "content":"Invalid API-Key. Check again, or register one at https://awesomebible.de/kontakt/."}';
    die;
}
?>