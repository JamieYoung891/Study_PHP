<?php

function print_title() {
  if (isset($_GET['id'])) echo htmlspecialchars($_GET['id']);
  else echo 'Welcome';
}

function print_content() {
  if (isset($_GET['id'])) echo htmlspecialchars(file_get_contents('data/' . $_GET['id']));
  else echo 'Hello!';
}

function print_nav() {
  $list = scandir('data');
  for ($i = 2; $i < count($list); $i++) {
    $item = htmlspecialchars($list[$i]);
    if ($item !== '.' || $item !== '..')
      echo '<li><a href="./?id=' . $item . '">' . $item . '</a></li>';
  }
}