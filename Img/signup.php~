<?php

$r= $_POST['user'];
$n= $_POST['pass'];
$g= $_POST['pass2'];
$m= $_POST['mob_no'];
$e= $_POST['email'];
mysql_connect('localhost','root','');
mysql_select_db('bus');


if(mysql_query("insert into sign_up values('$r','$n','$g','$m','$e')") or die(mysql_error()))
{
	mysql_query("insert into login values('$r','$n')");
	echo ("Your Account Is Created....");
}
else
   {
	   echo ("not submitted");
   }	
	?>
<html>
<body>
Please...Login...!
<a href="login.html">Go..</a>
</body>
<html>
