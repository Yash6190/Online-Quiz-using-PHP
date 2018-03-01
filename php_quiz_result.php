<?php 
session_start();
$_SESSION['date']=date("d-m-y");
$_SESSION['time']=date("h:i:s a");
?>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("quiz",$con);
$quer=mysql_query("SELECT ques_no, ans FROM php_result");
while($row=mysql_fetch_array($quer)){
    $db_data[$row['ques_no']]=$row['ans'];
    
}

$scor=5;
$counter=0;
if(isset($_POST['php_submit'])){
    
	for($i=1;$i<=5;$i++){
    if(isset($_POST["q$i"])and $_POST["q$i"]==$db_data[$i])
    $counter=$counter+1;
	}  
}
$scor=$counter/$scor*100;
mysql_select_db("quiz",$con);
$quer=mysql_query("SELECT * FROM info");
while($row=mysql_fetch_array($quer)){
    $name=$row['name'];
	$email=$row['email'];
	$course=$row['course'];   
}
mysql_select_db("quiz",$con);
mysql_query("INSERT INTO record(name,email,course,score,date) VALUES('$name','$email','$course','$scor','$_SESSION[date]')");
mysql_select_db("quiz",$con);
mysql_query("DELETE FROM info");

echo "<body bgcolor=\"#EBE9F4\">";
echo "<b>Your Score is $scor %</b><br />";
 echo "<b>Date:</b> ".$_SESSION['date']."<br />";
 echo "<b>Time: </b>".$_SESSION['time']."<br />";
 echo "<a href=\"index.php\">Back to home page</a>";
 
 echo "</body>";

?>

<?php 

session_destroy();

?>