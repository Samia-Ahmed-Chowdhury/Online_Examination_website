<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Drop-down Menu Bar</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
  </head>
  <body>
    <nav>
        <div class="logo"></div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="home.php">Home</a></li>
        
        <li><a href="about.php">About</a></li>
         <li><a href="notice.php">Notice</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="container">
    <div class="content">
     
<h1 style="margin-left:20px;"><span class="first-letter">O</span>nline Examination</h1>
 
<p><span style="font-size:40px;">A</span>&nbsp; Website for Online base Exam</p>
<BR>
<a href="user.php" class="btn"><span style="font-size:20px;">E</span>nter</a>

<div class="arrow-icons">
<a href="about.php"><img src="i/back-arrow.png"></a>
<a href="notice.php"><img src="i/next-arrow.png"></a>
</div>
<br><br>
<img src="i/img.png" style="margin-left:550px;"class="feature-img">
     
 <h2><span>F</span>ollow <span >A</span>long</h2>
 <?php include "connection.php";
   $res=mysqli_query($link,"select * from tbl_social  where id='1'"); 
     while($row=mysqli_fetch_array($res)){
       $fb=$row["fb"];
      $tw=$row["tw"];
       $ln=$row["ln"];
      $gp=$row["gp"];
     }?>

<a href="<?php echo $fb;?>" target="_blank"><img src="images/fb.png" style="margin-left:-95px;width:70px;height:70px;" alt="Facebook"/></a>
	<a href="<?php echo $tw;?>" target="_blank"><img src="images/tw.png" style="width:70px;height:70px;" alt="Twitter"/></a>
	<a href="<?php echo $ln;?>" target="_blank"><img src="images/in.png" style="width:70px;height:70px;" alt="LinkedIn"/></a>
<a href="<?php echo $gp;?>" target="_blank"><img src="images/gl.png" style="width:70px;height:70px;" alt="GooglePlus"/></a>

</div></div></div>
    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

  </body>
</html>
<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.container{
	height: 100vh;
	width: 100%;
	background-image: url(i/background.png);
	background-size: center;
	background-size: cover;
	padding-left: 5%;
	padding-right: 5%;
	 box-sizing: border-box;
	position: relative;
}
.first-letter{
  text-transform: uppercase;
  font-size: 3rem;
  letter-spacing: 0px;
}
body{
  background:url(i/background.png) ;
}
nav{
 background-color: #BCDDFC;
   border-radius: 1760px;
}
nav:after{
  content: '';
  clear: both;
  display: table;
}
nav .logo{
  float: left;
  color: linear-gradient(45deg,#87adfe,#ff77cd);
  font-size: 27px;
  font-weight: 600;
  line-height: 70px;
  padding-left: 60px;
}
nav ul{
  float: right;
  margin-right: 40px;
  list-style: none;
  position: relative;
}
nav ul li{
  float: left;
  display: inline-block;
 background: linear-gradient(45deg,#87adfe,#ff77cd);
   border-radius: 30px;
  margin: 0 5px;
}
nav ul li a{
  color: black;
  line-height: 70px;
  text-decoration: none;
  font-size: 18px;
  padding: 8px 15px;
}
nav ul li a:hover{
  color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
               0 0 10px #66ffff;
}
nav ul ul li a:hover{
  box-shadow: none;
}
nav ul ul{
  position: absolute;
  top: 90px;
  border-top: 3px solid cyan;
  opacity: 0;
  visibility: hidden;
  transition: top .3s;
}
nav ul ul ul{
  border-top: none;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
}
nav ul ul li{
  position: relative;
  margin: 0px;
  width: 150px;
  float: none;
  display: list-item;
  border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
  line-height: 50px;
}
nav ul ul ul li{
  position: relative;
  top: -60px;
  left: 150px;
}
.show,.icon,input{
  display: none;
}
.fa-plus{
  font-size: 15px;
  margin-left: 40px;
}
@media all and (max-width: 968px) {
  nav ul{
    margin-right: 0px;
    float: left;
  }
  nav .logo{
    padding-left: 30px;
    width: 100%;
  }
  .show + a, ul{
    display: none;
  }
  nav ul li,nav ul ul li{
    display: block;
    width: 100%;
  }
  nav ul li a:hover{
    box-shadow: none;
  }
  .show{
    display: block;
    color: white;
    font-size: 18px;
    padding: 0 20px;
    line-height: 70px;
    cursor: pointer;
  }
  .show:hover{
    color: cyan;
  }
  .icon{
    display: block;
    color: linear-gradient(45deg,#87adfe,#ff77cd);
    position: absolute;
    top: 0;
    right: 40px;
    line-height: 70px;
    cursor: pointer;
    font-size: 25px;
  }
  nav ul ul{
    top: 70px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
  }
  nav ul ul a{
    padding-left: 40px;
  }
  nav ul ul ul a{
    padding-left: 80px;
  }
  nav ul ul ul li{
    position: static;
  }
  [id^=btn]:checked + ul{
    display: block;
  }
  nav ul ul li{
    border-bottom: 0px;
  }
  span.cancel:before{
    content: '\f00d';
  }
}

.content h1{
font-size: 60px;
font-weight: 100;
margin-top: 10px;
margin-bottom: 15px;
margin-left: -125px;
color: #232d60;
}
.content p{
font-size: 20px;
color: #6a7199;
margin-left:-45px;
}
.content {
margin-top: 10%;
margin-left: 10%;
}

.content .btn{
display: inline-block;
background: linear-gradient(45deg,#87adfe,#ff77cd);
border-radius: 6px;
padding: 10px 20px;
box-sizing:border-box;
text-decoration: none;
box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;
margin-left: 15px;

}
.arrow-icons{
	margin-top:20px;
	display: flex;
margin-left:-14px;
}
.arrow-icons img{
	width:50px;
	margin-right: 25px;
}
.feature-img{
	height: 80%;
	position: absolute;
	bottom: 0;
	
}

.first-letter{
	text-transform: uppercase;
	font-size: 5.3rem;
	letter-spacing: 0px;
}
</style>