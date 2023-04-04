<?php
$server_name="localhost";
$user_name="root";
$password="root";
$database_name="book_store";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['save1'])){
    $user_name=$_POST["user1"];
    $passc=$_POST['pass1'];
}
$flag=true;
$query ="SELECT a,b from admin_d";
$result = $conn->query($query);
if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        if($row['a'] == $user_name){
            if($row['b'] == $passc){
                $flag=false;
            
                header("Location: http://localhost/dbms/admin_dash.php");
            }
            else{
                $flag=false;
                echo "failed";
            }
        }
    }

}
?>