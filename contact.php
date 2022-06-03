
 <?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php
    $db=new Database();
    $fm=new Format();
    ?>
  	<?php 
         if($_SERVER['REQUEST_METHOD']=='POST'){
           $fname=$fm->validation($_POST['firstname']);
           $lname=$fm->validation($_POST['lastname']);
           $email=$fm->validation($_POST['email']);
           $body=$fm->validation($_POST['body']);

           $fname=mysqli_real_escape_string($db->link,$fname);
           $lname=mysqli_real_escape_string($db->link,$lname);
           $email=mysqli_real_escape_string($db->link,$email);
           $body=mysqli_real_escape_string($db->link,$body);

           $error="";
           if(empty($fname)){
           	$error="First name must not be empty !";
           }
            elseif(empty($lname)){
           	$error="Last name must not be empty !";
           }
            elseif(empty($email)){
           	$error="Email field must not be empty !";
            } 
            elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           	$error="Invaild Email!";
            }elseif (empty($body)) {
            		$error='<script>alert("Something Went Wrong!..")</script>'; 
            } 
            else{
        $query="INSERT INTO  tbl_contact(firstname,lastname,email,body) VALUES ('$fname','$lname','$email','$body')";
        $inserted_rows=$db->insert($query);
        if($inserted_rows){
           $msg= '<script>alert("Msg Sent Successfully(^_^)!..")</script>';   
        }else{
            $error= '<script>alert("Msg Not Sent !..")</script>';   
        
        }
    }
}?><style>
.first-letter{
  text-transform: uppercase;
  font-size: 3rem;
  letter-spacing: 0px;
}
body{
background-image: url(i/background.png);
}
@media all and (max-width: 968px) {
.content{
	margin-left: -190px;
}
.about{
	margin-left:-160px;
}
    .btn{
display: inline-block;
background: linear-gradient(45deg,#87adfe,#ff77cd);
border-radius: 6px;
padding: 10px 20px;
box-sizing:border-box;
text-decoration: none;
box-shadow: 3px 8px 22px rgba(94,28,68,0.15);
color: #232d60;
margin-left: -270px;
width: 130px;

}
	}

</style>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<div class="content">
 <h1 style="margin-left:360px;margin-top:90px;"><span class="first-letter">C</span>ontact <span class="first-letter">U</span>s</h1>

	<div class="contentsection contemplete clear" style="margin-left:300px;font-size:60px;">
		<div class="maincontent clear">
			<div class="about">
			
				<?php
if(isset($error)){
	echo "<span style='color:red'>$error</span>";
}
if(isset($msg)){
	echo "<span style='color:green'>$msg</span>";
}
				?>
			<form action="" method="post" style="margin-left:100px;font-size:60px;">
				<table>
				<tr>
					<td>
					<input type="text" style="width:300px;height:40px;font-size:20px;" name="firstname" placeholder="Enter first name"/>
					</td>
				</tr>
				<tr>
					
					<td>
					<input type="text" style="width:300px;height:40px;font-size:20px;" name="lastname" placeholder="Enter Last name" />
					</td>
				</tr>
				
				<tr>
					
					<td>
					<input type="email" style="width:300px;height:40px;font-size:20px;"  name="email" placeholder="Enter Email Address" />
					</td>
				</tr>
				<tr>
				
					<td>
					<textarea style="width:300px;height:90px;font-size:20px;" placeholder="Enter Msg" name="body"></textarea>
					</td>
				</tr>
				<tr>
					<br>
				<td>
					<input type="submit" style="margin-left:250px;width:80px;height:40px;"name="submit" value="Send" >
					</td>
				</tr>

		</table>
		<a href="index1.php" class="btn"><span style="font-size:20px;">B</span>ack</a>
 
	<form>

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
margin-left: 300px;
width: 130px;

}</style>
  
						
 </div>

</div>
  
