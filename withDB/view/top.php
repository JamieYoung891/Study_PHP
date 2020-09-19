<?php
require_once('./db/use_mysql.php');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

$list = '';
while ($row = mysqli_fetch_array($result)) {
  $escaped_title = htmlspecialchars($row['title']);
  $list = $list . "<li><a href='./?id={$row['id']}'>{$escaped_title}</a></li>";
};

$nav = array(
  'create_link' => "<a href='./create.php'>Create</a>",
  'update_link' => "",
  'delete_link' => ""
);

$article = array(
  'title' => 'Welcome',
  'description' => 'Hello, World!',
);

if (isset($_GET['id'])) {
  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = htmlspecialchars($row['title']);
  $article['description'] = htmlspecialchars($row['description']);

  $nav['update_link'] = "<a href='./update.php?id={$_GET['id']}'>Update</a>";
  $nav['delete_link'] = "<a href='./delete.php?id={$_GET['id']}'>Delete</a>";
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
      <?= $nav['create_link'] ?>
      <?= $nav['update_link'] ?>
      <?= $nav['delete_link'] ?>
    </section>
  </nav>
  <main>