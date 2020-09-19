<?php require('./view/top.php') ?>
<article>
  <h2><?= $article['title'] ?></h2>
  <p><?= $article['description'] ?></p>
</article>
<form action='process_delete.php' method='POST'>
  <b>Do you really want to delete this article? </b>
  <input type='hidden' name='id' value='<?= $_GET['id'] ?>' />
  <input type='submit' name='to_delete' value='YES' />
  <input type='submit' name='to_delete' value='NO' />
</form>
<?php require('./view/bottom.php') ?>