<?php session_start(); ?>
<?php



$email=$_POST['email']; 
$password=$_POST['password']; 
$con=mysql_connect("localhost","root","");
mysql_select_db("quiz",$con);
$quer=mysql_query("SELECT * FROM admin");
while($row=mysql_fetch_array($quer)){
if($email==$row['email'] && $password==$row['password'])
{
$_SESSION['farid']= $row['email'] ;
//print $row['name'] . "Thanks, Redirecting";
header("location:admin_page.php");
}
else {
//echo "Wrong Username or Password";
//print "Wrong Username or Password";
header("location:protlog.php");
}
}
?>