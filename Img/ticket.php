<html>
<title>Ticket</title>
<center>
<body bgcolor=" #1684bb">

<script>
function myFunction() {
    window.print();
}

</script>
<?php
 mysql_connect('localhost','root','');
 mysql_select_db('airline');

$sql="SELECT name,address,mob_no FROM info where name='$name1'";
$records=mysql_query($sql);
$s=$seats*2500;

$name=$_COOKIE['name'];

$mob_no=$_COOKIE['mob_no'];
$dep=$_COOKIE['dep'];
$ret=$_COOKIE['ret'];
$seats=$_COOKIE['seats'];
$to=$_COOKIE['to'];
$from=$_COOKIE['from'];
$class=$_COOKIE['class'];



  while($pname=mysql_fetch_assoc($records))
  {
	echo"<table border='5' width='700' height='200'>";
                   echo"<tr><td>";
	echo"<font size='5'>";
                   echo"<h2>Bus Ticket</h2>Happy Journey...<br>";
	   echo "<b> Name:$name<br>";
	   echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
	   echo "<b> Mobile No.: </b>$mob_no<br>";
                      echo " <b>Deparating : </b>$dep";
echo " &nbsp;&nbsp;&nbsp;&nbsp;";
	   echo "<b> Returning: </b>$ret<br>";
	   
	echo " <b>From  : </b>$from";
	echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
	 echo "<b> To  : </b>$to<br>";
	   echo " <b>Seats  : </b>$seats<br>";
	   echo " <b>Class : </b>$class<br>";
	   
	  echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  	  echo"<b>Total Fair  : </b>$s<br>";  
       	   echo"</font></td></tr>";

}
echo "</table>";

?>
<br>
<button  onclick="myFunction()">Print this Ticket</button>
</center>
</body>
</html>
