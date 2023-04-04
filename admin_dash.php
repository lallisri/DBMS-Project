<?php
$db_connect = mysqli_connect('localhost','root','root','book_store') or die('connection failed');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="admin_style.css">
<style>
  .navbar{
    display: flex;
    background-color:rgb(0,0,0,0.5);
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
      background-color:rgb(0,0,0,0.3);
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
            <li><a href="feed_up.php">Feedbacks</a></li>
            <li><a href="admin_add.html">Add Admin</a></li>
            <li><a href="admin_del.php">Remove Admin</a></li>
            <li><a href="pay_status1.php">Orders pending</a></li>
        </div>
    </nav>

</div>

</header>


  <section class="dashboard">

    <h1 class="title"></h1>
    <h1 class="title"></h1>
    <h1 class="title">Dashboard</h1>


    <div class="box-container">

      
      <div class="box">
          <?php $select_orders = mysqli_query($db_connect,"SELECT * FROM `pay_d`") ?>
          <h3><?php echo mysqli_num_rows($select_orders); ?></h3>
        <p>Total successful orders placed till date</p>
      </div>

  
      <div class="box">
          <?php $normal_users = mysqli_query($db_connect,"SELECT b FROM `reg_details`") ?>
        <h3><?= mysqli_num_rows($normal_users)?></h3>
        <p>Total registrations</p>
      </div>
      
      <div class="box">
      <?php $logins = mysqli_query($db_connect,"SELECT * FROM `login_d` ") ?>
        <h3><?= mysqli_num_rows($logins)?></h3>
        <p>Total logins</p>
      </div>

      <div class="box">
      <?php $admin_users = mysqli_query($db_connect,"SELECT * FROM `admin_d` ") ?>
        <h3><?= mysqli_num_rows($admin_users)?></h3>
        <p>Admin users</p>
      </div>

     

      <div class="box">
      <?php $messages = mysqli_query($db_connect,"SELECT * FROM `fed_d` ") ?>
        <h3><?= mysqli_num_rows($messages)?></h3>
        <p>Total feedbacks</p>
      </div>
      <div class="box">
      <?php $deliveries= mysqli_query($db_connect,"SELECT * FROM `confirm_d` ") ?>
        <h3><?= mysqli_num_rows($deliveries)?></h3>
        <p>Total Deliveries</p>
      </div>

    </div>
  </section>
  <script src="js/admin_script.js"></script>

</body>

</html>