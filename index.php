<?php
	$DayOfYear = date('z') + 1;
	$cacheRefFilePath = "cacheFile.txt"; // Edit this to the exact file path for your install of verse + "cacheFile.txt"
	$cacheRef = file_get_contents("cacheFile.txt"); // Edit this to the exact file path for your install of verse + "cacheFile.txt"
	$cachedImage = file_get_contents("cachedImage.jpg"); // Edit this to the exact file path for your install of verse + "cachedImage.jpg"

		if($cacheRef == $DayOfYear){
			// If cache is fresh
			header('Content-type: image/jpg;');
			header('Cache-Control: max-age 86400');
			echo $cachedImage;
			die;
		}else{
			// If cache is stale
			copy('https://raw.githubusercontent.com/awesomebible/verse/master/img/'.$DayOfYear.'.jpg', $cacheRefFilePath);

			header('Content-type: image/jpg;');
			header('Cache-Control: max-age 86400');
			echo $cachedImage;

			$myfile = fopen($cacheRefFilePath, "w") or die("Unable to open file!");
			$txt = "".$DayOfYear."\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			die;
		}
		
		echo "Sorry, but my creator forbid me to do that."
?>