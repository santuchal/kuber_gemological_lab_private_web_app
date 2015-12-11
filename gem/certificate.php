<?php

include('include/connect.php'); 


if(isset($_GET['id']))
{
	$random_id = $_GET['id'];
	$qry = "SELECT * FROM tbl_gem where id=".$_GET['id'];
    $result = mysql_query($qry);
	
	$row = mysql_fetch_array($result);	
		$name = $row['name'];		
		$image_name=$row['image'];
		$create_date =$row["create_date"];
		$weight =$row["weight"];		
 	 	$measurement =$row["measurement"];		
		$gravity =$row["gravity"];		
		$ri =$row["ri"];
		$color = $row["color"];
		$cut =$row["cut"];		
		$clarity =$row["clarity"];		
		$remarks =$row["remarks"];	  	
		include "phpqrcode/qrlib.php";		
		#$src = imagecreatefrompng("uploads/".$random_id.".png");
		#imagedestroy($src);
}
else
{
header("Location:index.php");
}
$image1 = imagecreatefrompng('blue.png');
imagealphablending($image1, true);

$red	= imagecolorallocate($image1, 0,0, 0);

// imagefttext("Image", "Font Size", "Rotate Text", "Left Position", "Top Position", "Font Color", "Font Name", "Text To Print");

#echo $name.$ri.$gravity ;

#$jpeg_image = imagecreatefromjpeg( "uploads/".$image_name );
imagefttext($image1, 70, 0, 120, 100, $red, 'mono.ttf', "Kuber Gemological Lab");
imagefttext($image1, 30, 0, 205, 200, $red, 'mono.ttf', $name);
imagefttext($image1, 30, 0, 730, 258, $red, 'mono.ttf', "Date:- ".$create_date);
imagefttext($image1, 30, 0, 205, 258, $red, 'mono.ttf', $weight);	
imagefttext($image1, 30, 0, 320, 315, $red, 'mono.ttf', $measurement);	
imagefttext($image1, 30, 0, 225, 370, $red, 'mono.ttf', $gravity);
imagefttext($image1, 30, 0, 340, 430, $red, 'mono.ttf', $ri);
imagefttext($image1, 30, 0, 650, 435, $red, 'mono.ttf', "Color :".$color);
imagefttext($image1, 30, 0, 255, 540, $red, 'mono.ttf', $clarity);	
imagefttext($image1, 30, 0, 195, 485, $red, 'mono.ttf', $cut);	
imagefttext($image1, 30, 0, 285, 595, $red, 'mono.ttf', $remarks);
imagefttext($image1, 30, 0, 785, 360, $red, 'mono.ttf', $random_id);
imagefttext($image1, 10, 0, 75, 695, $red, 'mono.ttf', "*Please check the Original Certificate for details.");
imagefttext($image1, 10, 0, 75, 715, $red, 'mono.ttf', "** If lost the certificate contact with +917872532533 or info@kubergemologicallab.co.in.");

#$filename1 = jpegtopng($filename1);

#####$jpeg_image = resizeImage( $filename1 , 170, 170);
#####$src = resizeImage ( $filename2, 170,170);
#resizeMyImage('uploads/'.$random_id.'.jpg', 'Final/'.$random_id.'.jpg', 170, 170);
#resizeMyImage('uploads/'.$random_id.'.png', 'Final/'.$random_id.'.png', 140, 140);
//$magicianObj1 = new imageLib('uploads/'.$random_id.'.jpg');
//$magicianObj2 = new imageLib('uploads/'.$random_id.'.png');

//$magicianObj1 -> resizeImage(170, 170);
//$magicianObj2 -> resizeImage(140, 140);

//$magicianObj1 -> saveImage('Final/'.$random_id.'.jpg', 100);
//$magicianObj2 -> saveImage('Final/'.$random_id.'.png', 100);

#$filename1 		= imagecreatefromjpeg('Final/'.$random_id.'.jpg');
#$filename2		= imagecreatefrompng('Final/'.$random_id.'.png');
#echo $filename1;
#echo $src;
#int imagecopy ( resource dest_image, resource source_image, int dest_x, int dest_y, int source_x, int source_y, int source_width, int source_height) 
#imagecopy($image1, $filename2, 700, 5, 0, 0, 140, 140);
#imagecopy($image1, $filename1, 700, 325, 0, 0, 170, 170);
ImagePng($image1, 'Final/'.$random_id.'.jpg');

#ImagePng($image1, $filename);
imagedestroy($image1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kuber Image Viewer</title>
</head>

<body>
<img src="<?php echo 'Final/'.$random_id.'.jpg'; ?>">

</body>
</html>



