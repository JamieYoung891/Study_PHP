<?php
require_once('./db/use_mysql.php');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while ($row = mysqli_fetch_array($result)) {
  $list = $list . "<li><a href='./?id={$row['id']}'>{$row['title']}</a></li>";
};

$article = array(
  'title' => 'Welcome',
  'description' => 'Hello, World!',
);

if (isset($_GET['id'])) {
  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>WEB</title>
</head>

<body>
  <header>
    <h1><a href='./'>WEB</a></h1>
  </header>
  <nav>
    <section>
      <ol>
        <?= $list ?>
      </ol>
    </section>
    <section>
      <a href='./create.php'>Create</a>
    </section>
  </nav>
  <main>
    <h2><?= $article['title'] ?></h2>
    <p><?= $article['description'] ?></p>
  </main>
</body>

</html>