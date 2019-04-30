<?php
ob_start();
session_start();
if(!isset($_SESSION['admin']))
{
  header("Location: superlogin.php");
  exit(0);
}

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
<?php
	echo<<<EOT
	<div class= "col-sm-4">
			<a class = "nav-item nav-link active" href="./superlogin.php">Login</a>
			<a class = "nav-item nav-link" href="./edit.php">Edit</a>
			<a class = "nav-item nav-link" href="./deleteform.php">Delete</a>
			<a class = "nav-item nav-link" href="./#">Close Form</a>
			<a class = "nav-item nav-link" href="./#">About</a>
	</div>
EOT;
?>
</body>


</html>
