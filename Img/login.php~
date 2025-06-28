<?php
$name=$_POST['uname'];
$pass=$_POST['pass'];
mysql_connect('localhost','root','');
mysql_select_db('airline');
$result=mysql_query("SELECT user,pass,mob_no FROM sign_up WHERE user='$name'and pass='$pass'");
if (!$result) 
{
    echo "invalid user Id or password". mysql_error();
    exit;
}
echo"logIn successful....";

/*$row=mysql_fetch_row($result);*/
?>
<html>
<body>

<a href="reservation.html"> book your Bus ticket.....</a>
&nbsp;&nbsp;or
&nbsp;&nbsp;
<a href="home.html"> home</a>
</body>
</html>
