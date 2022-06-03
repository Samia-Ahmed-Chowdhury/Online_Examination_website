<?php include 'h.php';?>
 <?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php
    $db=new Database();
    $fm=new Format();
    ?>
<style>
.pagination{
  display:block;font-size:20px;margin-top: 20px;padding: 10px;text-align:center}
.pagination a{
  background:#e6af4b none repeat scroll 0,0;
  border: 1px solid #a7700c;
  color: #333;
  padding:2px 10px;
  margin-left: 2px;
  border-radius: 3px;
}
.pagination a:hover{background:#be8723 none repeat scroll 0 0;color: black;}
.maincontent {
  background: #fef4e5 none repeat scroll 0 0;
  border: 1px solid #ded4c5;
  margin-left:220px;
  padding: 8px 15px;
  width: 700px;
  margin-top: 50px;
}

</style><meta name="language" content="English">
     <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">  
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style1.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<?php
     if(!isset($_GET['id']) || $_GET['id']==Null){
    	header("Location: 404.php");
     } else{
     	 $id=$_GET['id'];
     
     }
 ?>
	
		<div class="maincontent clear" style="height:330px;color:black;  background: #E7F7FF none repeat scroll 0 0;">
			<div class="about">
			<br><br>
				<?php
                  $query = "select * from tbl_post where id=$id";
                   $post=$db->select($query);
                    if($post){
                  while ($result =$post->fetch_assoc()) {
                 
                  ?>
				<h2><?php echo $result['title'];?></h2>
	            <h4><?php echo $fm->formatDate($result['date']);?>, By <a href="#"><?php echo $result['author'];?></a></h4>
			    <br><img src="admin/<?php echo $result['image'];?>" style="float:left;color:black;width:150px;height:100px;" alt="post image"/>
		            <h6 style="color:black;font-size: 20px;margin-left: 230px;"><?php echo $result['body'];?></h6>

           
		          <?php }}else{ header("Location:404.php");}?>  

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
margin-left: 450px;

}</style>
  <a href="notice.php" class="btn"><span style="font-size:20px;">B</span>ack</a>
 
			 </div>

       </div>
		
