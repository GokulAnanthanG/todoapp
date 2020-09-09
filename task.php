
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
    
<title>Add Task</title>
   <style>
     #primary{
  border-radius: 360px;
  height: 50px;
  width: 50px;
  background-color:rgba(0, 140, 255, 0.589);
  -webkit-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  -moz-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
}
.badge-secondary{
  border-radius: 360px;
  height: 50px;
  width: 50px;
  background-color:palevioletred;
  -webkit-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  -moz-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
}
.badge-secondary{
  border-radius: 360px;
  height: 50px;
  width: 50px;
  background-color:palevioletred;
  -webkit-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  -moz-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
}
.badge-Info{
  border-radius: 360px;
  height: 50px;
  width: 50px;
  background-color:teal;
  -webkit-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  -moz-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
}
.badge-light{
  border-radius: 360px;
  height: 50px;
  width: 50px;
  background-color:oranged;
  -webkit-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  -moz-box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
  box-shadow: -1px 0px 8px 8px rgba(168,175,179,0.63);
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
  <a class="active" href="task.php">Home</a>
  <a href="event.php">Event</a>
  <a href="work.php">Work</a>
  <a href="study.php">Study</a>
  <a href="personal.php">Personal</a>
  <a href="others.php">Others</a>
  <a href="about.html">About</a>
  <a href="logout.php">Logout <i class="fa fa-sign-out"></i> </a>

</div>

<!-- Page content -->
<div class="content">
<div class="continer">
    <div class="row">
       <center>
 
       <div class="col-md-12">

       <table>

         

       <tr><td><h1>Task To Do</h1></td><td><span class="badge badge-warning"><h4>
       <?php
       $con=new mysqli("localhost","root","","todo");
 if($con->connect_error);
 $sql="SELECT * FROM task  WHERE   u='{$_SESSION["name"]}' AND p='{$_SESSION["pass"]}' ";
$res=$con->query($sql);
if($res->num_rows>0){
  $count=0;
  while($re=$res->fetch_object()){

$count++;
  }
  echo$count;
}
else{
  echo"0";
}
      ?> </h4></span></td></tr>
 

 <!-Event->
 <tr><td><h1>Event</h1></td><td><span id="primary" class="badge badge-primary"><h4>
       <?php
       $con=new mysqli("localhost","root","","todo");
       $sql="SELECT * FROM task WHERE category='event'AND u='{$_SESSION["name"]}' AND p='{$_SESSION["pass"]}' ";

$res=$con->query($sql);
if($res->num_rows>0){
  $count=0;
  while($re=$res->fetch_object()){

$count++;
  }
  echo$count;
}
else{
  echo"0";
}
      ?> </h4></span></td></tr>
      <!-work->

      <tr><td><h1>Work</h1></td><td><span class="badge badge-success"><h4>
       <?php
       $con=new mysqli("localhost","root","","todo");
 if($con->connect_error);
 $sql="SELECT * FROM task WHERE category='work'AND u='{$_SESSION["name"]}' AND p='{$_SESSION["pass"]}' ";
$res=$con->query($sql);
if($res->num_rows>0){
  $count=0;
  while($re=$res->fetch_object()){

$count++;
  }
  echo$count;
}
else{
  echo"0";
}
      ?> </h4></span></td></tr>
<!-Study->
<tr><td><h1>Study</h1></td><td><span class="badge badge-secondary"><h4>
       <?php
       $con=new mysqli("localhost","root","","todo");
 if($con->connect_error);
 $sql="SELECT * FROM task WHERE category='study'AND u='{$_SESSION["name"]}' AND p='{$_SESSION["pass"]}' ";
$res=$con->query($sql);
if($res->num_rows>0){
  $count=0;
  while($re=$res->fetch_object()){

$count++;
  }
  echo$count;
}
else{
  echo"0";
}
      ?> </h4></span></td></tr>

<!-personal->
<tr><td><h1>Personal</h1></td><td><span class="badge badge-Info"><h4>
       <?php
       $con=new mysqli("localhost","root","","todo");
 if($con->connect_error);
 $sql="SELECT * FROM task WHERE category='personal'AND u='{$_SESSION["name"]}' AND p='{$_SESSION["pass"]}' ";
$res=$con->query($sql);
if($res->num_rows>0){
  $count=0;
  while($re=$res->fetch_object()){

$count++;
  }
  echo$count;
}
else{
  echo"0";
}
      ?> </h4></span></td></tr>

<!-others->
<tr><td><h1>Others</h1></td><td><span class="badge badge-light"><h4>
       <?php
       $con=new mysqli("localhost","root","","todo");
 if($con->connect_error);
 $sql="SELECT * FROM task WHERE category='others'AND u='{$_SESSION["name"]}' AND p='{$_SESSION["pass"]}' ";
$res=$con->query($sql);
if($res->num_rows>0){
  $count=0;
  while($re=$res->fetch_object()){

$count++;
  }
  echo$count;
}
else{
  echo"0";
}
      ?> </h4></span></td></tr>

    </table>
        </div>
      
       <div class="col-md-12">
       <br><br><br>
       <button id="add" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i style="margin-top:-1px" id="icon" class="fa fa-plus"></i> </button>

       <h2 id="task" >Add Task</h2>
       </div>
        


 

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm" method="POST">
          <div class="form-group">
            <label for=" " class="col-form-label">Category</label>
           <select name="category" id="category" class="form-control">
           <option value=""></option>
<option value="event">Event</option>
<option value="work">work</option>
<option value="study">study</option>
<option value="personal">personal</option>
<option value="others">Others</option>


           </select>
          </div>

<div class="form-group">
  <label for="">Date</label>
  <input class="form-control" type="date" name="date" id="">
</div>

<div class="form-group">
  <label for="">Time</label>
  <table>
    <tr><td><input class="form-control" type="time" name="time" id=""></td><td><select class="form-control" name="meridium" id="">

    <option value="AM">AM</option>
    <option value="PM">PM</option>

    </select></td></tr>
  </table>
</div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Task</label>
            <textarea value="TOdo.." name="task" class="form-control" id="task"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="btn" type="button" class="btn btn-primary" data-dismiss="modal">Add Task</button>
      </div>
    </div>
  </div>
</div>


       </center>  
    </div>
</div>

<br><br><br><br><br><br>
<h1 id="footer" align="center">G(Creation)</h1>
<!--end-->
</div>
</body>
<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever')  
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


<script>
$(document).ready(function(){
  $("#btn").click(function(){
    var taskval=$("#task").val();
    
if($("#category").val()!=""){
   
      $.ajax({
        url:"taskDB.php",
        type:"post",
        data:$("#frm").serialize(),
        success:function(d){
          alert(d)
          location.reload();
        }
      })
   
   
}
else
alert("Select Catogory")
  })
})
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>