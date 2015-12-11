<?php

$yourname		= "Santu Chall";
$date			= "09 June 1986";
$pos		 	= 65;

$image = imagecreatefrompng('blue.png');
imagealphablending($image, true);

$red	= imagecolorallocate($image, 150,0, 0);

// imagefttext("Image", "Font Size", "Rotate Text", "Left Position", "Top Position", "Font Color", "Font Name", "Text To Print");

imagefttext($image, 30, 0, 70, 154, $red, 'mono.ttf', $yourname);
imagefttext($image, 20, 0, 312, 206, $red, 'mono.ttf', $date);	
imagefttext($image, 20, 0, 82, 256, $red, 'mono.ttf', $pos);	


$filename 		= 'certificate_aadarsh.png';
ImagePng($image, $filename);
imagedestroy($image);


?>