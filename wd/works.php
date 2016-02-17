<?php

$host='localhost';
$usr='';
$pass='';
$db='test';
$conn=mysql_connect($host,$usr,$pass);

if(!$conn)
{
  die("Unable to connect".mysql_error());
}
	else{
 	mysql_select_db($db);
 	
// varriable declaretion
 	$date=$_POST['date'];
	$sem=$_POST['sem'];
	
 	$sec=$_POST['sec'];
	$subj=$_POST['subj'];
 	$tc=$_POST['tc'];
 	$attn=$_POST['attn'];
 	$rem=$_POST['rem'];
	
 	
	session_start();
        $pid=$_SESSION['username'];
   


$q="insert into $pid values('$pid','$date','$sem','$sec','$subj','$tc','$attn','$rem')";
$qr="insert into alldata values('$pid','$date','$sem','$sec','$subj','$tc','$attn','$rem')";

$var=mysql_query($q);
$var1=mysql_query($qr);

if($var==1 && $var1==1)
	{
		header("Location:worksuccess.php");
	}
else
{
	echo "reg fail";
}
}

?>
