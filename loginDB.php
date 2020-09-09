<?php
session_start();
 $con=new mysqli("localhost","root","","todo");
 if($con->connect_error){
     echo"Error In DB Connection";
 }
 $sql="SELECT name,password FROM user WHERE name='{$_POST["name"]}'AND password='{$_POST["pass"]}'";
 $res=$con->query($sql);
  if($res->num_rows==1){
      $re=$res->fetch_object();
      $_SESSION["name"]=$re->name;
      $_SESSION["pass"]=$re->password;
  echo"login";
 echo"<script>window.open('task.php','_self')</script>"; }
 else
 echo"Check The User Name And Password";
 
?>