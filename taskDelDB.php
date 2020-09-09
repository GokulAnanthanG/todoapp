<?php
 $con=new mysqli("localhost","root","","todo");
 $sql="DELETE FROM task WHERE id='{$_POST["id"]}' ";
 if($con->query($sql)){
     echo"Task Removed";
 }
 else{
     echo"Something Went Wrong";
 }
 ?>