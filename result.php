<?php

include"home.php";
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date. "+ $_SESSION[exam_time] minutes"));

?>
<br><br>
<br><br> <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px;background:url(images/bg.png) repeat fixed 0 0 #fff;color:black;font-size:18px;">
              <?php
                 $correct=0;
                 $wrong=0;
                if(isset($_SESSION["answer"]))
                {
                  for($i=1;$i<=sizeof($_SESSION["answer"]);$i++)
                  {
                   $answer="";
                  $res=mysqli_query($link,"select * from questions where category='$_SESSION[exam_category]' && question_no=$i");
                    while ($row=mysqli_fetch_array($res)) 
                    {
                      $answer=$row["answer"];
                    }
                    if(isset($_SESSION["answer"][$i]))
                    {
                      if($answer==$_SESSION["answer"][$i])
                      {
                        $correct=$correct+1;
                      }
                      else{
                        $wrong=$wrong+1;
                      }
                    }
                    else{
                      $wrong=$wrong+1;
                    }
  
                  }
                }
  $count=0;
  $res=mysqli_query($link,"select * from questions where category='$_SESSION[exam_category]'");
  $count=mysqli_num_rows($res);
  $wrong=$count-$correct;
  echo "<br>"; echo"<br>";
   echo "<br>"; echo"<br>";
  echo "<br>"; echo"<br>";
   echo "<br>"; echo"<br>";
    echo "<center>";

  echo "Total Question=" .$count;
  echo "<br>";
  echo "Correct Question=" .$correct;
  echo "<br>";
  echo "Wrong Question=" .$wrong;
  echo "</center>";

              ?>

            </div>
        

<?php
if(isset($_SESSION["exam_start"]))
{
  $date=date("Y-m-d");
  mysqli_query($link,"insert into exam_results(id,username,exam_type,total_question,  correct_answer,wrong_answer,exam_time) values(NULL,'$_SESSION[username]','$_SESSION[exam_category]','$count','$correct','$wrong','$date')") or die(mysqli_error($link));
}
if(isset($_SESSION["exam_start"]))
{
  unset($_SESSION["exam_start"]);
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
    </script>
  <?php
}
?>



       