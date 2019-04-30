<?php
ob_start();
session_start();
require_once "pageFormat.php";
require_once "./DBfuncs/sqlConn.php";
require_once "./DBfuncs/sqlSts.php";
pageHeader("Add User", "logo1.jpg");
// if(!isset($_SESSION['admin']))
// {
//   header("Location: superlogin.php");
//   exit(0);
// }

$connect=connectDB()

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</head>
<body>
<section id="boxes">
      <div class="container">
          <form action="addUserHandler.php" method="post">
            <fieldset>
              <legend>Add a User</legend>
              <p>UserLoginName: <input type="text" name="userLoginName"></p>
              <p>User Password: <input type="password" name="userPassword" onblur="validateNameMsg(this)"></p>
              <p id="errorNameMsg" class="text-primary">Password must be at least 5 characters of 1 letter or number</p>
              <p>Identity: <input type="text" name="identity"></p>
              <!-- <p>Privilege: <input type="text" name="privilege"></p> -->
              <p>Privelege<select name="privilege"><?php
                $sql= mysqli_query($connect, "SELECT DISTINCT Privilege FROM tblusers");
                while($row=$sql->fetch_assoc()){
                  echo "<option value\"privelege1\">".$row['Privilege']. "</option>";
                }
              ?></select></p>
              <p>Super User: <input type="checkbox" name="superUser" value=1></p>
              <!-- populate the fields with data from database-->
              <p>SiteID<select name="SiteId"><?php
                $sql= mysqli_query($connect, "SELECT DISTINCT fkSiteID FROM tblusers");
                while($row=$sql->fetch_assoc()){
                  echo "<option value\"siteID\">".$row['fkSiteID']. "</option>";
                }
              ?>
              </select></p>
              <button type="submit" value="Submit">Submit</button>
              <button type="reset" value="Reset">Reset</button>
            </fieldset>
          </form>


      </div>
   </section>
<script type="text/javascript" src="./javascript/validation.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>