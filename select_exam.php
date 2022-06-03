
<?php
include"home.php";
if(!isset($_SESSION["username"]))
{
  ?>
  <script type="text/javascript">
window.location="login.php";
  </script>
  <?php
}
 ?>





<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


</head>

<body>





<style>
body{
    background:url(images/bg.png) repeat fixed 0 0 #fff;}
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
    margin-left: 200px;

  display: none;
  position: absolute;
 background-color: #BCDDFC;color:black;font-size:15px;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
<br><br><br><br><br><br>

  
 
            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px;  background:url(images/bg.png) repeat fixed 0 0 #fff;};">
             
             <?php 


$res=mysqli_query($link,"select * from exam_category");
while ($row=mysqli_fetch_array($res)) {
  ?>


 <div class="dropdown">     
<input type="button" class="btn btn-success form-control" value="<?php echo $row["category"];?>" style="margin-top:15px;width:100px;  background:url(images/bg.png) repeat fixed 0 0 #fff;color:black" 
onclick="set_exam_type_session(this.value);  return confirm('Are U Ready? ')";>

<div class="dropdown-content">  
  <?php
  $r=mysqli_query($link,"select * from questions where category='$row[category]'"); 
  $exam_time_in_minutes="";
$count=0;
    $count=mysqli_num_rows($r); 
     echo "(^_^)";
     echo "<br>"; 
    echo "<br>";           
       echo "Total Question=" .$count;
  echo "<br>"; 
  echo "<br>"; 
  echo "Exam_Time=" .$row["exam_time_in_minutes"]; 
  ?>    
</div>
</div>                   
       <?php
}

              ?>

            </div>

        </div>





       <script type="text/javascript">
function set_exam_type_session(exam_category)
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function(){
    if( xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      
      window.location="dashboard.php";
    }
  };
  xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category=" + exam_category,true);
  xmlhttp.send(null);
  
}

       </script>