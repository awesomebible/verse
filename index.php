<?php
	$DayOfYear = date('z') + 1;
	$cacheRef = "cacheFile.txt"; // Edit this to the exact file path for your install of verse + "cacheFile.txt"
	$cachedImage = "cachedImage.jpg"; // Edit this to the exact file path for your install of verse + "cachedImage.jpg"

		if(file_get_contents($cacheRef) == $DayOfYear){
			// If cache is fresh
			header('Content-type: image/jpg;');
			header('Cache-Control: max-age 86400');

			echo file_get_contents($cachedImage);
			die;
		}else{
			// If cache is stale
			unlink($cachedImage);
			unlink($cacheRef);

			copy('https://raw.githubusercontent.com/awesomebible/verse/master/img/'.$DayOfYear.'.jpg', $cachedImage);

			header('Content-type: image/jpg;');
			header('Cache-Control: max-age 86400');
			echo file_get_contents($cachedImage);

			$myfile = fopen($cacheRef, "w") or die("Unable to open file!");
			$txt = "".$DayOfYear."\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			die;
		};
		
		echo "Sorry, but my creator forbid me to do that."
?>
