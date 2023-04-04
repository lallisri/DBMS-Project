<?php
$db_connect = mysqli_connect('localhost','root','root','book_store') or die('connection failed');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Information</title>
<style>
.a{
    width:700px;
    padding:700px;
    margin:50px;
    border:3px white;
}
img{
  float: left
}

</style>
</head>
<body>

if(isset($))  
<?php $all_orders = mysqli_query($db_connect, "SELECT * FROM `book_det`");

if (mysqli_num_rows($all_orders) > 0) {
  while ($row = mysqli_fetch_assoc($all_orders)) {?>
 
    <div class="box">
      
    <p>  <img src= <?php echo $row['pic']?>>
      <h1><?= $row['name'] ?></h1>
      <h3> <?= $row['author'] ?> </h3>
      <p><?= $row['des'] ?><p>
    </div><p>
<?php }} else {
        echo '<p class="empty">no feedbacks placed yet!</p>';
      }
      ?>
</body>
</html>