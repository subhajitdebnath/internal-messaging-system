<?php
session_start();
include "main.php";
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
$qr1=mysql_query("select * from reg where user='$user' and pass='$pass'");
if($qr1)
{
	$row=mysql_num_rows($qr1);
	if($row==1)
	{
		$fetch=mysql_fetch_array($qr1);
		$_SESSION['id']=$fetch['id'];
		echo "<script>alert('Successfully Logged In.')</script>";
		echo "<script>window.location.href='pro.php'</script>";
	
	}
	else
	{
		echo "<script>alert(' Please re-enter name and password correctly..')</script>";
		echo "<script>window.location.href='index.php'</script>";
	
	}
}
else
{
		echo "<script>alert('Not Logged In.')</script>";	
		echo "<script>window.location.href='index.php'</script>";
}
?>


