<?php require('./view/top.php') ?>
<form action='process_update.php' method='POST'>
  <input type='hidden' name='id' value="<?= $_GET['id'] ?>" />
  <p><input type='text' name='title' placeholder="Title" value="<?= $article['title'] ?>" /></p>
  <p><textarea name='description' placeholder='Description'><?= $article['description'] ?></textarea></p>
  <p><input type='submit' value="Submit" /></p>
</form>
<?php require('./view/bottom.php') ?>