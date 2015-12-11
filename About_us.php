<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Kuber Gem Stone Testing Lab | Bappa Ghosh</title>
		<meta name="description" content="Gem Stone Testing Laboratories">
		<meta name="Place" content="Ranaghat, Nadia">
		<meta name="author" content="Santu Chall" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/font-face.css">
		<link rel="stylesheet" href="css/color-schemes/dark/hot-pink.css">
		<link rel="stylesheet" href="css/typography.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/main.css">
		<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script>
			document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';
		</script><!-- Responsive images -->
	</head>
	<body>
	<div id="tooplate_wrapper">
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<nav>
			<div style="height:100px; background-image: url(img/tooplate_header.jpg);">
			
			
		</div>
			
		</nav>
	 <div id="tooplate_menu">
        <ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="About_us.php">About Us</a></li>
            <li><a href="gallery-hex.html">Gallery</a></li>
            
        </ul>    	
    </div>
		
		
		


<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "bappaghosh95@gmail.com";
 
    $email_subject = "Kuber WebSites ";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
 
<?php
 
}
 
?>



<form name="contactform" method="post" action="About_us.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
 <input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey" value="Submit">
 
 </td>
 
</tr>
 
</table>
 
</form>

</div>
<div><font face="verdana" color="green"></div> 
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden; align:center; height:500px;width:800px;">
<div id="gmap_canvas" style="height:500px;width:800px;"></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important; }</style>
<a class="google-map-code" href="http://www.kubergemologicallab.co.in" id="get-map-data">Kuber Gemological Lab</a>
</div>
<script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(23.173923739876773,88.56623959134959),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.173923739876773, 88.56623959134959)});infowindow = new google.maps.InfoWindow({content:"<b>Kuber Gemological Lab</b><br/>Swami Vivekananda Sarani(Dispensary lane)<br/>741201 Ranaghat" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			
			
<footer class="site-footer site-footer-font">
			<div class="sparator"></div>
			<div class="contact">
				<a href="mailto:bappaghosh95@gmail.com"><i class="icon-envelope-alt"></i> bappaghosh95@gmail.com</a> &middot;
				<a href="tel:+919732565168"><i class="icon-phone"></i>+919732565168</a> &middot;
				
			</div>
			<div class="copyright">Copyright &#64; 2015 Kuber Gemological Lab. Made by <a href="mailto:santuchal@gmail.com"> Santu Chall</a> </div>
		</footer>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.8.0.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script> -->
	</body>
</html>
