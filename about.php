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
 <h1 style="margin-left:20px;"><span class="first-letter">A</span>bout <span class="first-letter">U</span>s</h1>

   <br> 

<?php
   $res=mysqli_query($link,"select * from about  where id='1'"); 
     while($row=mysqli_fetch_array($res)){
       $body=$row["body"];   }?>
       <?php
echo "<font size='5px'>"  .$body. "</font>";
       ?>


<br><br><br>
<?php
   $res=mysqli_query($link,"select * from tbl_social  where id='1'"); 
     while($row=mysqli_fetch_array($res)){
       $fb=$row["fb"];
      $tw=$row["tw"];
       $ln=$row["ln"];
      $gp=$row["gp"];
     }?>

<a href="<?php echo $fb;?>" target="_blank"><img src="images/fb.png" style="margin-left:45px;width:70px;height:70px;" alt="Facebook"/></a>
	<a href="<?php echo $tw;?>" target="_blank"><img src="images/tw.png" style="width:70px;height:70px;" alt="Twitter"/></a>
	<a href="<?php echo $ln;?>" target="_blank"><img src="images/in.png" style="width:70px;height:70px;" alt="LinkedIn"/></a>
<a href="<?php echo $gp;?>" target="_blank"><img src="images/gl.png" style="width:70px;height:70px;" alt="GooglePlus"/></a>

</div>
</body>
</html>