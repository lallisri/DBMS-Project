<?php
$server_name="localhost";
$username="root";
$password="root";
$database_name="book_store";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['feedback']))
{	
	 $u_name = $_POST["name"];
	 $mail= $_POST["mail"];
	 $det = $_POST["fed"];}
	 $flag=true;
	 $query ="SELECT d FROM reg_details";
	 $result = $conn->query($query);
	 if($result->num_rows >0){
		 while($row = $result->fetch_assoc()){
			 if($row['d'] == $u_name){
				$flag=false;
					 $conn->query("INSERT INTO fed_d values('$u_name','$mail','$det')");
					 header('Location:http://localhost/dbms/front.html ');}
				 
				 else{
					 $flag=false;
					 echo '<script>alert("please enter correct details !")</script>';
					  echo '<script>window.location.href="feedback.html";</script>';
					   
				 }
			 
		 }}
		 if($flag){
			 echo '<script>alert("User doesnt exist..please register!")</script>';
			 echo '<script>window.location.href="feedback.html";</script>';
			
		 }
	 
	 ?>
	 

