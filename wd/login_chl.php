<?php
$host='localhost';
$usr='';
$pass='';
$db='test';
$conn=mysql_connect($host,$usr,$pass);


if(!$conn)
 {
   die("mysql connect error".mysql_error());
  }
 else{
      $usr=$_POST['usr'];
      $pss=$_POST['pass'];
      $sql="select * from admin where username='$usr' and password='$pss';";

	
      mysql_select_db($db);
      $result=mysql_query($sql,$conn);
      $row=mysql_fetch_array($result);

	$sql1="select * from profile where pid='$usr'";
        $result1=mysql_query($sql1,$conn);
      $row1=mysql_fetch_array($result1);

      if($row['username']==$usr && $row['password']==$pss)
       {
         session_start();
         $_SESSION['username']=$row['username'];
         $_SESSION['fname']=$row1['fname'];
        header("Location:work.php");
        }
	else if($usr=="admin" && $pss="admin1")
	{
		header("Location:admin.php");
	}
       else{
          	echo '<script type="text/javascript">';
 	  	echo 'alert("Invalid ID/Password");';
		echo ' window.location="login.html";';
		echo '</script>';
             
          }

     }
   
?>
