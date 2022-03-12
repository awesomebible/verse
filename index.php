<?php
	$DayOfYear = date('z') + 1;
    $Year = date("Y");
	$cacheRef = "cacheFile.txt"; // Edit this to the exact file path for your install of verse + "cacheFile.txt"
    $cachedImage = "cachedImage.jpg"; // Edit this to the exact file path for your install of verse + "cachedImage.jpg"
    
    function cacheStale(){
        global $Year;
        global $DayOfYear;
        global $cacheRef;
        global $cachedImage;

        // If cache is stale
			if(file_exists($cachedImage)){unlink($cachedImage);};
			if(file_exists($cacheRef)){unlink($cacheRef);};

			copy("https://verse.awesomebible.de/img/".$Year."/".$DayOfYear.".jpg", "cachedImage.jpg");

			header('Content-type: image/jpg;');
			echo file_get_contents($cachedImage);

			$myfile = fopen($cacheRef, "w") or die("Unable to open file!");
			$txt = "".$DayOfYear."\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			die;
    };
    function cacheFresh(){
        global $cachedImage;
        	// If cache is fresh
			header('Content-type: image/jpg;');
            if(file_exists($cachedImage)){
			echo file_get_contents($cachedImage);
            die;
        }else{
            cacheStale();
        };
    };

    if(file_get_contents($cacheRef) == $DayOfYear){
        cacheFresh();
    }else{
        cacheStale();
    }

    echo "Sorry, but my creator forbid me to do that.";
    echo "<br>";
    echo "Error-Code: ".$DayOfYear."";
?>
