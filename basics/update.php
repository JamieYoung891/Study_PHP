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
      <form action='./update_process.php' method='post'>
        <input type='hidden' name='title_old' value=<?= $_GET['id'] ?> />
        <h2>
          <input type='text' name='title_new' placeholder='Title' value='<?= print_title() ?>' />
        </h2>
        <p>
          <textarea name='content_new' placeholder="Content"><?= print_content() ?></textarea>
        </p>
        <input type="submit" />
      </form>
    </section>
  </main>
</body>

</html>