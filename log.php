<?php
$server_name="localhost";
$user_name="root";
$password="root";
$database_name="book_store";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['save'])){
    $user_name=$_POST["user"];
    $passcode=$_POST['pass1'];
}
$flag=true;
$query ="SELECT d,e FROM reg_details";
$result = $conn->query($query);
if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo $row['d']. "." .$row['e'];
        if($row['d'] == $user_name){
            if($row['e'] == $passcode){
                $flag=false;
                $sql_query="SELECT a FROM login_d";
                $res=$conn->query($sql_query);
                $row1=$res->fetch_assoc();
                if($row1['a']!=$user_name)
                {
                $conn->query("INSERT INTO login_d values('$user_name','$passcode')");}
                header('Location:http://localhost/dbms/front.html ');
            }
            else{
                $flag=false;
                echo '<script>alert("please enter correct details !")</script>';
                 echo '<script>window.location.href="index.html";</script>';
                  
            }
        }
    }
    if($flag){
        echo '<script>alert("User doesnt exist..please register!")</script>';
        echo '<script>window.location.href="Register.html";</script>';
       
    }
}
?>
