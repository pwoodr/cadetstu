<?php
ob_start();
session_start();
if(isset($_SESSION['admin']))
{
  header("Location: menu.php");
  exit(0);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
 <?php
    if(isset($_GET['msg']))
{
  $msg=$_GET['msg'];
  echo<<<EOT
  <div class="alert alert-danger" role="alert">
  $msg
  </div>

EOT;
}
        
    //pageHeader("Login","logo1.png");
    ?>
    <div class="container">
    <form action="./superloginhandler.php" method="POST">
      User: <br>
      <input type="text" name="user" value=""><br>
      password: <br>
      <input type="password" name="password" value=""><br>
      <br><br>
      <input type="submit" value="submit">



    </form>
  </div>
</body>
</html>