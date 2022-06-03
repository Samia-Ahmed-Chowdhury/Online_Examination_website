<?php include 'h.php';
 include "connection.php";?>


 <style>
body{
background-image: url(i/background.png);
}
</style> <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<div class="content">
 <h1><span class="first-letter">F</span>ollow <span class="first-letter">A</span>long</h1>

   <br> 


 

<br><br><br>
<?php
   $res=mysqli_query($link,"select * from tbl_social  where id='1'"); 
     while($row=mysqli_fetch_array($res)){
       $fb=$row["fb"];
      $tw=$row["tw"];
       $ln=$row["ln"];
      $gp=$row["gp"];
     }?>



<a href="<?php echo $fb;?>" target="_blank"><img src="fb.gif" style="margin-left:250px;width:150px;height:150px;" alt="Facebook"/></a>
	<a href="<?php echo $tw;?>" target="_blank"><img src="tw.gif" style="width:150px;height:150px;" alt="Twitter"/></a>
	<a href="<?php echo $ln;?>" target="_blank"><img src="ln.gif" style="width:150px;height:150px;" alt="LinkedIn"/></a>
<a href="<?php echo $gp;?>" target="_blank"><img src="gp.jpg" style="width:150px;height:150px;" alt="GooglePlus"/></a>

</div>
</body>
</html>