<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav>
   

<?php
     require_once('database.php');
      $id = $_GET['id'];
      if(isset($_POST['gohren'])){
       $name =$_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $bajer = $_POST['bajer'];
       

      $sql = "UPDATE users SET name = '$name', email = '$email', password= '$password', bajer = '$bajer' WHERE id = $id ";
        if($connect->query($sql) === TRUE){
            echo  "سەرکەفتی";
        }else{
            echo "not corect";
        }
   }
   
  $sqli = "SELECT * FROM users WHERE id = '$id' ";
   $anjam = mysqli_query($connect, $sqli);
   if(mysqli_num_rows($anjam) > 0){
       while($user = mysqli_fetch_assoc($anjam)){

?>

<div class="space_form">
<form method="POST" class="edit">

    <h1>گوهرینا هژمارا خوو</h1>
 
    <div class="tbox">
        <input value="<?php echo $user['name']; ?>"  name="name" type="text" placeholder="....ناڤی دوو قولی">
    </div>
    <div class="tbox">
        <input value="<?php echo $user['email']; ?>" name="email" type="text" placeholder="ئیمێلێ تە">
    </div>
    <div class="tbox">
    <input value="<?php echo $user['password']; ?>" name="password" type="password" placeholder="ژمارا نهینی">
    </div>
    <div class="tbox">
    <input value="<?php echo $user['bajer']; ?>" name="bajer" type="text" placeholder="باژیر">
    </div>
    <div class="tbox">
    <input name="gohren" type="submit" value="گوهرین">
    </div>
</form>
</div>
<?php
       }
      }
?>

</body>
</html>