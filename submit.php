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

if(isset($_POST['submit']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
     $user_name = $_POST['user_name'];
     $passw = $_POST['password'];
$query="select * from reg_details";
	$row=$conn->query($query);
	while($r=$row->fetch_assoc()){
		if($r['e']==$passw){
			echo '<script>alert("Admins cannot be more than 5!")</script>';
		echo '<script>window.location.href="Register.html";</script>';
		}
	}
	$sql_query = "INSERT INTO reg_details(a,b,c,d,e)
	 VALUES ('$first_name','$last_name','$email','$user_name','$passw')";
	 if (mysqli_query($conn, $sql_query)) 
	 {echo '<script>alert("Registered successfully !")</script>';
		echo '<script>window.location.href="index.html";</script>';
	 } 
	 else
     {
		echo "please enter details properly";
	 }
	 mysqli_close($conn);
}
?>