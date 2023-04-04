<?php
$server_name="localhost";
$username="root";
$password="root";
$database_name="book_store";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['pay1']))
{	
    $name = $_POST['first-name'];
    $mail= $_POST['gmail'];
    $address= $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['country'];
    



$sql_query = "INSERT INTO pay_d(a,b,c,d,e)
    VALUES ('$name','$mail','$address','$city','$state')";

    if ($conn->query($sql_query))
    {
       header("Location: http://localhost/dbms/success.html");
     
    } 
    else
    {echo '<script>alert("Payment failed!!!!Try again  !")</script>';
		echo '<script>window.location.href="payment.html";</script>';
        
    }
    mysqli_close($conn);
}
?>


 