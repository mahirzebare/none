<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>product</title>
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

        if(empty($_GET['jebrn'])){ // a

        }else{
            $jebrn = $_GET['jebrn'];
            $sql2 = "DELETE FROM product WHERE id = $jebrn";
            if(mysqli_query($connect ,$sql2) === TRUE){
                echo "ok";
            }else{
                echo "no";
            }
        }
        $sql = "SELECT * FROM product";

        $anjam = mysqli_query($connect, $sql);
        while($product = mysqli_fetch_assoc($anjam)){

    ?>
   
        <div class="product-title">
            <h1><?php echo $product['name']; ?></h1>
            <h3><?php echo $product['price']; ?></h3>
            <a href="product.php?jebrn=<?php echo $product['id']; ?>">ژێبرن</a>
        </div>

 <?php
    }
  ?>

</body>
</html>