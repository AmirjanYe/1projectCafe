<h1>SELECT STATEMENTS</h1>
<?php require_once "db_connection.php" ?>
<br>

<?php
  $query_1 = "SELECT * FROM article;";
  $results = mysqli_query($connection, $query_1);
  
  if($results===false)
  {
    echo mysql_error($connection);
  }
  else
  {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
   
  }
?>

<ul>
  <?php foreach ($articles as $article): ?>
    <article>
      <h2><?= $article['title']?></h2>
      <pre><?= $article['content']?></pre>
      <a href="<?= $article['URL']?>"><?= $article['URL']?></a>
      <br><br>

      <p><?php echo date("d.m.Y", strtotime($article['published_at'])); ?></p>

      <br><br>
    </article>
  <?php endforeach; ?>
</ul>
