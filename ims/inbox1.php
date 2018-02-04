<html>
<head>
<title>
Internal Messaging System-Inbox
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

		
<body style='background-color:cyan' ><div style='background-color:brown' width=50%><h1 style='color:pink' align='center'><b><i>Inbox</i></b></h1><h3 style='color:red' align='right'><a href='logout.php'><button><h3 style='color:red' align='center'><b><i>Logout</i></b></h3></button></a></h1></div>
</body>
</html><br><br><br><br>
<?php
session_start();
include "main.php";
$id=$_SESSION['id'];
$id1=mysql_query("select * from reg where id='$id'");
$id2=mysql_fetch_array($id1);
$id3=$id2['user'];

$result=mysql_query("select * from mail where userto='$id3' and status1='0' order by sentdate DESC;") or DIE ("cant do it");
$no=mysql_num_rows($result);

if($no>0)
{

ECHO "<table  border = 1 bordercolor = red width = 80% align=center cellpadding=2 cellspacing=1 valign=top>";
echo "<tr><th><h2 style='color:brown'>From</h2></th><th><h2 style='color:brown'>Mail</h2></th><th><h2 style='color:brown'>Status</h2></th><th><h2 style='color:brown'>Delete Message</h2></th><th><h2 style='color:brown'>Time</h2></th></tr>"; 

WHILE ($row=mysql_fetch_array($result))
{

echo "<tr><td>$row[userfrom]</td><td><a href='view.php?m=$row[mail_id]'>$row[subject]</a></td><td>$row[status]</td><td><a href=indelete.php?i=$row[mail_id]><center>Delete</a><br></td><td>$row[sentdate]</td></tr>"; 

}
echo "</table>"; 
}
else
{
	echo "<script>alert('inbox is empty')</script>";
	echo "<script>window.location.href='pro.php'</script>";
}
?>
<br><br>
<h1 style='color:red' align='center'><a href='Pro.php'><button><h2 style='color:red'><b><i>Go To Profile Page</i></b></h2></button></a></h1>
<h1 style='color:red' align='center'><a href='mail.php'><button><h2 style='color:red'><b><i>Create message</i></b></h2></button></a></h1>

<br><br>

