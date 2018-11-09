<?php
if(isset($_POST["txtuser"]))
{
$user=$_POST["txtuser"];
$password=$_POST["txtpassword"];

$flag=0;
    
		if($user=="ishi" && $password=="123")
		{$flag=1;}

if($flag==1)
	{
	session_start();
	$_SESSION["user"]=$user;
	$_SESSION["accesstime"]=time();
	header("location:welcome.php");
	}
else
	{
	echo"<font color='red' size='5'>Invaild UserName Or Password</font>";
	}
}
?>

<html>
<head><title>Login</title>
</head>
<body>
<center>
<form name="frmlog" method="Post" action="#" id="frmlog">
<table width="45%" height="50%">
<tr>
<td>User Name </td>
</tr><br/>
<tr>
<td><input type="text" name="txtuser" id="txtuser"/></td>
</tr><br/>
<tr>
<td>Password </td>
</tr><br/>
<tr>
<td><input type="password" name="txtpassword" id="txtpassword" /></td>
</tr><br/>
<tr>
<td align="center"><input type="submit" name="btnlog" value="Login" /></td>
</tr>
</table>
</form>
</center>
