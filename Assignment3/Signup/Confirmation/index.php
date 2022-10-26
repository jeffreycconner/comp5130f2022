<!DOCTYPE html>
<html>
<head>
  <title>Jeffrey Conner</title>
<link rel="icon" href="favicon.png">  
<style>
body {
	background-image: url('UML.png');
	background-repeat: ne-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
}
</style>
</head>
<body>
<center>
  <a1>
	Welcome.<br>
	<input type=button onClick="parent.location='PermissionNumber/index.html'"value='Confirm'>
</a1>
</center>
</body>
</html>





<?php

$fp = fopen('/usr/cs/grad/master/jconner/public_html/cs5130f2022/Homework3/Signup/data.csv', 'a');
              
if(isset($_POST['name']))
{
	$nameData=$_POST['name'];
	
	fwrite($fp, $nameData);

	echo "Name: $nameData";

	echo "<br>";
}

if(isset($_POST['name']))
{
	fwrite($fp, ',');
}

if(isset($_POST['email']))
{
	$emailData=$_POST['email'];

	fwrite($fp, $emailData);

	echo "EMail: $emailData";

	echo "<br>";
}

if(isset($_POST['name']))
{
        fwrite($fp, ',');
}

if(isset($_POST['hometown']))
{
	$hometownData=$_POST['hometown'];

	fwrite($fp, $hometownData);

	echo "Hometown: $hometownData";
}
fclose($fp);

?>
