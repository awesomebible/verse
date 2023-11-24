<?php
    if(isset($_GET['key']) && isset($_GET['location'])){
        // Check if api key is valid
        $key = $_GET['key'];
        $keylist = json_decode(file_get_contents("keys.json"));
        if(!in_array($key, $keylist)){
            header("Content-Type: application/json;");
            echo('{"status":"400", "content":"Invalid API-Key. Check again, or register one at https://awesomebible.de/kontakt/."}');
            die;
        }
        if(isset($_GET['location'])){
            $location = $_GET['location'];
            $imagelist = json_decode(file_get_contents("https://codeberg.org/awesomeBible/verse/raw/branch/main/api/v1/".$location.".json"));
            
            $url = $imagelist->url;

            if($_GET['output'] == "image"){
                header('Content-type: image/jpg;');
			    header('Cache-Control: max-age=86400');
                print($url);
                die;
            }else{
                header('Content-type: application/json;');
                echo '{"status":"200", "content":"'.$url.'"}';
                die;
            }
        }
    }
    header('Content-type: application/json;');
    echo '{"status":"404", "content":"You probably didnt specify any parameters."}';
    die;
?>