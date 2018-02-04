<html>
<head>
<title>
Sentbox
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


<body style='background-color:cyan' ><div style='background-color:brown' width=50%><h1 style='color:pink' align='center'><b><i>Sentbox</i></b></h1><h3 style='color:red' align='right'><a href='logout.php'><button><h3 style='color:red' align='center'><b><i>Logout</i></b></h3></button></a></h1></div>

<h1 style='color:red' align='left'><a href='Pro.php'><button><h2 style='color:red'><b><i>Go To Profile Page</i></b></h2></button></a></h1>
<h1 style='color:red' align='left'><a href='mail.php'><button><h2 style='color:red'><b><i>Create message</i></b></h2></button></a></h1>
</body></html>
<br><br><br>
<?php
session_start();
include "main.php";
$id=$_SESSION['id'];
$id1=mysql_query("select * from reg where id='$id'");
$id2=mysql_fetch_array($id1);
$id3=$id2['user'];

$result=mysql_query("select * from mail where userfrom='$id3' and status2='0' order by sentdate DESC;") or die ("cant do it");
if($r=mysql_fetch_array($result))
{
ECHO "<table  border = 1 bordercolor = red width = 80% align=center cellpadding=2 cellspacing=1 valign=top>"; 
echo "<tr><th><h2 style='color:brown'>To</h2></th><th><h2 style='color:brown'>Message</h2></th><th><h2 style='color:brown'>Delete Message</h2></th></tr>";
echo "<tr><td><h3>$r[userto]</h3></td><td><h3>$r[message]</h3></td><td><a href='delete.php?i=$r[mail_id]'><center><h3>Delete</h3></a><br></td></tr>"; 

 WHILE ($row=mysql_fetch_array($result))
{
//echo "$row[message]";
//ECHO "<table  border = 1 bordercolor = black width = 50% align=center cellpadding=2 cellspacing=1 valign=top>"; 
echo "<tr><td><h3>$row[userto]</h3></td><td><h3>$row[message]</h3></td><td><a href='delete.php?i=$row[mail_id]'><center><h3>Delete</h3></a><br></td></tr>"; 

}
echo "</table>"; 
}

else
{
	echo "<script>alert('sentbox is empty')</script>";
	echo "<script>window.location.href='pro.php'</script>";
}
?>
<br><br><br><br><br><br><br><br>

<br><br>