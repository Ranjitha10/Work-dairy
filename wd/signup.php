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
 	$pid=$_POST['pid'];
	$pass=$_POST['pass'];
	
 	$fname=$_POST['fname'];
 	$lname=$_POST['lname'];
 	$dept=$_POST['dept'];
 	$phone=$_POST['phone'];
	$email=$_POST['email'];
 	$date=date('d/m/Y');

   
$query="insert into profile values('{$pid}','{$pass}','{$fname}','{$lname}','{$dept}','{$phone}','{$email}','{$date}')";


$q="create table $pid(pid varchar(10),date varchar(10),semester varchar(10),section varchar(10),subject varchar(30),topics varchar(100),attendence varchar(10),remarks varchar(100))engine=INNODB";


$var=mysql_query($query);

$query2="insert into admin(username,password) values('{$pid}','{$pass}')";
if($var==1)
	{
		mysql_query($q);
		mysql_query($query2);
		header("Location:index.html");	
	}
else
{
	echo "reg fail";
}
}

?>
