<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("header.html");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style3.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#date" ).datepicker();
  });
  </script>





<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" >
function validate(date,sem,sec,sub,tc,attn,rem) {


if((date.value.length == 0) || (tc.value.length == 0) || (attn.value.length == 0) || (rem.value.length == 0) || (sub.value == "Subject"))
{
alert("Field Cannot be blank");
return false
//window.location="index.html";
}
//IsNumeric 


else if( attn.value.length >60 )
{
alert("attendence cannot be more than 60!");
return false;
}

else if(sem.value == "None")
{
	alert("choose semester");
	return false;
}
else if(sec.value == "None")
{
	alert("choose section");
	return false;
}
else {
//document.main.submit();
return true;	
}
}

</script>
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body>

<div class="ino">
Welcome <?php session_start(); echo $_SESSION['fname'];?>
</div>







<div class="main">
	      
		<form action="works.php" method="POST" name="main" enctype="multipart/form-data">
		   <h4>WORK DIARY ENTRY FORM</h4>
		   <div class="lable-2">
			<input type="text" class="text" value="Date " name="date" id="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date ';}"></br>

		        <select class="sel" name="sem" id="sem">
			<option value="None" selected="selected">--Choose Semester--</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			</select>
		        <select class="sel2" name="sec" id="sec">
			<option value="None" selected="selected">--Choose Section--</option>
			<option>A</option>
			<option>B</option>
			</select>

			<input type="text" class="text" value="Subject " name="subj" id="subj" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject ';}">

			<!--<input type="text-area"  value="Topics Covered " name="tc" id="tc" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Topics Covered ';}">-->
			<textarea class="sel1" name="tc" id="tc" style="resize:none" value="Topics Covered " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Topics Covered ';}">topics covered</textarea></br>


			<input type="text" class="text" value="Attendence " name="attn" id="attn" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Attendence ';}">
			<!--<input type="textarea" value="Remarks " name="rem" id="rem" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Remarks ';}">-->

			<textarea class="sel1" name="rem" id="rem" style="resize:none" value="Remarks " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Topics Covered ';}">Remarks</textarea>
			
			
	</div>	   
		   
		   <div class="submit">
			  <input type="submit" name="sub" value="SUBMIT" onclick="return validate(date,sem,sec,sub,tc,attn,rem)">
		   </div>
		   
		</form>
		<!-----//end-main---->
		</div>
		 <!-----start-copyright---->
   		
				<!-----//end-copyright---->
</body>
</html>
