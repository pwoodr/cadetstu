<?php
ob_start();
session_start();
require_once "pageFormat.php";
pageHeader("Delete User", "logo1.jpg");
if(!isset($_SESSION['admin']))
{
  header("Location: superlogin.php");
  exit(0);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
<section id="boxes">
      <div class="container">
          <form action="delete.php" method="post">
            <fieldset>
              <legend>Are you sure you want to delete this user?</legend>
              <input name="user" type="text" value="">                  <!-- value is the user being deleted-->
              <button type="submit" value="Submit">Yes, Please Delete</button>
              <button type="button" onclick="location='menu.php'">No, Don't Delete</button>
            </fieldset>
          </form>

         <br>
      </div>
   </section>
</body>
</html>