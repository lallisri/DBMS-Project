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

if(isset($_POST['save1']))
{

	 $first_name = $_POST['user1'];
	 $last_name = $_POST['pass1']; }

	 $sql="SELECT count(*) from admin_d";
	 $result=$conn->query($sql);
	 while($row=mysqli_fetch_array($result)){
		 $r=$row['count(*)'];
	}
	if ($r<5)
    {
	 $sql_query = "INSERT INTO admin_d(a,b)
	 VALUES ('$first_name','$last_name')";
	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo '<script>alert("admins cannot be more than 5!!!!")</script>';
		echo '<script>window.location.href="admin_del.php";</script>';
	 } 
	 else
     {
		echo "invalid details";
	 } 
	 mysqli_close($conn); }

?>