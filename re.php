<?php
session_start();
if(!isset($_SESSION["username"]))
{
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
}
?><?php
include"connection.php"; 
?>

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
             <div class="logo">Online Examination System</div>
      <label for="btn" style="color:red;"class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li>
          <label for="btn-1" class="show">Select Exam +</label>
          <a href="#">Select Exam</a>
          <input type="checkbox" id="btn-1">
              <ul>
            <li><a href="select_exam.php"> MCQ</a></li>
            <li><a href="select_ques.php">following Ques</a></li>
 </ul>
        </li>
        <li>
          <label for="btn-2" class="show">Result Sheet +</label>
          <a href="#">Result Sheet</a>
          <input type="checkbox" id="btn-2">
          <ul>
            <li><a href="old_exam_results.php">Of MCQ</a></li>
            <li><a href="re.php">Of following Ques</a></li>
 </ul>
     </li>
           
              <li><a href="contact.php">Contact</a></li>
           <li><a href="user.php" onclick="return confirm('Are U sure to logout? ')">logout</a></li>
        
    
      </ul>
    </nav>
 

    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

  </body>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
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
  color: black;
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
  border-radius: 60px;
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
  width: 200px;
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
    color: white;
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
.content{
  z-index: -1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
header{
  font-size: 35px;
  font-weight: 600;
  padding: 10px 0;
}
p{
  font-size: 30px;
  font-weight: 500;
}
</style>



<br><br>
<br><br><br><br>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body style="background:url(i/background.png);">
        <div class="breadcrumbs"style="background:url(../i/background.png);color:black;">
              <h1 style="margin-left:600px;color:black;">All Exam Results</h1>
          
             <a class="btn btn-default btn-block" style="width:70px;height:40px;margin-left:1400px;background: linear-gradient(45deg,#87adfe,#ff77cd);box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;border-radius: 10px;box-sizing:border-box;font-size:15px;" href="r1.php">Details</a>   
     
        </div>


        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body"style="background:url(../i/background.png);color:black;">
                        
                              
  
                
<?php include 'helpers/Format.php';?>
<?php
   
    $fm=new Format();
    ?>
                <?php
                $count=0;
                $res=mysqli_query($link,"select * from e_result order by id desc");
                $count=mysqli_num_rows($res);
          
                if($count==0)
                {
                    ?>
                    <center>
                        <h1> No Result Found </h1>
                    </center>
                    <?php
                }
                else{

                    echo "<table class='table table-bordered'>";
                    echo "<tr style='background-color:#drak-gray;color:black;'>";
    
                    echo "<th>"; echo "Student_name";echo "</th>";
                    echo "<th>"; echo "Registration_num";echo "</th>";
                     echo "<th>"; echo "Course name";echo "</th>";
                     echo "<th>"; echo "Total Marks";echo "</th>";
                       echo "<th>"; echo "Result";echo "</th>";
                     
                    echo "</tr>";

           
                    
                     
                  

foreach($link->query('SELECT username,reg_no ,category ,SUM(op2),SUM(result)
FROM e_result
GROUP BY category,username ;') as $r) {
    echo "<tr>";
      echo "<td>"; echo $r['username'] ; echo "</td>";
    echo "<td>"; echo $r['reg_no'] ; echo "</td>";
      echo "<td>"; echo $r['category'] ; echo "</td>";
      echo "<td>"; echo $r['SUM(op2)'] ; echo "</td>";  
      echo "<td>"; echo $r['SUM(result)'] ; echo "</td>";
     
            
      echo "</tr>";  
   }
                                     
                    
                echo "</table>";
            }






                ?>
                            </div>
                        </div> <!-- .card -->

                    </div>
                 
                    </div>
                       <!--/an-->
                    </div>
                    <!--/.con-->
</body>