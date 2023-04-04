<?php
$db_connect = mysqli_connect('localhost','root','root','book_store') or die('connection failed');
if(isset($_GET["delete"])){
  mysqli_query($db_connect,"DELETE FROM `admin_d` WHERE a = '$_GET[delete]' ");
  header("location: make_ad.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>feedbacks</title>
  <link rel="stylesheet" href="admin_style.css">
  <style>
  .navbar{
    display: flex;
    background-color:rgb(0,0,0,0.3);
    position: fixed;
    top:0;
    width: 100%;
    font-size: 20px;
  }
  
  .nav-right{
    text-align: right;
    float:right;
  }
  
  .nav-right li {
      display: inline;
      float: left;
      padding-left: 15px;
    }
  
    .nav-right li a {
      display: block;
      padding: 8px;
      text-decoration: none;
      color:white;
    }
  
    .nav-right  li ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color:rgb(0,0,0,0.8);
    }
  
    .nav-right li a:hover {
      background-color: rgba(250,96,0,0.8);
    }
  
    .nav-right .active {
      background-color: #04AA6D;
    }
  
body {

background-image: url("https://wallpapers.com/images/hd/colorful-book-stack-outside-dg76b6qqzwaavwx1.jpg");
  background-size: "fixed";
  background-repeat: "no-repeat";
}
</style>
</head>

<body>

<header class="header">

<nav class="navbar">
        <div class="nav-right">
            <li><a href="front.html">Home</a></li>
            <li><a href="admin_dash.php">Dashboard</a></li>
        </div>
    </nav>

</div>

</header>

  <section class="users">

    <h1 class="title"> User accounts </h1>

    <div class="box-container">
      <?php
      $users = mysqli_query($db_connect, "SELECT * FROM `admin_d`");
      if (mysqli_num_rows($users) > 0) {
        while ($row = mysqli_fetch_assoc($users)) {
      ?>
          <div class="box">
            <p> user id : <span><?= $row["a"] ?></span> </p>
            <p> username : <span><?= $row["b"] ?></span> </p>
            

              <?php
        
                echo "<a href='make_ad.php?delete=" . $row["a"] . "' onclick='return confirm('delete this user?');' class='delete-btn disabled'>
              delete user</a>";
              ?>
                <form action="" method="post">
                  <input type="hidden" name="user_id" value="<?= $row["a"] ?>">
                  <input type="submit" name="make_admin" value="Make Admin" class="option-btn">
                </form>
              <?php
              
              ?>

            </div>


          </div>
      <?php
        };
    };
      ?>
    </div>

  </section>










  <script src="js/admin_script.js"></script>

</body>

</html>