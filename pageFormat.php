<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title></title>
    <style type="text/css">
      .mt-2 {
         margin-top: 30px !important; 
         color: blue;
            }
      .pb-0 {
          padding-bottom: 1px !important; 

      }
      .mt-0 {
                 margin-top: 0px !important; 

      }
      hr .style1 {
       border-top: 1px dashed #8c8b8b;
       
      }
      .navbar .nav-item {
          
          font-size: 20px;
          margin: 8px 0;
      }
    </style>
  </head>
  <body><?php

    //call this function to implement navbar on a page
    function pageHeader($title,$img)
    {
       echo<<<EOT
        <div class="row">
          <img src="$img" style="width:100px;height:100px;">
          <h2 class="mt-2">$title</h2>
          <nav class="navbar ">
          <!-- Navbar content -->
            <a class="nav-item nav-link active" href="menu.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="superlogin.php">Login</a>
            <a class="nav-item nav-link" href="edit.php">Edit User</a>
            <a class="nav-item nav-link" href="addUser.php">Add User</a>
            <a class="nav-item nav-link" href="deleteform.php">Delete User</a>
            <a class="nav-item nav-link" href="logout.php">Close Form</a>
            <a class="nav-item nav-link disabled" href="#">More</a>
            </nav>
        </div>
        <hr class="style1"/>
EOT;
     }

     function pageFooter()
     {

      }

    ?>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>