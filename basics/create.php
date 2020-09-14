<?php
require_once('./lib/print.php');
require('./view/top.php');
?>
<section>
  <form action='./create_process.php' method='post'>
    <h2><input type='text' name='title' placeholder='Title' /></h2>
    <p><textarea name='content' placeholder="Content"></textarea></p>
    <input type="submit" />
  </form>
</section>
<?php require('./view/bottom.php'); ?>