<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<link rel="stylesheet" href="cs16.css">
<body>
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="Picass.php" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s2">
      <a href="page1.php" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="page2.php" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="page3.php" class="w3-button w3-block w3-black">ORDER</a>
    </div>
    <div class="w3-col s2">
      <a href="login.php" class="w3-button w3-block w3-black">CALLBACK</a>
    </div>
  </div>
</div>

<div class = "amer">
  <center>
  <form action="login.php" method="post">
            
  <?php
$name = "";
$phone = "";
$city = "";
$password = "";
$x="   ";
?>
<h2>Leave your dateails, we surely will call you back!</h2>
            <label for="fname">Username:</label><br>
            <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>"><br><br>

            <label for="fname">Phone:</label><br>
            <input type="text" name="phone" placeholder="Phone" value="<?php echo $phone;?>"><br><br>

            <label for="fname">City:</label><br>
            <input type="text" name="city" placeholder="City" value="<?php echo $city;?>"><br><br>

            <label for="fname">Password:</label><br>
            <input type="password" name="password" placeholder="Password" value="<?php echo $password;?>"><br><br>
            <div>
                
                <input type="submit" class="w3-button w3-black" name="insert" value="Get a callback">
                
                
                <input type="submit" class="w3-button w3-black" name="update" value="Change my info">
                
                
                <input type="submit" class="w3-button w3-black" name="delete" value="Cancel callback"><br><br>
                
                
                
</div>
            </center>
    </div>
    <p>&nbsp; *If You want to change your phone number or city, please enter the password and your username</p>
    <p>&nbsp; *If You want to cancel the callback, please enter the password and your phone number</hp>
            </body>

</html>

<?php

$db_host = "localhost";
$db_user = "user_4";
$db_password = "123456789";
$db_name = "week_4";

$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

$id = "";
$name = "";
$phone = "";
$city = "";
$password = "";




function getPosts()
{
    $posts = array();
    
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['phone'];
    $posts[3] = $_POST['city'];
    $posts[4] = $_POST['password'];
    return $posts;
}


if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `article`(`name`, `phone`, `city`, `password`) VALUES ('$data[1]','$data[2]','$data[3]', '$data[4]')";
    
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
               
                echo "<br>";
                echo "<br>"; echo 'We will callback you soon';
            }else{
                 echo "<br>";echo "<br>";
                 echo'Something went wrong, try again';
            }
        }
    
}


if(isset($_POST['delete']))
{
    $data = getPosts();

    $delete_Query = "DELETE FROM `article` WHERE (`password` = '$data[4]' and `phone` = '$data[2]')";
    
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo "<br>";echo "<br>";
                echo 'We cancelled callback, thanks!';
            }else{echo "<br>";echo "<br>";
                echo 'Something went wrong, try again';
            }
       
    }
}


if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `article` SET `phone`='$data[2]' , `city`='$data[3]' WHERE (`password` = '$data[4]' and `name` = '$data[1]')";
    
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {echo "<br>";echo "<br>";
                echo 'You changed your info';
            }else{echo "<br>";echo "<br>";
                echo 'Something went wrong, try again';
            }
        }
    
}



?>

<div class="zasik">
            <footer class="w3-center w3-padding-48 w3-large">
  <p>Powered by <a href="yerdossov01@gmail.com" title="AmirYe" target="_blank" class="w3-hover-text-green">AmirYe</a></p>
</footer>
</div>