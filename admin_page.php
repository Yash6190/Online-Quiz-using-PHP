<?php
session_start();
if(isset($_SESSION['farid']))

echo " ";
else

{header("location:protlog.php"); 

}
 ?>
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
<div id="main">
<div id="admin_logo">
<center><h1 style="color:#0000FF; font-size:16px">ADMIN PAGE</h1></center>
</div>
<div id="sign_out">
<a href="signout.php"><center>Sign out</center></a>
</div>
<div id="participants">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("quiz",$con);
$quer=mysql_query("SELECT * FROM record");
while($row=mysql_fetch_array($quer)){
echo "NAME: ".$row['name']."<br />";
echo "EMAIL: ".$row['email']."<br />";
echo "COURSE ON: ".$row['course']."<br />";
echo "SCORE: ".$row['score']."<br />";
echo "EXAM DATE: ".$row['date']."<br />"."<br />";
}
?>
</div>
</div>
<div id="footer">
<strong><center>Designed and Developed with all copyright reserved to Awsaf Rahman.</center></strong>
</div>
</div>

</body>
</html>
