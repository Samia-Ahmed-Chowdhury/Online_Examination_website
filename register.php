<?php
include"connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
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
<br>
 <div class="error-pagewrap">
      
     
    <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3 style="color:#B4CAE7;">REGISTER FORM</h3>
            </div>
<br>
            <div class="content-error" >
                <div class="hpanel">
                    <div class="panel-body"style="background-color:#BCDDFC;">
                        <form action="" name="form1" method="post">
                                <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>FirstName</label>
                                    <input type="text" name=" firstname" class="form-control">
                
                                    <label>LastName</label>
                                  <input type="text" name="lastname" class="form-control">
                            
                                    <label>Username</label>
                                   <input type="text" name="username" class="form-control">
                                
                                <label>Password</label>
                                <input type="password" name="password"class="form-control">
                          
                                    <label>Email</label>
                                <input type="email" name="email" class="form-control">
                              
                                    <label>Contact</label>
                              <input type="text" name="contact"class="form-control">
                                </div>
                              </div>

 <div class="text-center">
   <button type="submit" name="submit1" class="btn btn-success btn-block loginbtn" style="background: linear-gradient(45deg,#87adfe,#ff77cd);box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;border-radius: 10px;box-sizing:border-box;font-size:17px;height:40px;width:80px;margin-top:5px;margin-left:100px;">Register</button>
               </form>
                    </div>
                          </div>
                               </div>

    <?php
if(isset($_POST["submit1"]))
{
    $count=0;
  $res=mysqli_query($link,"select * from  registration where username='$_POST[username]'") or die(mysqli_error($link));  
  $count=mysqli_num_rows($res);
  if($count>0)
  {
    ?>
   <script>alert("Username is Already Exit!! ..")</script>> 

    <?php
  }
  else{
    mysqli_query($link,"insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')")or die(mysqli_error($link));
        ?>
     <script>alert("Registration Successfully Done ..You can now log in (^_^)")
window.location="login.php";
   </script>> 

    <?php
  }
}
    ?>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>