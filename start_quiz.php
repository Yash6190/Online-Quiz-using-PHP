<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css"  /><!--this tag is used for linking external css file to this start_quiz.php file-->

<script type="text/javascript" src="countDown.js"></script><!--this tag is used for linking external javascript file which is the countdown clock-->
<title>start quiz</title>
</head>

<body>
<div id="wrepp">
<div id="header">
</div>
<div id="marque">
<marquee><!--marquee is a html keyword tag for moving text -->
<p style="color:#FF0000; font-size:12px; font-weight:700">
Enhance your web development skill by participating web language quizes here.<!--write your desired note here-->
</p>
</marquee>
</div>
<div id="main">
<div id="start_quiz">
<title>quiz online</title>
<?php
$quiz=$_POST['choice'];
$name=$_POST['ln2'];
$email=$_POST['emn2'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("quiz", $con);

mysql_query("INSERT INTO info (name, email, course)
VALUES
('$name','$email','$quiz')");
$op1="html";
$op2="css";
$op3="php";
$op4="javascript";
switch($quiz)
{
case $op1:
echo "<h1 style=\"color:olive\">QUIZ ON:HTML</h1>"."<br />";
include("qhtml.php");
break;
case $op2:
echo "<h1 style=\"color:olive\">QUIZ ON:CSS</h1>";
include("qcss.php");
break;
case $op3:
echo "<h1 style=\"color:olive\">QUIZ ON:PHP</h1>";
include("qphp.php");
break;
case $op4:
echo "<h1 style=\"color:olive\">QUIZ ON:JAVASCRIPT</h1>";
include("qjava.php");
break;
}
?>
</div>
<div id="countdown_timer">
<form name="cd">
Remaining Time:<input id="txt" readonly="true" type="text" value="15:00" border="0" name="disp">
</form>
</div>

</div>
<div id="footer">
<strong><center>Designed and Developed with all copyright reserved to Awsaf Rahman.</center></strong>
</div>
</div>

</body>
</html>
