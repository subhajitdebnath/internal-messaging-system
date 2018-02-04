<?php
session_start();
include "main.php";
$id=$_SESSION['id'];
//$e=$_REQUEST['m'];
$id1=mysql_query("select * from reg where id='$id'");
$id2=mysql_fetch_array($id1);
$id3=$id2['user'];
//echo $id1;
//exit;
$a=$_REQUEST['to'];
//echo $a;
$p=mysql_query("select * from reg where email='$a'");
//$n1=mysql_fetch_array($p);
//$x=$n1['user'];
if($p)
{
$t=mysql_num_rows($p);
}
if($t==1)
{
$n=mysql_fetch_array($p);
$g=$n['user'];
$b=$_REQUEST['subject'];
//echo $b;
$c=$_REQUEST['message'];
//echo $c;
//$d=$_REQUEST['fromuser'];
//echo $d;
//$d = DATE('YmdHis');
$create = "INSERT INTO mail (userto,userfrom,subject,message,status,status1,status2) VALUES('$g','$id3','$b','$c','unread','','')"; 
$create2=mysql_query($create) or die("A letter could not be sent to $a!");
echo "<script>alert('Your message has been sent successfully')</script>";

if($create2)
{
echo "<script>window.location.href='pro.php'</script>";
}
}

else
{
echo "<script>alert('Invalid Email-Id')</script>";
echo "<script>window.location.href='mail.php'</script>";
}
?>