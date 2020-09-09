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
    <link rel="stylesheet" href="reg.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12  " id="top">
                <center>
                <div class="col-md-6"><img width="400px" height="400px" src="images/reg.svg" alt=""></div>
                <div class="col-md-6"><h1> ReGister</h1>
                <form id="frm" action="" method="POST">
                <div class="form-group">
                    <label for="">  Name </label>
                    <input type="text" placeholder="user name" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for=""><label for=""> Password </label></label>
                    <input type="password" placeholder="password" class="form-control" name="pass" id="pass">
                </div>
                <div class="form-group">
                    <label for=""><label for="">Confirm Password</label></label>
                    <input type="password" placeholder="Confirm password" class="form-control" name="cpass" id="cpass">
                </div>
                <div class="form-group">
                    <label for=""><label for="">Email</label></label>
                    <input type="Email" placeholder="email" class="form-control" name="email" id="email">
                </div>
                 
                <div class="form-group">
                     <input id="btn" value="Register" type="button" placeholder=""  class="form-control btn btn-primary" name="" id="">
                </div>
            </form>
                </div>
                <a href="login.html">Login?</a>
                <p align="center" id="mes"> </p>
            </center>
            </div>
        </div>
    </div>   
</body>
<script>
     $(document).ready(function(){
          var  check1;
          var  check2;
          var  check3;
          var  check4;
        var val;
        var val1;
        var val2;

        $("#name").keyup(function(){
          val1=$("#name").val();
              if(val1.length<2){
                 $("#name").css("border","1px solid red");
                 $("#mes").fadeIn();
                 $("#mes").html("User name too short").delay( ).fadeOut(1000)

              }
              else{
                 $("#name").css("border","1px solid rgba(56, 56, 216, 0.637)");
                 check1=true;
              }
       }) 

       $("#pass").keyup(function(){
          val=$("#pass").val();
              if(val.length<8){
                 $("#pass").css("border","1px solid red");
                 $("#mes").fadeIn();
                 $("#mes").html("Password must be more than 8 characters").delay( ).fadeOut(1000)

              }
              else{
               
                 $("#pass").css("border","1px solid rgba(56, 56, 216, 0.637)");
                 check2=true;
              }
       }) 


       $("#cpass").keyup(function(){
        val2=$("#cpass").val();
              if(status.length<8&&val==val2){
                $("#cpass").css("border","1px solid rgba(56, 56, 216, 0.637)");
                check3=true;
              }
              else{
                $("#cpass").css("border","1px solid red");
                $("#mes").fadeIn();
                $("#mes").html("Password confirm must be same").delay( ).fadeOut(1000)

              }
            
       }) 



       $("#email").keyup(function(){
           var email=/^([a-zA-Z0-9_.])+\@([a-z0-9])+\.([a-zA-Z])+$/
        val3=$("#email").val();
              if(email.test(val3)){
                $("#email").css("border","1px solid rgba(56, 56, 216, 0.637)");
                check4=true;
              }
              else{
                $("#email").css("border","1px solid red");
                $("#mes").fadeIn();
                $("#mes").html("Enter The Valid Email").delay( ).fadeOut(1000)

              }
            
       }) 


       $("#btn").click(function(){
        if(check1==true&&check2==true&&check3==true&&check4==true){
$.ajax({
    url:"registerDb.php",
    type:"post",
    data:$("#frm").serialize(),
    success:function(data){
           window.open("task.php");
    }
})

            

           }
           else{
              $("#mes").fadeIn();
                $("#mes").html("check all the feild").delay( ).fadeOut(1000)
           }
       })

     })
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>