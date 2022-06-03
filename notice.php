
  
<?php include 'h.php';?>
 <?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php
    $db=new Database();
    $fm=new Format();
    ?>
     <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">  
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style1.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
  <style>
  .maincontent {
  background: #E7F7FF none repeat scroll 0 0;
  border: 1px solid #ded4c5;
  margin-left:20px;
  padding: 8px 15px;
  width: 700px;
  margin-top:3px;
  color:black;
}
@media all and (max-width: 968px) {


    .maincontent {
  background: #E7F7FF none repeat scroll 0 0;
  border: 1px solid #ded4c5;
  margin-left:10px;
  padding: 8px 15px;
  width: 500px;
  margin-top:3px;
  color:black;
}
}
</style>

<div class="searchbtn clear">
            <form action="search.php" method="get">
                <input type="text" style="height:32px;"name="search" placeholder="Search keyword..."/>
                <input type="submit" name="submit" value="Search"/>
            </form>
            </div>
         
  <div class="content">
 <h1 style="margin-left:20px; "><span class="first-letter">N</span>otice <span class="first-letter">B</span>oard</h1></div>
 <br>

  <div class="contentsection contemplete clear">
    <div class="maincontent clear">
                <!--pagination-->
                 <?php
                 $per_page=3;
                 if(isset($_GET["page"])){
                  $page=$_GET["page"];
                 }else{
                  $page=1;
                 }
                 $start_form=($page-1)*$per_page;
                 ?>

                   <!--pagination-->
                 <?php
                $query="select * from tbl_post limit  $start_form,$per_page";
                $post=$db->select($query);
                if($post){
                  while ($result =$post->fetch_assoc()) {
                 ?>

       <div class="samepost clear">
        <h2><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h2>
        <h4><?php echo $fm->formatDate($result['date']);?>, By <a href="#"><?php echo $result['author'];?></a></h4>
         <a href="#"><img src="admin/<?php echo $result['image'];?>" alt="post image"/></a>
        <?php echo $fm->textShorten($result['body']);?>
        <div class="readmore clear">
        <a href="post.php?id=<?php echo $result['id'];?>">Read More</a>
        </div>
      </div>

    <?php } ?><!--end while loop-->
            <!--pagination-->
            <?php
            $query="select * from tbl_post";
            $result=$db->select($query);
            $total_rows=mysqli_num_rows($result);
            $total_pages=ceil($total_rows/$per_page)

            ?>
            <?php echo "<span class='pagination'><a href='index.php?page=1'>".'First page'."</a>";
           for ($i=1; $i<=$total_pages ; $i++) { 
             echo "<a href='index.php?page=".$i."'>".$i."</a>";
           }
              echo "<a href='index.php?page=$total_pages'>".'Last page'."</a></span>";?>
              <!--pagination-->


    <?php } else{ header("Location:404.php");}?>  

    </div>

