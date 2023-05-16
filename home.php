<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php
       $name="";
       if(isset($_COOKIE['name'])){
          $name=$_COOKIE['name'];
          echo "You Have logged In <br><br> ". $name;
       }
       if(isset($_SESSION['userid'])){
          $userid=$_SESSION['userid'];
          echo "Your id is <br>". $_SESSION['userid'];
       }
       
     
     ?>
      <a href="logout.php">Logout</a>
</body>
</html>