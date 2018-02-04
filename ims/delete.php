<?php
session_start();
include "main.php";
$id=$_SESSION['id'];
$id1=mysql_query("select * from reg where id='$id'");
$id2=mysql_fetch_array($id1);
$id3=$id2['email'];
$e=$_REQUEST['i'];

$query = mysql_query("update mail set status2='1' where mail_id='$e'") or die("cant do it");
echo "<script>window.location.href='sent.php'</script>";

?>

