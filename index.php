<html>

<head>

<link rel="stylesheet" href="style2.css">
    <title>index</title>
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

<div class="card-contenar">
<div class="row">


    <?php
    require_once('database.php');
    $sql = "SELECT * FROM product";
    
    $anjam = mysqli_query($connect, $sql);
    while($users = mysqli_fetch_assoc($anjam)){

       
 


    ?>




        <a href="barham.php?id=<?php echo $users['id']; ?>">
        <div class="card">
            <div class="title">
                <h3><?php echo $users['name']; ?></h3>
            </div>
            <div class="image-card">
                <img src="<?php echo $users['image']; ?>" >
            </div>
            <div class="price-title"><h3><?php echo $users['price']; ?></h3></div>
            
            </div>
            </a>
            
            
            
<?php
     }
?>
</div>
</div>
</body>

</html>