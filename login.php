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

    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row"><br>
            <div class="col-md-12  " id="top">
                <center>
                <div class="col-md-6"><img width="400px" height="400px" src="images/login.svg" alt=""></div>
                <div class="col-md-6"><h1>LOgin</h1>
                <form id="frm" action="" method="POST" >
                <div class="form-group">
                    <label for=""> <i class="fa fa-user"></i> </label>
                    <input type="text" placeholder="user name" class="form-control" name="name" id="">
                </div>
                <div class="form-group">
                    <label for=""><label for=""> <i class="fa fa-key"></i> </label></label>
                    <input type="text" placeholder="password" class="form-control" name="pass" id="">
                </div>
                <div class="form-group">
                     <input id="btn" value="Login" type="button" placeholder=""  class="form-control btn btn-primary" name="" id="">
                </div></form>
                
                </div>
                <a href="register.php">Register?</a>
                <p id="mes"></p>
            </center>
            </div>
        </div>
    </div>   
</body>
<script>
     $(document).ready(function(){
 $("#btn").click(function(){
     
     $.ajax({
         url:"loginDB.php",
         method:"post",
         data:$("#frm").serialize(),
         success:function(d){
             
             $("#mes").fadeIn();
$("#mes").html(d).fadeOut(2500)
         }
     })
 })
     })
 </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>