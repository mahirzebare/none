<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>register</title>
</head>
<body>
<nav>
   
    <ul>
        <li><a href="#">دەستپیک</a></li>
        <li><a href="#">بەرهەم</a></li>
        <li><a href="#">بکارهینەر</a></li>
        <li><a href="#">زیدەکرنا بەرهەمی</a></li>
    </ul>
    <div class="log">
        <a href="login.php">چوونە ژوور</a>
    </div>
</nav>
    <div class="space_form">


        <form method="POST" class="register">
       
            <h1>دروستکنا هەژمارەکا نوی</h1>
            <?php
require_once('database.php');
 $hostname = "localhost";
 $username = "root";
 $password = "";
 $database = "mahir_tahir";

 $connect = mysqli_connect($hostname, $username, $password, $database);
   if(isset($_POST['hnartn'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $bajer = $_POST['bajer'];

      $sql = "INSERT INTO users(name, email, password, bajer) VALUES ('$name', '$email', '$password', '$bajer')";
        if($connect->query($sql) === TRUE){
            echo  "<script>location.href= 'login.php'</script>";
        }else{
            echo "not corect";
        }
   }

?>
            <div class="tbox">
                <input name="name" type="text" placeholder="....ناڤی دوو قولی">
            </div>
            <div class="tbox">
                <input name="email" type="text" placeholder="ئیمێلێ تە">
            </div>
            <div class="tbox">
            <input name="password" type="password" placeholder="ژمارا نهینی">
            </div>
            <div class="tbox">
            <input name="bajer" type="text" placeholder="باژیر">
            </div>
            <div class="tbox">
            <input name="hnartn" type="submit" value="تومارکرن">
            </div>
        </form>
    </div>
</body>
</html>