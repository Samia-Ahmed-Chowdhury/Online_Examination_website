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
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="content-type" content="text/php; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="admin/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="admin/css/nav.css" media="screen" />
    <link href="admin/css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="admin/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="admin/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="admin/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="admin/js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="admin/js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="admin/js/table/table.js"></script>
    <script src="admin/js/setup.js" type="text/javascript"></script>
<center>
<style>
body{
 background:url(../i/background.png);color:black;}

}
 body{ 
 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;
 }</style>

  <div class="block " style="color:black;">        
       <table class="data display datatable" id="example">
          <thead>
            <tr>
              <th>Serial No.</th>
              <th>ques</th>
              <th>total mark</th>
            
              <th>Action</th>
            </tr>

          </thead>
          <tbody>




     <?php
      $query="select * FROM aquestion where category='$_SESSION[ques_category]' ";
            $msg=$db->select($query);
            if($msg){
            $i=0;
             while ($result=$msg->fetch_assoc()) {
               $i++;
                  $op1=$result["op1"]; 
 $q=$result["q"];
                    
    ?>
            <tr class="odd gradeX">
              <td><?php echo $i;?></td>
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
              <td><?php echo $result['op2'];?></td>
    

            <td><a href="viewmsg.php?msgid=<?php echo $result['id'];?>"style="color:black;">View</a> ||
               </td>

            </tr>
            <?php }}?>
          </tbody>
        </table>
               </div></div>
       
        
   <a class="btn btn-default btn-block" style="width:70px;height:40px;margin-left:1200px;background: linear-gradient(45deg,#87adfe,#ff77cd);box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;border-radius: 10px;box-sizing:border-box;font-size:15px;" href="select_ques.php">Back</a>
<br>  

 <script type="text/javascript">
     $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>
    <script type="text/javascript">
function load_questions2(questionno)
      {
        document.getElementById("current_que").innerHTML=questionno;
       var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function(){
    if( xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      if(xmlhttp.responseText=="over")
      {
        window.location="result.php";
      }
      else
      {
      document.getElementById("load_questions2").innerHTML=xmlhttp.responseText;
      load_total_que(); 
      }
    }
  };
  xmlhttp.open("GET","forajax/load_questions2.php?questionno="+questionno,true);
  xmlhttp.send(null);
}
    </script>
   