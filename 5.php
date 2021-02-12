<?php require_once "db_connection.php" ?>
<br>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $query_2 = "INSERT INTO article (`title`, `content`, `published_at`, `URL`)
              VALUES
              (
                '" . $_POST['articleTitle']. "',
                '" . $_POST['articleContent']. "',
                '" . $_POST['articleDate']. "',
                '" . $_POST['articleURL']. "'
              )";
  $results = mysqli_query($connection, $query_2);
}

  //check if exists
  if($results===false)
  {
    echo mysqli_error($connection);
  }
  else
  {
    $id = mysqli_insert_id($connection);
    echo "Your article is inserted with id: $id";
  }
?>
<br>
<a href="3.php">page 3</a>
