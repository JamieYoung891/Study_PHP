<?php

function print_title() {
  if (isset($_GET['id'])) echo $_GET['id'];
  else echo 'Welcome';
}

function print_content() {
  if (isset($_GET['id'])) echo file_get_contents('data/' . $_GET['id']);
  else echo 'Hello!';
}

function print_nav() {
  $list = scandir('data');
  for ($i = 2; $i < count($list); $i++) {
    $item = $list[$i];
    if ($item !== '.' || $item !== '..')
      echo '<li><a href="./?id=' . $item . '">' . $item . '</a></li>';
  }
}

?>

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
    </section>
    <section>
      <form action='./delete_process.php' method='post'>
        <input type='hidden' name='title' value=<?= $_GET['id'] ?> />
        <h2><?= print_title() ?></h2>
        <p><?= print_content() ?></p>
        <p>Do you really want to <b>delete</b> this content? <input type="submit" name='toDelete' value="Yes" /> <input type="submit" name='toDelete' value="No" /></p>
      </form>
    </section>
  </main>
</body>

</html>