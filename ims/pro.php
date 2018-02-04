<body style='background-color:cyan' ><div style='background-color:brown' width=50%>

<h1 style='color:pink' align='center'>Profile Page</h1>
<h3 style='color:red' align='right'><a href='logout.php'><button><h3 style='color:red' align='center'><b><i>Logout</i></b></h3></button></a></h1></div></body>

<title>
profile page
</title>
<?php
session_start();

include "main.php";
$id=$_SESSION['id'];
$q=mysql_query("select * from reg where id='$id'");
$r=mysql_fetch_array($q);
//echo $r['pic']; exit;

echo "<h2 style='color:green' align='center'><b><i>Name :</i></b>&nbsp&nbsp&nbsp&nbsp".$r['user']."</h2><br>";
//echo "&nbsp".$r['pic']."<br>";
echo "<h2 style='color:green' align='center'><b><i>Email id :</i></b>&nbsp&nbsp&nbsp&nbsp".$r['email']."</h2><br>";
echo "<h2 style='color:green' align='center'><b><i>Address :</i></b>&nbsp&nbsp&nbsp&nbsp".$r['adds']."</h2>";
?>

<h1 style='color:red' align='center'><a href='mail.php'><button><h1 style='color:red'><b><i>Create Messege</i></b></h1></button></a></h1><br>
<h1 style='color:red' align='center'><a href='inbox1.php'><button><h1 style='color:red' align='center'><b><i>Inbox</i></b></h1></button></a></h1><br>
<h1 style='color:red' align='center'><a href='sent.php'><button><h1 style='color:red' align='center'><b><i>Sentbox</i></b></h1></button></a></h1>
<br><br>
