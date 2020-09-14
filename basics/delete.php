<?php
require_once('./lib/print.php');
require('./view/top.php');
?>
<section>
  <h2><?= print_title() ?></h2>
  <p><?= print_content() ?></p>
  <form action='./delete_process.php' method='post'>
    <input type='hidden' name='title' value=<?= $_GET['id'] ?> />
    <p>Do you really want to <b>delete</b> this content? <input type="submit" name='toDelete' value="Yes" /> <input type="submit" name='toDelete' value="No" /></p>
  </form>
</section>
<?php require('./view/bottom.php'); ?>