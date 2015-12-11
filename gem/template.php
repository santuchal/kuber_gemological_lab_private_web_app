<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
     <title>Bappa Ghosh:Create,Read,Update & Delete Gem Test Sheet</title>
	 <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
  
    <link rel="stylesheet" href="css/style.css" media="screen">
   
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
    <a href="http://www.kubergemologicallab.co.in" target="_blank">More Gems Test On <img src="images/logo.png" height="100" style="position: absolute; top: -34px; right: -106px;" title="kubergemological.co.in"></a>
</h1>
<h2 class="art-slogan" data-left="87.05%"><a href="http://www.kubergemologicallab.co.in">Kuber Gemological Lab</a></h2>


            </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu"><li><a href="index.php" class="active">Home</a></li><li><a href="template.php" class="active">Template</a></li></ul> 
        </div>
    </nav>

                    
</header>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <h2 class="art-postheader">Create,Read,Update & Delete Gem Certificate</h2>
                                                

<br></br>

<p></p>
<?php
ob_start();
 include('include/connect.php'); 
 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
	$vare = $_POST['action'];
	echo $vare;
 }
 ob_end_flush();
 ?>
 <form method="POST" action="template.php">
 <?php
ob_start(); 

$qry = "SELECT name FROM tbl_gem"; 
 $rs = mysql_query($qry) or die(mysql_error());
 
echo "<select id=combo_selected>";
while($row = mysql_fetch_array($rs)){
echo "<option value=".$row['name'].">".$row['name']."</option>";
}
mysql_free_result($rs);
echo "</select>";
ob_end_flush();
 ?>
 <input type="submit" name="Go" class="submit" value="Apply action">
 </form>
 						</div>
					</div>
				</div>
				<form  method="post" name="login" id="login" enctype="multipart/form-data">
 <table class="table" width="50%">
  <tr>
    <td width="10%">Name</td>
    <td><input name="name" type="text" placeholder="Enter Name" required value="<?php echo @$row['name'];?>" ></td>
  </tr>
  <tr>
    <td width="10%">Image</td>
    <td><input name="file" type="file" ></td>
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
  </tr>
  <tr>
    <td width="10%">Refractive Index</td>
    <td><input name="ri" type="text" placeholder="Enter Refractive Index" required value="<?php echo @$row['ri'];?>" ></td>
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
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<p>Copyright © 2015 Santu Chall. All Rights Reserved.</p>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.kubergemologicallab.co.in" target="_blank">Gem Testing Lab</a> created with kubergemological.co.in.</span>
    </p>
  </div>
</footer>

</div>


</body></html>

