<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Exam System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


</head><style>

 body{ 
 background:url(i/background.png) no-repeat;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;
 }
</style>
<body><br><BR>


  
                      <a href="#"style="margin-left:900px;width:-4px;" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <img src="img/avatar-mini2.jpg" alt="" />
     <span class="admin-name"><?php echo $_SESSION["username"];?></span>
                                                            
  </a>  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <br><BR> <br><BR>

              <div class="col-lg-2"><p style="color:red;font-size:20px";>Remaining Time :-</p>   
                            <div class="breadcome-list">
                                <div class="row">

                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-right">
                                        <ul class="breadcome-menu">

                                            <li><div id="countdowntimer" style="display:block;"></div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
        <script type="text/javascript">
setInterval(function(){
    timer();
},1000);
function timer()
{
     xmlhttp= new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
        if( xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            if(xmlhttp.responseText=="00:00:01")
            {
                window.location="result.php";
            }
            document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","forajax/load_timer.php",true);
    xmlhttp.send(null);
    }
        </script>