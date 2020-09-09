<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8text">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>ToDo</title>
    <style>
    h1::first-letter{
        color:blue;
        font-size:60px;
    }
   span{
        color:red;
        font-size:40px;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12  " id="top">
                <center>
                <div class="col-md-6"><img width="400px" height="400px" src="images/note.svg" alt=""></div>
                <div class="col-md-6"><h1>tO<span>dO</span></h1></div>
            </center>
            </div>
        </div>
    </div>   
</body>
<script>
    setTimeout(()=>{
       wind();
    },2000)

  function  wind(){
      window.open("login.php",'_self')
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>