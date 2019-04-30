<?php
ob_start();
session_start();
if(!isset($_SESSION['admin']))
{
  header("Location: superlogin.php");
  exit(0);
}

require_once "pageFormat.php";
pageHeader("Menu","logo1.jpg");

?>
<!DOCTYPE html>
<html lang="en">

<head>
	    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>INDEX
</title>

</head>

<body>
</body>


</html>
