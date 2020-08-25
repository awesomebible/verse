<?php
// Config
$verseLocation = "/web/verse.awesomebible.de/" // with trailing slash

date_default_timezone_set('Europe/Berlin'); // Change this to your own timezone
$current_date = date('H:i:s - d/m/Y');
$mimetypes = ['image/png','image/jpg','image/jpeg','image/gif','video/mp4'];

$url = htmlentities("https://raw.githubusercontent.com/awesomebible/verse/master/img/$DayOfYear.jpg");

// if a valid MIME type exists, display the image
// by sending appropriate headers and streaming the file
/* foreach($mimetypes as $mimetype) {
	if ($mime == $mimetype){
		header('Content-type: '.$mime.';');
		header('Cache-Control: max-age 86400');
		if(isset($url)){
			echo file_get_contents($url);
			die;
		}
	}
} */

echo "Sorry, but my creator forbid me to do that."


$DayOfYear = date('z') + 1;
if(file_get_contents($verseLocation . "cachedDate.txt") == $DayOfYear){
	header('Content-type: image/jpg;');
	header('Cache-Control: max-age 86400');
		echo file_get_contents($verseLocation . "CachedImage.jpg");
		die;
}else{

	// Image path
	$img = $verseLocation.'CachedImage.jpg';

	// Save image 
	file_put_contents($img, file_get_contents($url));

	// Update cachetime
	$myfile = fopen($verseLocation."CachedDate.txt", "w") or die("Unable to process request. Error: Can't open file.");
	fwrite($myfile, $DayOfYear);
	fclose($myfile);

	header('Content-type: image/jpg;');
	header('Cache-Control: max-age 86400');
		echo file_get_contents($verseLocation . "CachedImage.jpg");
		die;
}
?>
