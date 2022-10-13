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

    <?php
    session_start();
    $email = $_SESSION['email'];

    require_once('database.php');

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $anjam = mysqli_query($connect, $sql);
    if(mysqli_num_rows($anjam) > 0){
        while($user = mysqli_fetch_assoc($anjam)){
    ?>
           

<div class="profile_contenar">
    <div class="profile">
   <div class="title_name"> name :   <?php  echo $user['name']; ?></div>
   <div class="title_email"><?php  echo $user['email']; ?></div>
   <div class="title_password"><?php  echo $user['password']; ?></div>
   <div class="title_password"><?php  echo $user['bajer']; ?></div>
   <div class="title_password"><?php  echo $user['id']; ?></div>
<?php
if(isset($_POST['jebrn'])){
    $id = $user['id'];
    $sql = "DELETE FROM users WHERE id = '$id' ";
    if($connect->query($sql) === TRUE){
     echo  "<script>location.href= 'register.php'</script>";
    }else{
        echo "not";
    }

}
?>

   <form method="POST">
   <input name="jebrn" type="submit" value="ژێبرن">
   </form>
   <div class="btn_change">
   <a href="edit.php?id=<?php  echo $user['id']; ?>">گوهرین</a>
   </div>
   </div>
     


   </div>
   <?php
        }

   }
    ?>
</body>
</html>