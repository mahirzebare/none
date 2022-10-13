<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>user</title>
</head>
<body>


<?php // ava ya bottuna a j bo jebrna usera
 require_once('database.php');
if(empty($_GET['jebrn'])){

}else{
    $id = $_GET['jebrn'];

 $sql = "DELETE FROM users WHERE id = $id ";

if(mysqli_query($connect, $sql) === TRUE){
    echo "<h1>yes</h2>";

}else{
    echo "no";
}
}
?>
    <?php
    require_once('database.php');
    $sql = "SELECT * FROM users";
    
    $anjam = mysqli_query($connect, $sql);
    while($users = mysqli_fetch_assoc($anjam)){

    ?>
 <div class="profile_contenar">
    <div class="profile">
   <div class="title_name"> name : <?php echo $users['name']; ?>  </div>
   <div class="title_email"><?php echo $users['email']; ?></div>
   <div class="title_password"><?php echo $users['bajer']; ?></div> 
   <div class="title_password"><?php echo $users['id']; ?></div> 
  
  <a href="user.php?jebrn=<?php echo $users['id']; ?>">delete</a> 
   <!-- af codea j bo hnde ya waxte to clecke l sar eke bkae de id we je chet -->
  
   </div>
   </div>
   
 <?php
    }
 ?>


</body>
</html>