<?php
include "main.php";
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
$email=$_REQUEST["email"];
$adds=$_REQUEST["adds"];
$city=$_REQUEST["city"];
$day=$_REQUEST["dob2"];
$month=$_REQUEST["dob"];
$yr=$_REQUEST["dob1"];
$ph=$_REQUEST['phno'];
$gen=$_REQUEST['g'];

$l=$_FILES['f']['name'];
if($l=="")
{
    $path="NULL";
}
else{
$k=$_FILES['f']['tmp_name'];
$ll=time().rand(00,99).$l;
$path="img/".$ll;
move_uploaded_file($k,$path);
//print_r($l);exit;
}

$q=mysql_query("select * from reg where email='$email'");
while($r=mysql_fetch_array($q))
{
	$e=$r['email'];

}
if('$e'!=$email)
{
	$qr=mysql_query("insert into reg values('','$user','$pass','$email','$adds','$city','$ph','$gen','$day','$month','$yr','$path')");
	if($qr)
	{
		echo "<script>alert('Successfully Registered.')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
}
else
{
	echo "<script>alert('The Email Id you have entered,is already exist..')</script>";
	echo "<script>window.location.href='reg.php'</script>";	
} 
?>
