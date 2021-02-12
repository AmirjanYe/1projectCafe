<h1>SELECT STATEMENTS</h1>
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
    var_dump($articles);
  }
?>

<ul>
  <?php foreach ($articles as $article): ?>
    <article>
      <h2><?= $article['title']?></h2>
      <p><?= $article['content']?></p>
      <a href="<?= $article['URL']?>"><?= $article['URL']?></a>
      <br><br>
      <p><?= $article['published_at']?></p>
      <br><br>
    </article>
  <?php endforeach; ?>
</ul>

<!--
DELETE FROM `article` WHERE CHAR_LENGTH(`URL`) < 1

INSERT INTO `article`(`title`, `content`, `published_at`, `URL`)
VALUES
(
    'Mighty CPU rival to Intel and AMD set to shake up the market',

    'The announcement of Amazon’s Graviton2 may well have made AMD and Intel a little nervous - Amazon is, after all, a customer of both. Now, the two companies 		have even greater reason to be worried. Parisian company SiPearl recently announced it had signed a major agreement with semiconductor giant ARM. The 		French firm will use ARM IP (Zeus Neoverse CPU) to develop a new set of CPUs: Rhea, Chronos and another unnamed model.
    The company is backed by the European Commission as part of the European Processor Initiative (EPI) project, which aims to design a high performance, low 		power microprocessor for Europe’s first exascale supercomputer. Here''s our list of the best dedicated server hosting providers of 2020
    Check out our list of the best workstations on the market We''ve built a list of the best mobile workstations available
    Three generations of processors are expected to be delivered in four years, which is a rather ambitious timeline. SiPearl will also be heavily dependent on 	technology from two other French companies: Kalray and Menta.',

    '2020-4-27',

    'https://www.techradar.com/news/mighty-and-surprising-cpu-rival-to-intel-and-amd-to-come-next-year'
)
-->
