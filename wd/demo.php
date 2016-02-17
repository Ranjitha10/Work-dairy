<html>
<style type="css/text">
table,th,td{
              border:1px solid black;
              
            }
</style>

<body background="images/bg1.jpg">
<?php
 session_start();
 echo "Welcome:".$_SESSION['admin'];
?>
<a href="admin_logout.php">Logout</a>
<a href="admin_pannel.php">Home</a>
<form>


	<center><table border="1" cellspace="2">
<th>ID</th><th>Name</th><th>USN</th><th>Vehicle No</th><th>Vehicle Type</th><th>Registration Date</th>
	<th>Phone No</th><th>Challan No</th>

 <?php
include("con.php");
if(!$conn)
{
   die("unable to connect");
 }
else{
    $sql="select * from profile";
    mysql_select_db($db);
    $result=mysql_query($sql,$conn);
     //$row=mysql_fetch_array($result);
      //$numrow=mysql_num_rows($result);
	while($row=mysql_fetch_array($result))
         {
            echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['usn']."</td><td>".$row['vnum']."</td><td>".$row['vtype']."</td><td>".$row['regdate']."</td><td>".$row['ph']."</td><td>".$row['cnum']."</td></tr>";
          //$numrow=$numrow-1;
          }
     }

?>
</table></center>
	<center><button onclick="window.print()" >Print</button></center>
		
</form>
</body>
</html>
