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
<div class="w3-container" id="where" style="padding-bottom:0px; margin-top:20px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at some address at some place.</p>
    <img src="https://www.clipartmax.com/png/full/156-1567666_united-states-world-map-picture-frame-united-states-world-map-picture-frame.png" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>


    <div class = "john">
  
  <form action="page3.php" method="post">
            
  <?php
$name = "";
$people = "";
$date = "";
$message = "";
$code = "";
?>
            <label for="fname">NAME:</label><br>
            <input type="text" class="w3-input w3-padding-16 w3-border" name="name" placeholder="Name" value="<?php echo $name;?>"><br><br>

            <label for="fname">PEOPLE:</label><br>
            <input type="number" class="w3-input w3-padding-16 w3-border" name="people" placeholder="How many people" value="<?php echo $people;?>"><br><br>

            <label for="fname">DATE:</label><br>
            <input type="datetime-local" class="w3-input w3-padding-16 w3-border" name="date" placeholder="Date" value="<?php echo $date;?>"><br><br>

            <label for="fname">MESSAGE:</label><br>
            <input type="text" class="w3-input w3-padding-16 w3-border" name="message" placeholder="Your wishes" value="<?php echo $message;?>"><br><br>

            <label for="fname">CODE:</label><br>
            <input type="text" class="w3-input w3-padding-16 w3-border" name="code" placeholder="Think of the code for your reservation" value="<?php echo $code;?>"><br><br>
            <div>
                
                <input class="w3-button w3-black" type="submit" name="insert" value="MAKE AN ORDER">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                <input class="w3-button w3-black" type="submit" name="update" value="CHANGE ORDER DETAILS">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                <input class="w3-button w3-black" type="submit" name="delete" value="CANCEL THE ORDER">&nbsp;<br>
                <br> <br>
              <br>
                
                
                
</div>
           
    </div>
    
<?php

$db_host = "localhost";
$db_user = "user_4";
$db_password = "123456789";
$db_name = "week_4";

$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

$id = "";
$name = "";
$people = "";
$date = "";
$message = "";
$code = "";





function getPosts()
{
    $posts = array();
    
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['people'];
    $posts[3] = $_POST['date'];
    $posts[4] = $_POST['message'];
    $posts[5] = $_POST['code'];
    return $posts;
}


if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `cafe`(`name`, `people`, `date`, `message`, `code`) VALUES ('$data[1]','$data[2]','$data[3]', '$data[4]', '$data[5]')";
    
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'ORDER COMPLETED SUCCESSFULLY!';
                echo "<br>";
                echo "<br>";
                echo "The reservation's under: ";
                echo $data[1];
                echo "<br>";
                echo "Number of persons: ";
                echo $data[2];
                echo "<br>";
                echo "Date: " ;
                echo $data[3];
                echo "<br>";
                echo "Your requests: ";
        echo $data[4];
        echo "<br>";
        echo "Code of reservation: ";
        echo $data[5];
        echo "<br>";
            }else{
                echo 'Something went wrong, try again';
            }
        }
    
}


if(isset($_POST['delete']))
{
    $data = getPosts();

    $delete_Query = "DELETE FROM `cafe` WHERE (`name` = '$data[1]' and `code` = '$data[5]' and `people`='$data[2]')";
    
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'YOU HAVE SUCCESSFULLY CANCELED YOUR RESERVATION';
            }else{
                echo 'Something went wrong, try again';
            }
       
    }
}


if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `cafe` SET `message`='$data[4]',`people`='$data[2]', `date`='$data[3]' WHERE (`name` = '$data[1]' and `code` = '$data[5]')";
    
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'YOU HAVE SUCCESSFULLY CHANGED ORDER DETAILS!';
                echo "<br>";
                echo "<br>";
                echo "The reservation's under: ";
                echo $data[1];
                echo "<br>";
                echo "Number of persons: ";
                echo $data[2];
                echo "<br>";
                echo "Date: " ;
                echo $data[3];
                echo "<br>";
                echo "Your requests: ";
        echo $data[4];
        echo "<br>";
        echo "Code of reservation: ";
        echo $data[5];
        echo "<br>";
            }else{
                echo 'Something went wrong, try again';
            }
        }
    
}



?>

<div class="zassik">
           <footer class="w3-center w3-padding-48 w3-large">
  <p>Powered by <a href="yerdossov01@gmail.com" title="AmirYe" target="_blank" class="w3-hover-text-green">AmirYe</a></p>
</footer>
</div>