<?php
  function dbConnect(){
     $serverName="localhost";
     $userName="root";
     $password="";
     $dbName="user";

     $conn=mysqli_connect($serverName,$userName,$password,$dbName);
     return $conn;



  }
  function myuser($data){
     $userid=$data['userid'];
     $password=$data['password'];

     $conn=dbConnect();

     $sql="select * from cookie where userid='$userid' and password='$password'";
     $response=mysqli_query($conn,$sql);
     return $response;
  }


?>