<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<nav>
   
   <ul>
       <li><a href="#">دەستپیک</a></li>
       <li><a href="product.php">بەرهەم</a></li>
       <li><a href="user.php">بکارهینەر</a></li>
       <li><a href="add.php">زیدەکرنا بەرهەمی</a></li>
   </ul>
   <div class="log">
       <a href="register.php">جیکرنا هەژمار</a>
   </div>
</nav>
<?php
require_once('database.php');
$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE id = $id";
$anjam = mysqli_query($connect, $sql);
while($barham = mysqli_fetch_assoc($anjam)){
 



?>
<div class="barham">
<img width=40% src=" <?php echo $barham['image']; ?> ">
<h1><?php echo $barham['name']; ?></h1>
<h1><?php echo $barham['price']; ?></h1>
</div>
<?php
}

?>

</body>
</html>

