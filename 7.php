<?php require_once "db_connection.php" ?>
<br>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $content = mysqli_real_escape_string($connection, $_POST['articleContent']);
  //echo "<pre>".$content."</pre>";
  $query_3 = "UPDATE article SET
              title = '".$_POST['articleTitle']."',
              content = '".$content."',
              URL = '".$_POST['articleURL']."',
              published_at = '".$_POST['articleDate']."'
              WHERE id = '".$_POST['articleId']."' ";
  $results = mysqli_query($connection, $query_3);
}
  //check if exists
  if($results===false)
  {
    echo mysqli_error($connection);
  }
  else
  {
    $id = mysqli_insert_id($connection);
    echo "Your article with $id has been changed.";
  }
?>
<br>
<a href="8.php">page 8</a>
