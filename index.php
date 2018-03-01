<?php 
session_start();
?>
<!--Please read the comments if you need-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="style.css"  /><!--this tag is used for linking external css file to this index.php file-->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="javascript.js"> </script> <!--this is used for adding javascript external file to index.php--> 

<style type="text/css"> 
div.panel,p.flip
{
margin:0px;
padding:5px;
text-align:justify;
background:#EBE9F4;
border:solid 1px #c3c3c3;
}
div.panel
{
height:200px;
display:none;
}
.flip
{
color:#003399;
font:"Trajan Pro";
font-size:14px;
font-weight:bold;
}
#lnbold
{
color:#FF0000;
padding-left:5px;
}
#emnbold
{
color:#FF0000;
padding-left:5px;
}
</style>
<title>online quiz</title>


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
<div id="quiz_part">
<div class="contents">
<div class="panel">
<form name="form" method="post" action="start_quiz.php" enctype="multipart/form-data" id="send">
<input type="radio" name="choice" value="html" />HTML
<input type="radio" name="choice" value="css" />CSS
<input type="radio" name="choice" value="php" />PHP
<input type="radio" name="choice" value="javascript" />JavaScript<br /><br />
Name:<input type="text" name="ln2" id="ln" size="40" /><span id="lnbold"></span><br /><br />
Email:<input type="text" name="emn2" id="emn" size="40" onfocus="check('1')"/><span id="emnbold"></span><br /><br />
<input type="button" value="submit" onclick="check('2');emailchecker();allcheck();" style="background-color:#FF0033; border:2px groove #663333; color:#FFFFFF" /><br  /><br /><p style="color:#339933">Chose your course,give your name and email id and start quiz.</p>
</form>
</div>
 
<p class="flip">Show Quiz Content</p>


</div>
</div>
<div class="admin">
<h1 style="color:#00CC00; padding-top:10px">ADMIN LOGIN</h1>
<br /> <br />
<form id="form" name="form" method="post" action="checklog.php">
  <table width="280" height="100">
    <tr>
      <td><label>Email</label></td>
      <td><input type="text" name="email" id="name" /></td>
    </tr>
    <tr>
      <td><label>Password</label></td>
      <td><input type="text" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" id="button" value="sign in" style="color:#006699; background-color:#00CCCC" />
      </label></td>
    </tr>
  </table>
</form>


</div>
</div>
<div id="footer">
<strong><center>Designed and Developed with all copyright reserved to Awsaf Rahman.</center></strong>
</div>
</div>

</body>
</html>
