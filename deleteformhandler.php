<?php 

require_once("sqlSts.php");
$conn = connectDB();
$user = $_POST['user'];

$query = "DELETE FROM tblusers WHERE UserLoginName = /"$user/"";

//header("Location: menu.php");
header("Location:  ");




?>