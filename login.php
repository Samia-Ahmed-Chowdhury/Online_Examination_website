<?php
session_start();
include"connection.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<style>

body{
    background:url(i/background.png);
}

</style>
  

    <div class="error-pagewrap">
      
     
    <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3 style="color:#B4CAE7;">LOGIN FORM</h3>
            </div>

            <div class="content-error" >
                <div class="hpanel">
                    <div class="panel-body"style="background-color:#BCDDFC;">
                        <form action="" name="form1" method="post">
                            <div class="form-group">
                 
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Enter name" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">

                            </div>           

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn" style="background: linear-gradient(45deg,#87adfe,#ff77cd);box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;border-radius: 10px;box-sizing:border-box;font-size:17px;height:40px;width:80px;margin-top:30px;margin-left:40px;">  Login</button>
  <a class="btn btn-default btn-block" style="float:right;width:100px;height:40px;background: linear-gradient(45deg,#87adfe,#ff77cd);color: #232d60;border-radius:10px;margin-right:45px;margin-top:-40px;" href="register.php">Register</a>

   
                    </div>
                </div>
            </div>

        </div>   
    </div>
 

    <?php
if(isset($_POST["login"])){
         
    $count=0;
     $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'") ; 
     $count=mysqli_num_rows($res);
  if($count==0)
  {
    ?>
    <script>alert(" Does Not Match!...Invaild Name or Password!! ..")</script>> 

    <?php
   }

   else
{

$_SESSION["username"]=$_POST["username"];?>
    ?>
    <script type="text/javascript">
window.location="home.php";
    </script>
    <?php
   }
 }
    
?>
 
