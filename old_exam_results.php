<?php


include "home.php";
include"connection.php";
?>
<br><br><br><br><br>
<style>
body{
  background:url(i/background.png) ;

}
</style>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;background:url(images/bg.png) no repeat fixed 0 0 #fff;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px;background:url(i/background.png) ;"
>
<br>
            	<center>
            		<h1> Old Exam Results</h1>
            	</center>
            	


            	<?php
            	$count=0;
            	$res=mysqli_query($link,"select * from exam_results where username=
            		'$_SESSION[username]' order by id desc");
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
            		echo "<tr style='background-color:#006df0;color:white'>";
            		echo "<th>"; echo "username";echo "</th>";
            		echo "<th>"; echo "exam type";echo "</th>";
            		echo "<th>"; echo "total question";echo "</th>";
            		echo "<th>"; echo "correct answer";echo "</th>";
            		echo "<th>"; echo "wrong answer";echo "</th>";
            		echo "<th>"; echo "exam time";echo "</th>";
            		echo "</tr>";

            		while ($row=mysqli_fetch_array($res)) {
            		echo "<tr>";
            		echo "<td>"; echo $row["username"];echo "</td>";
            		echo "<td>"; echo $row["exam_type"];echo "</td>";
            		echo "<td>"; echo $row["total_question"];echo "</td>";
            		echo "<td>"; echo $row["correct_answer"];echo "</td>";
            		echo "<td>"; echo $row["wrong_answer"];echo "</td>";
            		echo "<td>"; echo $row["exam_time"];echo "</td>";
            		echo "</tr>";                  	
            		}
            	echo "</table>";
            }



            	?>

            </div>

        </div>
 





       