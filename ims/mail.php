<html>
<head><title>
Internal Messaging System-Creating Message
</title>
<style>
table {
		border-collapse:collapse;
		}
tr {
		background-color:pink;
	}
td {
	background-color:pink;
}
</style>
</head>

<body style='background-color:cyan' width=50%><div style='background-color:brown' width=50%><h1 style='color:pink' align='center' width=50%><b><i>Create Message</i></b></h1><h3 style='color:red' align='right'><a href='logout.php'><button><h3 style='color:red' align='center'><b><i>Logout</i></b></h3></button></a></h3>
</div></body></html>
<?php
session_start();
include "main.php";
$id=$_SESSION['id'];
$c=mysql_query("select * from reg where id='$id'");
//$a=$_REQUEST['i'];
$res=mysql_fetch_array($c);
//print_r($res);

echo  "<form action='compose1.php' method='post'>";
?>
 
 


<table align='center' width=50%>
<tr><td><h3 style='color:brown'><b><i>FROM:</i></b></h3></td><td><input type="text" name="fromuser" value = "<?php echo $res['user']?>" maxlength="32" ></td></tr> 


<tr><td><h2 style='color:green'><b><i>Subject:</i></b></h2></td><td><input type='text' name='subject'></td></tr>

<tr><td><h2 style='color:green'><b><i>To:</i></b></h2></td><td><input type='text' name='to' size=20 ></td></tr>

<tr><td><h2 style='color:green'><b><i>Message:</i></b></h2></td><td><textarea rows=16 cols=45 name='message'></textarea></td></tr>


</table>
<h2 style='color:green' height=90% width=10% align='center'><input type="submit" value="sent"></h2>


</form>

<h2 style='color:red' align='center'><a href='pro.php'><button><h2 style='color:red'><b><i>Go To Profile Page</i></b></h2></button></a></h2>




