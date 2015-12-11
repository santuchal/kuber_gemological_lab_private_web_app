<html>

<head>
<title>Kuber Gemological Lab Login Panel</title>
</head>

<body bgcolor="white" text="black" link="black" vlink="#666666" alink="#999999" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
<p align="center"><font face="Arial"><img src="img1.gif" border="0" width="409" height="62"><br>
<!-- Start of Login Check -->
<?php

$user = "bappa"; #This is the username you login with
$password = "Bappa123"; #This is the password you login with

if($_POST["name"]==$user) {
	if($_POST["pass"]==$password) {
		#If username and password is correct
		header("Location:Login/index.php?msg=success");
	 }else{
		#If username is correct but password isn't
		echo "The password you entered was <b>invalid!</b>";
	}
 }else{
	if($_POST["pass"]==$password) {
		#The username was wrong but the password wasn't
		echo "The username you provided was <b>invalid!</b>";
	 }else{
		#The username and password were both wrong
		echo "The username and password you provided was <b>invalid!</b>";
	}
}

?>
<!-- End of Login Check -->
</font></p>

</body>

</html>