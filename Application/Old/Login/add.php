<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Bappa Ghosh:Create,Read,Upcreate_date & Delete Gem Test Sheet</title>
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
	
	<script type="text/javascript" language="JavaScript">
   function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}

function hideDiv() {
   document.getElementById('welcomeDiv').style.display = "none";
}

function popitup(url) {
	newwindow=window.open(url,'name','height=1000,width=500');
	if (window.focus) {newwindow.focus()}
	return false;
}

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
	/*$qry = "SELECT * FROM tbl_gem where id=".$_GET['id'];
    $result = mysql_query($qry);
	$row = mysql_fetch_array($result);
	*/
	
	$qry = "SELECT * FROM tbl_gem where id=".$_GET['id'];
    $result = mysql_query($qry);
	$row = mysql_fetch_array($result);
	
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$cno = $_POST["id"];
        $name = $_POST["name"];
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
		$create_date = $_POST["create_date"];
		$weight =$_POST["weight"];
		$measurement =$_POST["measurement"];
		
		$gravity =$_POST["gravity"];
		
		$ri =$_POST["ri"];
		
		$color = $_POST["color"];
		
		$cut =$_POST["cut"];
		
		$clarity =$_POST["clarity"];
		
		$remarks =$_POST["remarks"];
 	 	 $sqlAdd ="update  tbl_gem set name='".$name."', image='".$image_name."', create_date='".$create_date."', weight='".$weight."', measurement='".$measurement."', gravity='".$gravity."', ri='".$ri."', color='".$color."', cut='".$cut."', clarity='".$clarity."', remarks='".$remarks."' where id=".$_GET['id'];
		 
	  	 mysql_query($sqlAdd);
         header("Location:add.php?id=".@$_GET['id']."&msg=success");
		 exit;
    }		
}
else
{
	$random_id = rand(1111111111,9999999999);
    
	if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $cno=$_POST["cno"];
		
		if($cno != "" )
		{
			$random_id = $cno ;
		}
		$name = $_POST["name"];
		
		
		
        IF($_FILES['file']['name']!='')
        {
            $tmp_name = $_FILES["file"]["tmp_name"];
            $namefile = $_FILES["file"]["name"];
			$ext = end(explode(".", $namefile));
			$image_name=$random_id.".".$ext;

            $fileUpload = move_uploaded_file($tmp_name,"uploads/".$image_name);
        }
		
		$create_date =$_POST["create_date"];
		
		$weight =$_POST["weight"];
		
		$measurement =$_POST["measurement"];
		
		$gravity =$_POST["gravity"];
		
		$ri =$_POST["ri"];
		
		$color = $_POST["color"];
		
		$cut =$_POST["cut"];
		
		$clarity =$_POST["clarity"];
		
		$remarks =$_POST["remarks"];
		
		include "phpqrcode/qrlib.php";
		
		$total_value =" Name : ".$name."\n Weight : ".$weight."\n Measurement : ".$measurement."\n Gravity : ".$gravity."\n Refractive Index : ".$ri."\n Cut : ".$cut."\n Clarity : ".$clarity."\n Remarks : ".$remarks;
		
		QRcode::png( $total_value, "uploads/".$random_id.".png", "L", 4, 4);
		
        $sqlAdd = mysql_query("insert into tbl_gem(id,name,image,create_date,weight,measurement,gravity,ri,color,cut,clarity,remarks) VALUES('$random_id','$name','$image_name','$create_date','$weight','$measurement','$gravity','$ri','$color','$cut','$clarity','$remarks')");
        header("Location:index.php?msg=success");
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

<form  method="post" name="login" id="login" enctype="multipart/form-data">
 <table class="table" width="50%">
 <tr>
    <td width="10%">Certificate Number:</td>
    <td><input name="cno" type="text" placeholder="Enter Certificate Number"  value="<?php echo @$row['cno'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Name</td>
    <td><input name="name" type="text" placeholder="Enter Name" required value="<?php echo @$row['name'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Image</td>
    <td><input name="file" type="file" ></td>
  </tr>
   <tr>
    <td width="10%">Date</td>
    <td><input name="create_date" type="text" placeholder="Enter Date" required value="<?php echo @$row['create_date'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Weight</td>
    <td><input name="weight" type="number" step= "0.0001" placeholder="Enter Weight" required value="<?php echo @$row['weight'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Measurement</td>
    <td><input name="measurement" type="text" placeholder="Enter Measurement" required value="<?php echo @$row['measurement'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Specific Gravity</td>
    <td><input name="gravity" type="text" placeholder="Enter Specific Gravity" required value="<?php echo @$row['gravity'];?>" ></td>
	<!--<td><input type="button" name="answer" value="Show Value" onclick="showDiv()" /</td>
	<td><input type="button" name="answer" value="Hide Value" onclick="hideDiv()" />
	</td><td><div id="welcomeDiv"  style="display:none;" class="answer_list" > WELCOME</div></td> -->
	<td><a href="Specific_gravity.html" onclick="return popitup('Specific_gravity.html')">Help</a></td>
	
  </tr>
  <tr>
    <td width="10%">Refractive Index</td>
    <td><input name="ri" type="text" placeholder="Enter Refractive Index" required value="<?php echo @$row['ri'];?>" ></td>
	<td><a href="Refractive_index.html" onclick="return popitup('Refractive_index.html')">Help</a></td>
  </tr>
  <tr>
    <td width="10%">Color</td>
    <td><input name="color" type="text" placeholder="Enter Color" required value="<?php echo @$row['color'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Cut</td>
    <td><input name="cut" type="text" placeholder="Enter Cut" required value="<?php echo @$row['cut'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Clarity</td>
    <td><input name="clarity" type="text" placeholder="Enter Clarity" required value="<?php echo @$row['clarity'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Remarks / Result</td>
    <td><input name="remarks" type="text" placeholder="Enter Remarks" value="<?php echo @$row['remarks'];?>" ></td>
  </tr>
   <?php
   if(isset($row['image'])) 
   {
   ?>
   <tr>
        <td>&nbsp;</td>
        <td><img src="uploads/<?php echo $row['image'];?> " height="50" width="50"></td>
   </tr>
	<?php
	}
	?>
  <tr>
    <td>&nbsp;</td>
	<td>
    <input name="submit" value="Submit" type="submit" class="submit">
    <input name="submit" value="Cancel" type="button" class="submit" onClick="window.location='index.php'">
    </td>
  </tr>
</table>

</form>
        
        
        
        
        
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