
<!-- af coede php bo hnde ya waxte
 ta jarake email xo daxl krbet pahe bcheaf navda dobara nabejet daxl kava
 -->
<?php 
session_start();
if(isset($_SESSION['email'])){
    header('location: profile.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
<div class="space_form">
   
<form method="POST" class="login">

    <h1>چوونە ژوور</h1>
    <h2>
    <?php
    require_once('database.php');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $anjam = mysqli_query($connect, $sql);

        if(mysqli_num_rows($anjam) > 0 ){
            session_start();
            $_SESSION['email'] = $email;
         echo   "<script>location.href ='profile.php'</script>"; // if acorrect went a profile

        }else{
            echo "not correct";
        }
    }
    ?>
   </h2>
    <div class="tbox">
        <input name="email" type="text" placeholder="ئیمێلێ تە" required>
    </div>
    <div class="tbox">
    <input name="password" type="password" placeholder="ژمارا نهینی">
    </div>
    
    <div class="tbox">
    <input name="login" type="submit" value="چونە ژوور">
    
    </div>
</form>
</div>
</body>
</html>