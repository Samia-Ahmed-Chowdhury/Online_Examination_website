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

if(!isset($_SESSION["username"]))
{
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="content-type" content="text/php; charset=utf-8" />

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
background:url(i/background.png);color:black;

}
 body{ 
 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;
 }</style>

 <?php
     if(!isset($_GET['msgid']) || $_GET['msgid']==NULL){
    echo "<script>window.location ='dashboard2.php';</script>";
     }else{
    $id=$_GET['msgid'];
}
?>
    
    <br><br>
                <h2 style="color:black;">Ans to the Ques</h2>
<?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
     echo "<script>window.location ='dashboard2.php';</script>";
      }?>

                <div class="block">               
                 <form action="" method="post" >
                <?php
          $query="select * FROM aquestion where  id ='$id'";
            $msg=$db->select($query);
            if($msg){
            $i=0;
             $op1="";
             while ($result=$msg->fetch_assoc()) {
               $i++;
               $op1=$result["op1"]; 
 $q=$result["q"];
  $op2=$result["op2"];
    $author=$result["k"];

                ?>

                   <table style="color:black;font-size:16px;">

                           <tr>
                            <td>
                                <label>Couse name</label>
                            </td>
                            <td>
                                <input type="text" name="category" value="<?php echo $_SESSION["ques_category"];?>" class="medium"  style=" width:270px; height:35px;font-size:16px;" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?php echo $result['k']?>" class="medium"  style=" width:270px; height:35px;font-size:16px;" readonly>
                            </td>
                        </tr>

                     <tr>
                         <td><label>ques</label></td>
                         <td>
    <?php
      if(strpos($op1, 'images/')!=false)
                 {
                   ?>
                    <img src="admin/<?php echo $op1 ;?>"  name="op1" height="100" width="100">
                 <input type="text" name="q" value=" <?php echo  ' '. $result['q'];?> ">
                  <?php
                 }
             else{
                echo $op1;
                 }
                 ?>
            </td>
        </tr>

                           <tr>
                            <td>
                                <label>marks</label>
                            </td>
                            <td>
                                <input type="text" name="op2" value="<?php echo $result['op2']?>" class="medium"  style=" width:270px; height:35px;font-size:16px;" readonly>
                            </td>
                        </tr>

                      <tr>
                            <td>
                                <label >Username</label>
                            </td>
                        
                            <td>
                                 <input type="text" readonly style=" width:270px; height:35px;" name="username" value="<?php echo $_SESSION["username"];?>">
                                  </td>
                        </tr>   
                     
                          <tr>
                            <td>
                                <label >Registration Num</label>
                            </td>
                        
                            <td>
                                 <input type="text"  style=" width:270px; height:35px;" name="reg_no" >
                                  </td>
                        </tr>

                         
                         <tr>
                            <td>
                                <label >Answer</label>
                            </td>
                        
                            <td>
                              <textarea name="body" style="height:200px;width:400px; font-size:20px;">
                               </textarea> </td>
                        </tr>

                        
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Done"  style="width:90px;color:#232d60; height:25px;font-size:16px;margin-left:320px;">
                            </td>
                        </tr>
                         
                    </table>
                   
                    </form>
                    <?php }}?>
                </div>
            </div>
        </div>





     <?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=mysqli_real_escape_string($db->link,$_POST['username']);
   $category=mysqli_real_escape_string($db->link,$_POST['category']);
   $reg_no=mysqli_real_escape_string($db->link,$_POST['reg_no']);
   $body=mysqli_real_escape_string($db->link,$_POST['body']);
$result=mysqli_real_escape_string($db->link,$_POST['result']);
    
    $query="INSERT INTO e_result(username,reg_no,category,author,op1,q,op2,body,result) VALUES ('$username','$reg_no','$category','$author','$op1','$q','$op2','$body','$result')";
          $inserted_rows=$db->insert($query);
     
    }
    ?>




       <style>
        .btn{
display: inline-block;
background: linear-gradient(45deg,#87adfe,#ff77cd);
border-radius: 6px;
padding: 10px 20px;
box-sizing:border-box;
text-decoration: none;
box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;
margin-left: 1000px;

}</style>
  <a href="dashboard2.php" class="btn"><span style="font-size:20px;">B</span>ack</a>

