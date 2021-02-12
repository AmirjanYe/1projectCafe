<h1>SELECT STATEMENTS WITH UPDATE BUTTON</h1>
<?php require_once "db_connection.php" ?>
<br>
<?php
  $query_1 = "SELECT * FROM article;";
  $results = mysqli_query($connection, $query_1);
  //check if exists
  if($results===false)
  {
    echo mysqli_error($connection);
  }
  else
  {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
  }
?>

<ul>
  <?php foreach ($articles as $article): ?>
  <form action="7.php" method="post">
      <h2>Title</h2>
      <input type="text" name="articleTitle" value="<?= $article['title'];?>" size="102">
      <input type="hidden" name="articleId" value="<?= $article['id'];?>" size="102">
      <h3>Content</h3>
      <textarea name="articleContent" rows="20" cols="100">
        <?= $article['content']?>
      </textarea>
      <h3>URL</h3>
      <input type="text" name="articleURL" value="<?= $article['URL']?>" size="102">
      <br><br>
      <h3>Date</h3>
      <input type="date" name="articleDate" value="<?= $article['published_at']?>" size="102">
      <input value="update" type="submit" >
  </form>
  <?php endforeach; ?>
</ul>
