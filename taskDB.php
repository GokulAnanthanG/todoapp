<?php
session_start();

  

$con=new mysqli("localhost","root","","todo");
if($con->connect_error){
    echo"Error To Connect DB";
}
 
$sql="INSERT INTO task(category,date,time,meridium,task,u,p) VALUES('{$_POST["category"]}','{$_POST["date"]}','{$_POST["time"]}','{$_POST["meridium"]}','{$_POST["task"]}','{$_SESSION["name"]}','{$_SESSION["pass"]}')";
if($con->query($sql)){
    echo"Task Added";
}
else{
    echo"Something Went Wrong";
}
?>