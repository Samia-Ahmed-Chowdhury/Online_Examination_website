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
 ?>

 <?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php
    $db=new Database();
    $fm=new Format();
    ?>
<?php
include"connection.php"; ?>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
<center>
  
<style>
body{
    background:url(images/bg.png) repeat fixed 0 0 #fff;}

}
.button {
  background-color:#ff878d;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 411px 8px;
  cursor: pointer;
}
 body{ 
 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;
 }</style>
<br><br>
 <a href="home.php" style="margin-left:5px;color:black;font-size:17px;" class="button">Home</a>&nbsp;&nbsp;
<a href="select_exam.php"style="color:black;font-size:17px;"class="button">Select MCQ Exam </a>&nbsp;&nbsp;
<a href="answer.php"style="color:black;font-size:17px;"class="button">Select Ques Exam </a>&nbsp;&nbsp;
<a href="old_exam_results.php" style="color:black;font-size:17px;" class="button">MCQ result</a>&nbsp;&nbsp;
<a href="r.php" style="color:black;font-size:17px;" class="button">Answer result</a>&nbsp;&nbsp;
<a style="color:black;font-size:17px;" onclick="return confirm('Are U sure to logout? ')" href="user.php">Logout</a>

                                             
   

<?php
session_start();

include"connection.php";
 ?>



        <div class="breadcrumbs"style="background:url(images/bg.png) repeat fixed 0 0 #fff;color:black;">
              <h1 style="margin-left:300px;color:black;">All Exam Results</h1>
          
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                        
                              
<center>
                    <h1> Old Exam Results</h1>
                </center>
                


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
                    echo "<tr style='background-color:light blue;color:black;'>";
                    echo "<th>"; echo "Student_name";echo "</th>";
                    echo "<th>"; echo "Registration_num";echo "</th>";
                    echo "<th>"; echo "Course_name";echo "</th>";
                    echo "<th>"; echo "Total Marks";echo "</th>";
                    
                    echo "<th>"; echo "Author";echo "</th>";
                    
                    echo "<th>"; echo "question";echo "</th>";
                    echo "<th>"; echo "Ans";echo "</th>";
                   
                    echo "<th>"; echo "Result";echo "</th>";
                    echo "</tr>";

                    while ($row=mysqli_fetch_array($res)) {
                    echo "<tr>";
                     echo "<td>"; echo $row["student_name"];echo "</td>";
                      echo "<td>"; echo $row["reg_no"];echo "</td>";
                    echo "<td>"; echo $row["title"];echo "</td>";
                    echo "<td>"; echo $row["exam_time_in_minutes"];echo "</td>";
                    echo "<td>"; echo $row["author"];echo "</td>";
                    echo "<td>"; echo $row["question"];echo "</td>";
                    echo "<td>"; echo $row["body"];echo "</td>";
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



