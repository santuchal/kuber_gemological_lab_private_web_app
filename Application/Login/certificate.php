<?php

require_once('php-image-magician/php_image_magician.php');
include('include/connect.php'); 

function resizeMyImage($file, $destination, $w, $h) {
    //Get the original image dimensions + type
    list($source_width, $source_height, $source_type) = getimagesize($file);
 
    //Figure out if we need to create a new JPG, PNG or GIF
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if ($ext == "jpg" || $ext == "jpeg") {
        $source_gdim=imagecreatefromjpeg($file);
    } elseif ($ext == "png") {
        $source_gdim=imagecreatefrompng($file);
    } elseif ($ext == "gif") {
        $source_gdim=imagecreatefromgif($file);
    } else {
        //Invalid file type? Return.
        return;
    }
 
    //If a width is supplied, but height is false, then we need to resize by width instead of cropping
    if ($w && !$h) {
        $ratio = $w / $source_width;
        $temp_width = $w;
        $temp_height = $source_height * $ratio;
 
        $desired_gdim = imagecreatetruecolor($temp_width, $temp_height);
        imagecopyresampled(
            $desired_gdim,
            $source_gdim,
            0, 0,
            0, 0,
            $temp_width, $temp_height,
            $source_width, $source_height
        );
    } else {
        $source_aspect_ratio = $source_width / $source_height;
        $desired_aspect_ratio = $w / $h;
 
        if ($source_aspect_ratio > $desired_aspect_ratio) {
            /*
             * Triggered when source image is wider
             */
            $temp_height = $h;
            $temp_width = ( int ) ($h * $source_aspect_ratio);
        } else {
            /*
             * Triggered otherwise (i.e. source image is similar or taller)
             */
            $temp_width = $w;
            $temp_height = ( int ) ($w / $source_aspect_ratio);
        }
 
        /*
         * Resize the image into a temporary GD image
         */
 
        $temp_gdim = imagecreatetruecolor($temp_width, $temp_height);
        imagecopyresampled(
            $temp_gdim,
            $source_gdim,
            0, 0,
            0, 0,
            $temp_width, $temp_height,
            $source_width, $source_height
        );
 
        /*
         * Copy cropped region from temporary image into the desired GD image
         */
 
        $x0 = ($temp_width - $w) / 2;
        $y0 = ($temp_height - $h) / 2;
        $desired_gdim = imagecreatetruecolor($w, $h);
        imagecopy(
            $desired_gdim,
            $temp_gdim,
            0, 0,
            $x0, $y0,
            $w, $h
        );
    }
 
    /*
     * Render the image
     * Alternatively, you can save the image in file-system or database
     */
 
    if ($ext == "jpg" || $ext == "jpeg") {
        ImageJpeg($desired_gdim,$destination,100);
    } elseif ($ext == "png") {
        ImagePng($desired_gdim,$destination);
    } elseif ($ext == "gif") {
        ImageGif($desired_gdim,$destination);
    } else {
        return;
    }
 
    ImageDestroy ($desired_gdim);
}
 

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
		$weight_type = $row["weight_type"];
 	 	$measurement =$row["measurement"];		
		$gravity =$row["gravity"];		
		$ri =$row["ri"];
		$color = $row["color"];
		$cut =$row["cut"];		
		$clarity =$row["clarity"];		
		$remarks =$row["remarks"];
		$fluoresence=$row["fluoresence"];
		$finish=$row["finish"];
		$table=$row["table_1"];
		$crown=$row["crown"];
		$pavelion=$row["pavelion"];
		$gridle=$row["gridle"];
		$culet_size=$row["culet_size"];
		
		if ($fluoresence== null && $finish == null )
		{
			
			include "phpqrcode/qrlib.php";		
			$total_value =" Name : ".$name."\n Date : ".$create_date."\n Weight : ".$weight.$weight_type."\n Measurement : ".$measurement."\n Gravity : ".$gravity."\n Refractive Index : ".$ri."\n Color : ".$color."\n Cut : ".$cut."\n Clarity : ".$clarity."\n Remarks : ".$remarks."\n URL : http://www.kubergemologicallab.co.in/gem/certificate.php?id=".$random_id;		
			QRcode::png( $total_value, "uploads/".$random_id.".png", "L", 3, 3);		
			$src = imagecreatefrompng("uploads/".$random_id.".png");
			#imagedestroy($src);
			$image1 = imagecreatefrompng('Card_Gem.png');
			imagealphablending($image1, true);

			$red	= imagecolorallocate($image1, 35,31, 32);
			$red1	= imagecolorallocate($image1, 36,144,36);
			$red2	= imagecolorallocate($image1, 255, 69,0);
			// imagefttext("Image", "Font Size", "Rotate Text", "Left Position", "Top Position", "Font Color", "Font Name", "Text To Print");

			#echo $name.$ri.$gravity ;

			#$jpeg_image = imagecreatefromjpeg( "uploads/".$image_name );

			imagefttext($image1, 25, 0, 285, 285, $red, 'arial.ttf', $name);
			imagefttext($image1, 25, 0, 715, 277, $red1, 'arial.ttf', "Date :".$create_date);
			imagefttext($image1, 25, 0, 285, 325, $red, 'arial.ttf', $weight." ".$weight_type);
				
			imagefttext($image1, 25, 0, 285, 358, $red, 'arial.ttf', $measurement);	
			imagefttext($image1, 25, 0, 285, 395, $red, 'arial.ttf', $gravity);
			imagefttext($image1, 25, 0, 285, 430, $red, 'arial.ttf', $ri);
			imagefttext($image1, 25, 0, 285, 465, $red, 'arial.ttf', $color);				
			imagefttext($image1, 25, 0, 285, 505, $red, 'arial.ttf', $clarity);
			imagefttext($image1, 25, 0, 285, 540, $red, 'arial.ttf', $cut);
			imagefttext($image1, 25, 0, 285, 575, $red2, 'arial.ttf', $remarks);
			imagefttext($image1, 25, 0, 785, 205, $red, 'arial.ttf', $random_id);



			#$filename1 = jpegtopng($filename1);

			#####$jpeg_image = resizeImage( $filename1 , 170, 170);
			#####$src = resizeImage ( $filename2, 170,170);
			resizeMyImage('uploads/'.$random_id.'.jpg', 'Final/'.$random_id.'.jpg', 190, 170);
			resizeMyImage('uploads/'.$random_id.'.png', 'Final/'.$random_id.'.png', 190, 170);
			//$magicianObj1 = new imageLib('uploads/'.$random_id.'.jpg');
			//$magicianObj2 = new imageLib('uploads/'.$random_id.'.png');

			//$magicianObj1 -> resizeImage(170, 170);
			//$magicianObj2 -> resizeImage(140, 140);

			//$magicianObj1 -> saveImage('Final/'.$random_id.'.jpg', 100);
			//$magicianObj2 -> saveImage('Final/'.$random_id.'.png', 100);

			$filename1 		= imagecreatefromjpeg('Final/'.$random_id.'.jpg');
			$filename2		= imagecreatefrompng('Final/'.$random_id.'.png');
			#echo $filename1;
			#echo $src;
			#int imagecopy ( resource dest_image, resource source_image, int dest_x, int dest_y, int source_x, int source_y, int source_width, int source_height) 
			imagecopy($image1, $filename1, 655, 5, 0, 0, 170, 170);
			imagecopy($image1, $filename2, 725, 287, 0, 0, 190, 170);
			ImagePng($image1, 'Print/'.$random_id.'.jpg');

			#ImagePng($image1, $filename);
			imagedestroy($image1);
		}
		else{
		
		
		
		
		include "phpqrcode/qrlib.php";		
		$total_value =" Name : ".$name."\n Date : ".$create_date."\n Weight : ".$weight.$weight_type."\n Measurement : ".$measurement."\n Color : ".$color."\n Cut : ".$cut."\n Clarity : ".$clarity."\n Fluorescence: ".$fluoresence."\n Finish : ".$finish."\n Table : ".$table."\n Crown : ".$crown."\n Pavilion : ".$pavelion."\n Girdle : ".$gridle."\n Culet Size : ".$culet_size."\n URL : http://www.kubergemologicallab.co.in/gem/certificate.php?id=".$random_id;		
		QRcode::png( $total_value, "uploads/".$random_id.".png", "L", 3, 3);		
		$src = imagecreatefrompng("uploads/".$random_id.".png");
		#imagedestroy($src);
		$image1 = imagecreatefrompng('Card_Diamond1.png');
		imagealphablending($image1, true);

		$red	= imagecolorallocate($image1, 35,31, 32);

		// imagefttext("Image", "Font Size", "Rotate Text", "Left Position", "Top Position", "Font Color", "Font Name", "Text To Print");

		#echo $name.$ri.$gravity ;

		#$jpeg_image = imagecreatefromjpeg( "uploads/".$image_name );
		imagefttext($image1, 25, 0, 765, 220, $red, 'arial.ttf', $random_id);
		imagefttext($image1, 25, 0, 245, 310, $red, 'arial.ttf', $name);
		imagefttext($image1, 25, 0, 245, 345, $red, 'arial.ttf', $create_date);
		imagefttext($image1, 25, 0, 245, 385, $red, 'arial.ttf', $weight." ".$weight_type);			
		imagefttext($image1, 25, 0, 245, 420, $red, 'arial.ttf', $measurement);	
		imagefttext($image1, 25, 0, 245, 455, $red, 'arial.ttf', $cut);	
		imagefttext($image1, 25, 0, 245, 488, $red, 'arial.ttf', $clarity);
		imagefttext($image1, 25, 0, 245, 525, $red, 'arial.ttf', $color);
		imagefttext($image1, 25, 0, 245, 562, $red, 'arial.ttf', $fluoresence);
		imagefttext($image1, 25, 0, 700, 305, $red, 'arial.ttf', $finish);
		imagefttext($image1, 25, 0, 700, 345, $red, 'arial.ttf', $table);
		imagefttext($image1, 25, 0, 700, 385, $red, 'arial.ttf', $crown);
		imagefttext($image1, 25, 0, 700, 420, $red, 'arial.ttf', $pavelion);
		imagefttext($image1, 25, 0, 700, 455, $red, 'arial.ttf', $gridle);
		imagefttext($image1, 25, 0, 700, 487, $red, 'arial.ttf', $culet_size);


		#$filename1 = jpegtopng($filename1);

		#####$jpeg_image = resizeImage( $filename1 , 170, 170);
		#####$src = resizeImage ( $filename2, 170,170);
		resizeMyImage('uploads/'.$random_id.'.jpg', 'Final/'.$random_id.'.jpg', 190, 190);
		resizeMyImage('uploads/'.$random_id.'.png', 'Final/'.$random_id.'.png', 190, 190);
		//$magicianObj1 = new imageLib('uploads/'.$random_id.'.jpg');
		//$magicianObj2 = new imageLib('uploads/'.$random_id.'.png');

		//$magicianObj1 -> resizeImage(170, 170);
		//$magicianObj2 -> resizeImage(140, 140);

		//$magicianObj1 -> saveImage('Final/'.$random_id.'.jpg', 100);
		//$magicianObj2 -> saveImage('Final/'.$random_id.'.png', 100);

		$filename1 		= imagecreatefromjpeg('Final/'.$random_id.'.jpg');
		$filename2		= imagecreatefrompng('Final/'.$random_id.'.png');
		#echo $filename1;
		#echo $src;
		#int imagecopy ( resource dest_image, resource source_image, int dest_x, int dest_y, int source_x, int source_y, int source_width, int source_height) 
		imagecopy($image1, $filename1, 755, 5, 0, 0, 190, 190);
		imagecopy($image1, $filename2, 540, 5, 0, 0, 190, 190);
		ImagePng($image1, 'Print/'.$random_id.'.jpg');

		#ImagePng($image1, $filename);
		imagedestroy($image1);
		}
}
else
{
header("Location:index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kuber Image Viewer</title>
</head>

<body>
<img src="<?php echo 'Print/'.$random_id.'.jpg'; ?>">
<input name="back" value="Back" type="button" class="Back" onClick="window.location='index.php'">
</body>
</html>



