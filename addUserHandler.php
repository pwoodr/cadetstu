<?php
$dir=dirname(dirname(__FILE__));
require_once("DBfuncs/sqlConn.php");
$conn=connectDB();


//these values are posted from adduser.php
$username=$_POST['username'];
$pass=$_POST['password'];
$identity=$_POST['id'];
$issuperuser=isset($_POST['suser']) && $_POST['suser'] ? "1": "0";
$privilege=$_POST['securityName'];
$siteid=$_POST['fkSiteID'];


//sql query that inserts a new user
$query="INSERT tblusers VALUES(\"$username\",\"$pass\",\"$identity\",\"$privilege\",\"$issuperuser\", \"$siteid\" ";

$result=$conn->query($query);
if(!result) die("Fatal error from Query");
else
    header("Location: edit.php?msg=\"User added!\" ");
?>
