<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style6.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



<?php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

require 'config.php';
//////// End of connecting to database ////////

@$cat=$_GET['cat']; // Use this line or below line if register_global is off
//@$cat=$HTTP_GET_VARS['cat']; // Use this line or above line if register_global is off
/*
If register_global is off in your server then after reloading of the page to get the value of cat from query string we have to take special care.
To read more on register_global visit.
  http://www.plus2net.com/php_tutorial/register-globals.php
*/

?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>

<SCRIPT language=JavaScript>
<!--
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='report.php?cat=' + val ;
}
function disableselect()
{
<?Php
if(isset($cat) and strlen($cat) > 0){
echo "document.f1.subcat.disabled = false;";}
else{echo "document.f1.subcat.disabled = true;";}
?>
}
//-->

</script>
</head>

<body onload=disableselect();>
<div class="main">
<h2>WELCOME ADMIN </br></br>Generate Report</h2></div>
<?Php
///////// Getting the data from Mysql table for first list box//////////
$quer2="SELECT DISTINCT department FROM profile order by department"; 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
if(isset($cat) and strlen($cat) > 0){
$quer="SELECT DISTINCT fname,pid FROM profile where department='$cat' order by fname"; 
}else{$quer="SELECT DISTINCT fname,pid FROM profile order by fname"; } 
////////// end of query for second subcategory drop down list box ///////////////////////////

echo "<form method=post name=f1 action='dd-check.php'>";

/// Add your form processing page address to action in above line. Example  action=dd-check.php////
//////////        Starting of first drop downlist /////////
echo "<select name='cat' onchange=\"reload(this.form)\"><option value=''>--Select department--</option>";
//while($noticia2 = mysql_fetch_array($quer2)) { 
foreach ($dbo->query($quer2) as $noticia2) {
if($noticia2['department']==@$cat){echo "<option selected value='$noticia2[department]'>$noticia2[department]</option>"."<BR>";}
else{echo  "<option value='$noticia2[department]'>$noticia2[department]</option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////

//////////        Starting of second drop downlist /////////
echo "<select name='subcat'><option value=''>--Select faculty--</option>";
//while($noticia = mysql_fetch_array($quer)) { 
foreach ($dbo->query($quer) as $noticia) {
echo  "<option value='$noticia[pid]'>$noticia[fname]</option>";
}
echo "</select>";
//////////////////  This will end the second drop down list ///////////
//// Add your other form fields as needed here/////
echo "</br></br>";
echo "<input type=submit value=Submit>";


echo "</br></br></br>";
echo "</form>";
?>
<br><br>

<br><br>
 
</body>

</html>
