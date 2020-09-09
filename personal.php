
<?php
session_start();
  if(!isset($_SESSION['name'])){
    echo"<script>window.open('login.php','_self')</script>"; }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8text">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="task.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
<title>Personal</title>
    <style>
    table{
      font-family:times new roman;
    }
    #tas{
      max-width:420px;
      overflow:none;
      overflow:scroll
    }
    </style>
</head>
<body>
 
<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
 &nbsp; <span class="t1"><h1>TOdo</h1></span>  
</nav>
 <br><br><br><br><br> 

<!-- The sidebar -->
<div class="sidebar">
  <a href="task.php">Home</a>
  <a   href="event.php">Event</a>
  <a  href="work.php">Work</a>
  <a  href="study.php">Study</a>
  <a class="active" href="personal.php">Personal</a>
  <a href="others.php">Others</a>
  <a href="logout.php">Logout <i class="fa fa-sign-out"></i> </a>

</div>

<!-- Page content -->
<div class="content">
<div class="continer">
    <div class="row">
    <h1 style="font-family:crsive" align="center">PeRsOnAL</h1>
       <center>
 
 <?php
 $con=new mysqli("localhost","root","","todo");
 if($con->connect_error);
 $sql="SELECT * FROM task WHERE category='personal'AND u='{$_SESSION["name"]}' AND p='{$_SESSION["pass"]}' ";

$res=$con->query($sql);
if($res->num_rows>0){
  
  while($re=$res->fetch_object()){
    echo"<div class='col-md-12 well'>
    <table class='table'>
    <tr><td>$re->category&nbsp;$re->date&nbsp;$re->time$re->meridium</td><td id='tas'><h3>$re->task</h3></td><td></td><td><br><button id='$re->id' class='btn btn-success btn'><i class='fa fa-check'></i></button</td></tr>
    </table></div>  ";
  }
   
 

 
}
else{
  echo"</h1>NO TASK</h1>";
}
?>
       </center>  
    </div>
</div>

<br><br><br><br><br><br>
<h1 id="footer" align="center">G(Creation)</h1>
<input name="id" id="inp" type="hidden">

<!--end-->
</div>
</body>
 
<script>
  $(document).ready(function(){
    $(document).on('click','.btn',function(){
           var thi=$(this)
      var btnId=thi.attr("id");

     var con= confirm("Is Task Done!");
$("#inp").val(btnId)      
       if(con){
       
      $.ajax({
        url:"taskDelDB.php",
        method:"post",
        data:$("#inp").serialize(),
        success:function(d){
          alert(d)
          location.reload();
        }
      })
       }
    })
  })
</script>



 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>