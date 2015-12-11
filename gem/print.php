<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Bappa Ghosh:Create,Read,Update & Delete Gem Test Sheet</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
  
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="css/style.responsive.css" media="all">


    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>
    <script type="text/javascript" language="JavaScript">
    jQuery(document).ready(function()
    {
      jQuery(".form-message").fadeOut(10000);
    });
    </script>

<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
    <div id="art-header-bg" class="clearfix">
            </div>
    <div id="art-hmenu-bg" class="art-bar art-nav clearfix">
    </div>
    <div class="art-sheet clearfix">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="0.5%">
    <a  href="http://www.kubergemologicallab.co.in" target="_blank">Kuber Gemological Lab <img src="images/logo.png" height="100" style="position: absolute; top: -34px; right: -106px;" title="99demos.blogspot.com"></a>
</h1>
<h2 class="art-slogan" data-left="87.05%"><a href="http://www.kubergemologicallab.co.in">Kuber Gemological Lab </a></h2>


            </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu"><li><a href="index.php" class="active">Home</a></li><li><a href="index.php" class="active">Template</a></li></ul> 
        </div>
    </nav>

                    
</header>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <h2 class="art-postheader">Create,Read,Update & Delete Gem Certificate</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <br>
        
        
<?php
ob_start(); 
include('include/connect.php'); 
if(isset($_GET['id']))
{
	$qry = "SELECT * FROM tbl_gem where id=".$_GET['id'];
    $result = mysql_query($qry);
	$row = mysql_fetch_array($result);
	
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
       /*  $name = $_POST["name"];
        IF($_FILES['file']['name']!='')
        {
				 $file='uploads/'.$row['image'];
				 @unlink($file);
           	     $tmp_name = $_FILES["file"]["tmp_name"];
            	 $namefile = $_FILES["file"]["name"];
				 $ext = end(explode(".", $namefile));
				 $image_name=time().".".$ext;
            	 $fileUpload = move_uploaded_file($tmp_name,"uploads/".$image_name);
		}
		else
		{
				$image_name=$row['image'];
		}
		$weight =$_POST["weight"];
		
 	 	$measurement =$_POST["measurement"];
		
		$gravity =$_POST["gravity"];
		
		$ri =$_POST["ri"];
		
		
		$cut =$_POST["cut"];
		
		$clarity =$_POST["clarity"];
		
		$remarks =$_POST["remarks"]; */
	  	
		#include "phpqrcode/qrlib.php";
		
		#$total_value =" Name : ".$name."\n Weight : ".$weight."\n Measurement : ".$measurement."\n Gravity : ".$gravity."\n Refractive Index : ".$ri."\n Cut : ".$cut."\n Clarity : ".$clarity."\n Remarks : ".$remarks;
		
		#QRcode::png( $total_value, "uploads/".$random_id.".png", "L", 4, 4);
		#$src = imagecreatefrompng("upload/".$random_id.".png");
		$yourname		= "Chall Santu ";
$date			= "09 June 6891";
$pos		 	= "2nd";

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
		 exit;
    }		
}

    ob_end_flush();
	
	if(isset($_GET['msg']))
	{
	?>
    <div style="color:red;padding-bottom:10px;" class="form-message" align="center"><b>Gen Certificate Process completd successfully.</b></div>
    <?php	
	}
?>        
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<p>Copyright © 2015 Santu Chall. All Rights Reserved.</p>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.kubergemological.co.in" target="_blank">Gem Testing Lab</a> created with kubergemological.co.in.</span>
    </p>
  </div>
</footer>

</div>


</body></html>