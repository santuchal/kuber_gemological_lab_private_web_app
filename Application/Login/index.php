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
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <br>
        
        
<a href="add.php" class="submit">Add New Gem Record</a>
<?php
 include('include/connect.php'); 
 $ids="";
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 if($_POST['action'] == "delete")
	 { 
		 $ids = @implode(", ", $_POST['ids']);
		 
	     $qry = "SELECT * FROM  tbl_gem where id IN(".$ids.")";
		 $result = mysql_query($qry);
		 while($row = mysql_fetch_array($result))
		 {
			 $file='uploads/'.$row['image'];
			 @unlink($file);
		 }
		
	    $sqlAdd ="delete from tbl_gem where id IN(".$ids.")";
		mysql_query($sqlAdd); 
		header("Location:index.php?msg=success");
		exit;
	 }
	 else if($_POST['action'] == "upload")
	 { 
		 include('include/connect1.php'); 
		$random_id = rand(1111111111,9999999999);
		$name = $_POST["name"];
		/*
        IF($_FILES['file']['name']!='')
        {
            $tmp_name = $_FILES["file"]["tmp_name"];
            $namefile = $_FILES["file"]["name"];
			$ext = end(explode(".", $namefile));
			$image_name=$random_id.".".$ext;

            $fileUpload = move_uploaded_file($tmp_name,"uploads/".$image_name);
        }*/
		
		$weight =$_POST["weight"];
		
		$measurement =$_POST["measurement"];
		
		$gravity =$_POST["gravity"];
		
		$ri =$_POST["ri"];
		
		
		$cut =$_POST["cut"];
		
		$clarity =$_POST["clarity"];
		
		$remarks =$_POST["remarks"];
		
		include "phpqrcode/qrlib.php";
		
		$total_value =" Name : ".$name."\n Weight : ".$weight."\n Measurement : ".$measurement."\n Gravity : ".$gravity."\n Refractive Index : ".$ri."\n Cut : ".$cut."\n Clarity : ".$clarity."\n Remarks : ".$remarks;
		
		QRcode::png( $total_value, "uploads/".$random_id.".png", "L", 4, 4);
		
        $sqlAdd = mysql_query("insert into tbl_gem(id,name,weight,measurement,gravity,ri,cut,clarity,remarks) VALUES('$random_id','$name','$weight','$measurement','$gravity','$ri','$cut','$clarity','$remarks')");
        header("Location:index.php?msg=success");
		exit;
	 }
 }
  	if(isset($_GET['msg']))
	{
	?>
	<div style="color:red;padding-bottom:10px;" class="form-message" align="center"><b>Task completd successfully.</b></div>
	<?php	
	}
?>
<form  method="post" name="action_form" action="index.php">
<table class="table" width="100%">
            <tbody>
            <tr class="top nodrop nodrag">
              <th>&nbsp;</th>
              <th class="checkbox" style="width: 12px;"></th>
			  <th>ID</th>
              <th>Name</th>
              <th>Image</th>
			  <th>Date</th>
			  <th>Weight</th>
              <th>Measurement</th>
			  <th>Gravity</th>
              <th>Refractive Index</th>
			  <th>Color</th>
			  <th>Cut</th>
              <th>Clarity</th>
			  <th>Remarks</th>
              <th class="action">Action</th>
			  <th class="print">Print</th>
            </tr>
            <?php
			 
			$allRecords = mysql_query('select * from tbl_gem ORDER BY create_date DESC ');
			if(is_resource($allRecords))
			{
				while($row = mysql_fetch_assoc($allRecords))
				{
					?>
					<tr>
                        <td>&nbsp;</td>
                        <td class="checkbox"><input type="checkbox"  value="<?php echo $row['id'];?>" name="ids[]" class="case"></td>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><img src="uploads/<?php echo $row['image']; ?>" height="30" width="30" /></td>  
						<td><?php echo $row['create_date']; ?></td>	
						<td><?php echo $row['weight']; ?></td>		
						<td><?php echo $row['measurement']; ?></td>						
						<td><?php echo $row['gravity']; ?></td>						
						<td><?php echo $row['ri']; ?></td>						
						<td><?php echo $row['color']; ?></td>
						<td><?php echo $row['cut']; ?></td>						
						<td><?php echo $row['clarity']; ?></td>
						<td><?php echo $row['remarks']; ?></td>
						<?php if ($row['gravity']== null && $row['ri'] == null ){ ?>
                        <td class="action"><a href="add2.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        <?php } else { ?>
                        <td class="action"><a href="add.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        <?php } ?>						
						<td class="print"><a href="certificate.php?id=<?php echo $row['id']; ?>">Print</a></td>
					</tr>
					<?php
				}
			}
			?>
            <tr>
              <td>&nbsp;</td>
              <td class="checkbox"  colspan="4">
              <select name="action" class="select" style="width:143px;">
              <option>Choose an action</option>
			  <option value="delete">Delete</option>
			  <option value="upload">Upload</option>
              </select>
              
              <input type="submit" name="Go" class="submit" value="Apply action">
              </td>
            </tr>
          </tbody>
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
        <span id="art-footnote-links"><a href="http://www.kubergemologicallab.co.in" target="_blank">Gem Testing Lab</a> created with kubergemological.co.in.</span>
    </p>
  </div>
</footer>

</div>


</body></html>