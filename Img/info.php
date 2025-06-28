<?php
$r=$_POST['name'];
$n=$_POST['age'];
$d=$_POST['date'];
$m=$_POST['mob_no'];
$g=$_POST['gender'];
$a=$_POST['address'];
$b=$_POST['bg'];

mysql_connect('localhost','root','');
mysql_select_db('bus');

setcookie("name",$r);
setcookie("address",$a);
setcookie("mob_no",$m);
if(mysql_query("insert into info values('$r','$n','$d','$m','$g','$a','$b')") or die(mysql_error()))
{
	echo ("Your Account Is Created....");

}
else
   {
	   echo ("n");
   }	
?>


<html>
<title>Reservation page</title>
<style>

#head{
	color : red;
	font-size :36px;
	text-align : center;
}

</style> 
<form action="ticket.php" method="get">
<center><div id="head">RESERVATION</head></center><br><br>
<body bgcolor="pink">
<center><table>
<tr>

<td>Payment Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
	<input type="radio" name="payment">Cash

	<input type="radio" name="payment">Paytm

    
    </td
</tr>
<tr>
	<td><center><br><input type="submit" value="Payment"></center></td>
</tr>
</table>
</form>
</center>
</body>
</html>
