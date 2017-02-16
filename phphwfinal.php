<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>helloooooooooo</h2>

<!--
http://devco.re/blog/2014/06/19/client-ip-detection/
-->
<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
   $myip = $_SERVER['HTTP_CLIENT_IP'];
}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
   $myip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
   $myip= $_SERVER['REMOTE_ADDR'];
}
echo $myip;
?>

</body>
</html>