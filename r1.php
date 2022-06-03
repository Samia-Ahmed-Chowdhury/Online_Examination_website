<?php
session_start();

include"connection.php";
if(!isset($_SESSION["username"]))
{
  ?>
  <script type="text/javascript">
window.location="login.php";
  </script>
  <?php
}

 ?>

   <link rel="stylesheet" href="admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


<a href="#" style="margin-left:1350px;"data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <img src="img/avatar-mini2.jpg" alt="" />
     <span class="admin-name"><?php echo $_SESSION["username"];?></span>
                                                            
  </a>                                                
    
<ul>
<li><a href="home.php" style="color:black;font-size:17px;">Home</a></li>
<li><a href=""style="color:black;font-size:17px;">Select Exam</a>
<ul>
    <li><a href="select_exam.php"style="color:black;font-size:17px;">MCQ</a></li>
    <li><a href="select_ques.php"style="color:black;font-size:17px;">Ans to the Following Ques</a></li>
   
</ul>
</li>
<li> <a href="# ">Result</a>
<ul>
    <li><a href="old_exam_results.php" style="color:black;font-size:17px;">MCQ</a></li>
    <li><a href="re.php" style="color:black;font-size:17px;">Following Ques</a></li>
 
</ul>
</li>
<li> <a href=" contact.php">Contact</a>

</li>
<li><a style="color:black;font-size:17px;" onclick="return confirm('Are U sure to logout? ')" href="user.php">Logout</a></li>
</ul>



<style>

 body{ 
 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;
 }
ul{
    margin: 0px;
    padding: 0;
    list-style: none;
    font-family: arial;
}
ul li{
    float: left;
    width: 250px;
    height: 40px;

background: linear-gradient(45deg,#87adfe,#ff77cd);
    opacity:  .8;
    line-height: 40px;
    text-align: center;
    font-size: 20px;
}
ul li a{
    text-decoration: none;
    color: white;
    display: block;
}
ul li a:hover{
    background-color: blue;
}
ul li ul li{
    display: none;
}
ul li:hover ul li{
    display: block;
}
</style>

<br><br><Br>
<br><br><Br>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <div class="breadcrumbs"style="background:url(../i/background.png);color:black;">
              <h1 style="margin-left:600px;color:black;">All Exam Results</h1>
          
                     <a class="btn btn-default btn-block" style="width:70px;height:40px;margin-left:1400px;background: linear-gradient(45deg,#87adfe,#ff77cd);box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;border-radius: 10px;box-sizing:border-box;font-size:15px;" href="re.php">Back</a>   
     
       
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body"style="background:url(../i/background.png);color:black;">
                        
                              
<center>
                   
                </center>
                
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
                     echo "<th>"; echo "date";echo "</th>";
                     echo "<th>"; echo "Result";echo "</th>";
                    echo "</tr>";

                    while ($row=mysqli_fetch_array($res)) {
                    echo "<tr>";
                     echo "<td>"; echo $row["username"];echo "</td>";
                      echo "<td>"; echo $row["reg_no"];echo "</td>";
                    echo "<td>"; echo $row["category"];echo "</td>";
                    echo "<td>"; echo $row["op2"];echo "</td>";
                     echo "<td>";echo $fm->formatDate($row["date"]); echo "</td>";
                    echo "<td>"; echo $row["result"];echo "</td>";
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



                         
