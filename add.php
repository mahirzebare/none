<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

 
  <link rel="stylesheet" href="style.css">
  <title>add</title>
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

  <div class="contenar-add">
    <form method="POST" enctype="multipart/form-data">
      <h1>زێدەکرنا بەرهەمی</h1>
      <?php
require_once('database.php');


if(isset($_POST['zedakrn'])){
  $name = $_POST['name'];
$price = $_POST['price'];
$image = "wena/";
$image = $image . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $image);

$sql = "INSERT INTO product (name, price, image) VALUES ('$name', '$price', '$image')";
if(mysqli_query($connect, $sql) === TRUE){
  echo "<h1>بەرهەم هاتە زیدەکرن</h1>";
}else{
  echo "no";
}

}
?>
      <div class="tx">
        <input name="name" type="text" placeholder="ناڤی بەرهەمی">
      </div>
      <div class="tx">
        <input name="price" type="text" placeholder="بهایی وی">
      </div>
      <div class="tx">
        <input name="image" type="file">
      </div>
      <div class="tx">
        <input name="zedakrn" type="submit" placeholder="زیدەکرن" value="زیدەکرن">
       
      </div>
    </form>
  </div>




</body>

</html>