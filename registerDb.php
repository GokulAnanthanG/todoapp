<?php
 $con=new mysqli("localhost","root","","todo");
 if($con->connect_error){
     echo"Db not Connected";
 }
 $name=$_POST["name"];
 $pass=$_POST["pass"];
 $email=$_POST["email"];

 $sql="INSERT INTO user(name,password,email) VALUES('{$_POST['name']}','{$_POST['cpass']}','{$_POST['email']}') ";
 if($con->query($sql)){
     echo"Registerd";
 }
 else{
     echo"Somthing Whent wrong";
 }
?>