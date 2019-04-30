<?php

require_once ("DBfuncs/sqlConn.php");
require_once("DBfuncs/sqlSts.php");
$conn = connectDB();
$user = $_POST['user'];
$password = $_POST['password'];
$query = "SELECT UserLoginName, UserPW FROM tblusers WHERE userLoginName = \"$user\" AND UserPW=\"$password\" AND IsSuperuser = 1";

$result=$conn->query($query);
if(!$result) die("Error in query");

$rows=$result->num_rows;
if($rows!=0){
	session_start();
	$_SESSION['admin']='1';
	$_SESSION['userLoginName']=$user;
	header("Location: menu.php");
}

//header("Location: menu.php");
else 
header("Location: superlogin.php?msg=Incorrect Email or password! YOU ARE NOT AN ADMIN ");


?>