<title>quiz online</title>
<?php
$quiz=$_POST['choice'];
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
echo "<h1 style=\"color:olive\">QUIZ ON:CSS</h1>"."<br />";
include("qcss.php");
break;
case $op3:
echo "<h1 style=\"color:olive\">QUIZ ON:PHP</h1>"."<br />";
include("qphp.php");
break;
case $op4:
echo "<h1 style=\"color:olive\">QUIZ ON:JAVASCRIPT</h1>"."<br />";
include("qjava.php");
break;
default:
echo "please choose your course";
}
?>