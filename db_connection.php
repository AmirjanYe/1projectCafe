<?php
  $db_host = "localhost";
  $db_user = "user_4";
  $db_password = "123456789";
  $db_name = "week_4";

  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  if(mysqli_connect_error())
  {
    echo mysqli_connect_error();
    exit;
  }
  echo "connected successfully";
?>
