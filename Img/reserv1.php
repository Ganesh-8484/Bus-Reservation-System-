<?php

$r= $_POST['from'];
$n= $_POST['to'];
$g= $_POST['departing'];
$m= $_POST['returning'];
$e= $_POST['seats'];
$c= $_POST['class'];
mysql_connect('localhost','root','');
mysql_select_db('bus');
setcookie('from',$r);

setcookie('to',$n);
setcookie('dep',$g);
setcookie('ret',$m);
setcookie('seats',$e);
setcookie('class',$c);

if(mysql_query("insert into reserv values('$r','$n','$g','$m','$e','$c')") or die(mysql_error()))
{
	echo ("enter info....");
}
else
   {
	   echo ("n");
   }	
?>


<html>
<title>Reseration page2</title>
<head>
<script type="text/javascript">

function validation()

	{

	
	
	var name=document.forms["myform"]["name"].value;
	
	var age=document.forms["myform"]["age"].value;
	var dob=document.forms["myform"]["date"].value;
	var mobno=document.forms["myform"]["mob_no"].value;
	var address=document.forms["myform"]["address"].value;	

	if(name==NULL || age==NULL || dob==NULL || mobno==NULL || address==NULL)
	{	
		alert("please Fill all Fields..");
		return false;
	}	
	else
		
	{			
		return true;
	
	}
}

</script>
</head>
<style>

#head{
	color : red;
	font-size :36px;
	text-align : center;
}
#main
{
	
	background : #FEE07E;
	height : 100%;
}
th, td {
    padding: 15px;
    text-align: left;
}
</style> 

<body>
<form name="myform" action="info.php" method="post">
<div id="main">
<div id="head">INFORMATION</div>
<center><table >
<tr>
   <td>Enter Your Full Name : <input type="text" name="name" required=""></td>
</tr><tr>
   <td>Age : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="age" required=""></td>
</tr>
<tr>
   <td>DOB :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="date" required="">
	
</td>
</tr><tr>   <td>Mobile no. : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mob_no" required=""></td>
</tr>
<tr ><td>Gender : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
	<input type="radio" name="gender">Male
    
    
	<input type="radio" name="gender">Female
    
    
	<input type="radio" name="gender">Other
    </td>
	
</tr>
<tr>
	<td>Address : 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" required="">
	</td>
</tr>


</table>

	<input type="submit" value=next name="Next">
	<input type=reset name=reset>

</form>
</center></body></div>
</html>
