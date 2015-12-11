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
			
			<?php
	if(isset($_POST['formSubmit'])) 
	{
		$varCountry = $_POST['formgem'];
		$errorMessage = "";
		
		if(empty($varCountry)) 
		{
			$errorMessage = "<li>You forgot to select a Gem</li>";
		}
		
		if($errorMessage != "") 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
		else 
		{
			// note that both methods can't be demonstrated at the same time
			// comment out the method you don't want to demonstrate

			// method 1: switch
			$redir = "US.html";
			switch($varCountry)
			{
				case "diamond": $redir = "add2.php"; break;
				case "pearl": $redir = "add2.html"; break;
				
				default: echo("Error!"); exit(); break;
			}
			echo " redirecting to: $redir ";
			
			header("Location: $redir");
			// end method 1
			
			// method 2: dynamic redirect
			//header("Location: " . $varCountry . ".html");
			// end method 2

			exit();
		}
	}
?>

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

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='formCountry'>Select your predefined Gem</label><br>
	<select name="formgem">
		
		<option value="diamond">Diamond</option>
		<option value="pearl">Pearl</option>
		
	</select> 
	<input type="submit" name="formSubmit" value="Submit" />
</form>


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

