





<html>
<style type="css/text">
table,th,td{
              border:1px solid black;
              
            }
</style>

<body bgcolor="orange" >


<form>


	<center><table border="1" cellspace="2">
<th>PID</th><th>DATE</th><th>SEMESTER</th><th>SECTION</th><th>SUBJECT</th><th>TOPICS COVERED</th><th>ATTENDENCE</th>
	<th>REMARKS</th>

 <?php

$subcat=$_POST['subcat'];


$host='localhost';
$usr='';
$pass='';
$db='test';
$conn=mysql_connect($host,$usr,$pass);

if(!$conn)
{
   die("unable to connect");
 }
else{
    $sql="select * from $subcat";
    mysql_select_db($db);
    $result=mysql_query($sql,$conn);
     
	while($row=mysql_fetch_array($result))
         {
            echo "<tr><td>".$row['pid']."</td><td><center>".$row['date']."</td><td><center>".$row['semester']."</center></td><td><center>".$row['section']."</center></td><td><center>".$row['subject']."</center></td><td><center>".$row['topics']."</center></td><td><center>".$row['attendence']."</center></td><td><center>".$row['remarks']."</center></td></tr>";
          
          }
     }

?>
</table></center>
	<center><button onclick="window.print()" >Print</button></center>
		
</form>
</body>
</html>
