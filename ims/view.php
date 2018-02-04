<html>
<head>
<title>
Internal Messaging System-Message
</title>
<style>
table {
		border-collapse:collapse;
		}
tr {
		background-color:pink;
	}
th {
	background-color:pink;
}
</style>
</head>

<body style='background-color:cyan' ><div style='background-color:brown' width=50%><h1 style='color:pink' align='center'>Your Message</h1>
<h3 style='color:red' align='right'><a href='logout.php'><button><h3 style='color:red' align='center'><b><i>Logout</i></b></h3></button></a></h1></div>
</body></html>
<br><br>
<?php
session_start();
include "main.php";
$id=$_SESSION['id']; 
$id1=mysql_query("select * from reg where id='$id'");
$id2=mysql_fetch_array($id1);
$id3=$id2['user'];
$mail=$_REQUEST['m'];
$result=mysql_query("select * from mail where userto='$id3' and mail_id='$mail'") or DIE ("cant do it"); 
$row=MYSQL_FETCH_ARRAY($result);
IF($row['userto']==$id3) { 
 //ELSE { 
//ECHO "<font face=verdana><b>This isn't your mail!</b>"; 
//EXIT; 

$q=mysql_query("update mail set status='read' where userto='$id3' and mail_id='$mail'"); 
$r=mysql_query("select * from mail where userto='$id3' and mail_id='$mail'");
$k=mysql_fetch_array($r);
//print_r($r);
//exit;
}
if($q)
{

ECHO "<table border = 1 bordercolor = red width = 80% align=center><tr><th><h2 style='color:brown'>subject:</h2></th><td><h3>$k[subject]</h3></td></tr><br><tr><th><h2 style='color:brown'>from</h2></th><td><h3>$k[userfrom]</h3></td></tr><br><tr><th><h2 style='color:brown'>message:</h2></th><td colspan='2'><h3>$k[message]</h3></td></tr></table>";

}
else
{
echo "<script>alert('wrong entry')</script>";
}
?>
<br><br><br>
<h2 style='color:red' align='center'><a href='inbox1.php'><button><h1 style='color:red'>Go To Inbox</h1></button></a><br></h2>
<h2 style='color:red' align='center'><a href='pro.php'><button><h1 style='color:red'>Go To Your Profile Page</h1></button></a></h2>
<br><br><br><br><br><br>