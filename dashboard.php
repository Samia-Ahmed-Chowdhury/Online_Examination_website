
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
 include "header.php";?>


 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">
<br>
  <br><br>
  <br>
        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">
            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
 <br>
  <br>
    <div class="col-lg-2 col-lg-push-10">
      <div id="current_que" style="float:left">0</div>
      <div style="float:left">/</div>
      <div id="total_que" style="float:left">0</div>
    </div>  
<br><br>

        <div class="col-lg-5 col-lg-push-1" style="min-height: 300px; background-color: white" id="load_questions">
                  </div>
            
           
              <br><br>
   <div class="col-lg-12 text-center">
          <input type="button" class="btn btn-warning"  style="color:black;"value="Previous" onclick="load_previous();">&nbsp;
          <input type="button" class="btn btn-success" value="Next" onclick="load_next();">
<br><br><br>
   <a class="btn btn-default btn-block" style="width:70px;height:40px;margin-left:360px;background: linear-gradient(45deg,#87adfe,#ff77cd);box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color:black;border-radius: 10px;box-sizing:border-box;font-size:15px;" href="home.php">Back</a>
 
                  </div>  

    
</div>
 </div> 

     <script type="text/javascript">
      function load_total_que()
      {
        var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function(){
    if( xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        document.getElementById("total_que").innerHTML=xmlhttp.responseText;
    }
  };
  xmlhttp.open("GET","forajax/load_total_que.php",true);
  xmlhttp.send(null);
  }


      var questionno="1";
      load_questions(questionno);
      function load_questions(questionno)
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
      document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
      load_total_que(); 
      }
    }
  };
  xmlhttp.open("GET","forajax/load_questions.php?questionno="+questionno,true);
  xmlhttp.send(null);
}


function radioclick(radiovalue,questionno)
{
 xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function(){
    if( xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       
    }
  };
  xmlhttp.open("GET","forajax/save_answer_in_session.php?questionno=" +questionno+"&value1="+radiovalue,true);
  xmlhttp.send(null);
  }


   function load_previous()
   {
      if(questionno=="1")
      {
        load_questions(questionno);
      }
      else
      {
        questionno=eval(questionno)-1;
        load_questions(questionno);
      }
   }
  function load_next()
   {
        questionno=eval(questionno)+1;
        load_questions(questionno);
  }
      </script>  


