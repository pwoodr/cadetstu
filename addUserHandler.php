<?php
$dir=dirname(dirname(__FILE__));
require_once("DBfuncs/sqlConn.php");
$conn=connectDB();


//these values are posted from adduser.php
$username=$_POST['userLoginName'];
$pass=$_POST['userPassword'];
$identity=$_POST['identity'];
$issuperuser=$_POST['superUser'];
$privilege=$_POST['privilege'];
$siteid=$_POST['site'];


//sql query that inserts a new user
$query="INSERT tblusers VALUES(\"$username\",\"$pass\",\"$identity\",\"$privilege\",\"$issuperuser\", \"$siteid\" ";

$result=$conn->query($query);
if(!result) die("Fatal error from Query");
else
    header("Location: edit.php?msg=\"User added!\" ");
?>
