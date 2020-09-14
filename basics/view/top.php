<?php require_once('./lib/print.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title><?php print_title(); ?></title>
</head>

<body>
  <header>
    <h1><a href="./">WEB</a></h1>
  </header>
  <nav>
    <ol><?php print_nav(); ?></ol>
  </nav>
  <main>
    <section>
      <a href="./create.php">Create</a>
      <?php if (isset($_GET['id'])) { ?>
        <a href="./update.php?id=<?= $_GET['id'] ?>">Update</a>
        <a href="./delete.php?id=<?= $_GET['id'] ?>">Delete</a>
      <?php } ?>
    </section>