<?php
require_once('./lib/print.php');
require('./view/top.php');
?>
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
<?php require('./view/bottom.php'); ?>