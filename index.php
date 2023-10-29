<?php
	$DayOfYear = date('z') + 1;
    $Year = date("Y");
    if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/avif' ) !== false){
        $fileExtension = ".avif"; // The file extension of the images with leading dot.
        $fileMimeType = "image/avif"; // The mime type of the image files, look here: https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types    
    } else {
        $fileExtension = ".jpg"; // The file extension of the images with leading dot.
        $fileMimeType = "image/jpg"; // The mime type of the image files, look here: https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types    
    }
    $baseURL = "https://verse.awesomebible.de/img/"; # URL that points to the root of the image directory, with a trailing slash.
	$cacheRef = "cacheFile.txt"; // Edit this to the exact file path for your install of verse + "cacheFile.txt"
    $cachedImage = "cachedImage"; // Edit this to the exact file path for your install of verse + "cachedImage"

    function cacheStale(){
        global $Year;
        global $DayOfYear;
        global $cacheRef;
        global $baseURL;
        global $cachedImage;
        global $fileExtension;
        global $fileMimeType;

        // If cache is stale
			if(file_exists($cachedImage.$fileExtension)){unlink($cachedImage.$fileExtension);};
			if(file_exists($cacheRef)){unlink($cacheRef);};

			copy($baseURL.$Year."/".$DayOfYear.$fileExtension, $cachedImage.$fileExtension);

            header('Content-type: '.$fileMimeType.';');
			echo file_get_contents($cachedImage.$fileExtension);

			$CacheFileW = fopen($cacheRef, "w") or die("Unable to open file!");
			$txt = "".$DayOfYear."\n";
			fwrite($CacheFileW, $txt);
			fclose($CacheFileW);
			die;
    };
    function cacheFresh(){
        global $cachedImage;
        global $fileMimeType;
        	// If cache is fresh
			header('Content-type: '.$fileMimeType.';');
            if(file_exists($cachedImage.$fileExtension)){
			echo file_get_contents($cachedImage.$fileExtension);
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

    echo "Oops, something went wrong. :(";
    echo "<br>";
    echo "Please contact ";
    die();
?>
