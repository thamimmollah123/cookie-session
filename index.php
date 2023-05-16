<?php
include("allMethods.php");
session_start()

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
   .reg{
      width:25%;
      margin-left:35%;
      margin-top:10%;
      padding:10px;
      box-shadow: 4px 4px 4px 4px red;
     
   }
   body{
        background-color:aqua;
      }
  </style>
  <body>

  <?php
  
    $userid="";
     if(isset($_COOKIE['userid'])){
      $userid=$_COOKIE['userid'];
     }

    $password="";
    if(isset($_COOKIE['password'])){
      $password=$_COOKIE['password'];
     }
  ?>
   <form action=""method="post"class="reg">
    <h2>Login System</h2>
   <div class="form-floating mb-3">
  <input type="text" class="form-control" name="userid" placeholder="Enter useridId"value="<?php echo $userid;?>">
  <label for="floatingInput">Enter userId</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" name="password" placeholder="Enter Password"value="<?php echo $password;?>">
  <label for="floatingPassword">Enter Password</label>
  <br>
  <button name='submit'class="btn btn-primary">Submit</button>
</div>

   

   </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  <?php
    if(isset($_POST['submit'])){
     $userid=$_POST['userid'];
     $password=$_POST['password'];
     $response=myuser($_POST);
     $records=mysqli_num_rows($response);
     $data=mysqli_fetch_assoc($response);
     if($records>0){
      $_SESSION['userid']=$userid;
      setcookie("name",$data['name'],time()+8600);
      setcookie("userid",$userid,time()+8600);
      setcookie("password",$password,time()+8600);
      header("location:home.php");
     }
     else{
      echo "Data Not Insert";
     }
    }
  
  
  ?>
</html>