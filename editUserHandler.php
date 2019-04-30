<?php
$dir=dirname(dirname(__FILE__));
require_once("DBfuncs/sqlConn.php");
$conn=connectDB();

$username=$_POST['username'];
$privilege=$_POST['securityName'];
$siteid=$_POST['fkSiteID'];

$query="UPDATE tblusers SET Privilege=\"$privilege\", fkSiteID=\"$siteid\" WHERE UserLoginName=\"$username\" ";

$result=$conn->query($query);
if(!result) die("Fatal error from Query");
else
    header("Location: edit.php?msg=\"User edited!\" ");

?>
