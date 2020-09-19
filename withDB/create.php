<?php require('./view/top.php') ?>
<form action='process_create.php' method='POST'>
  <p><input type='text' name='title' placeholder="Title" /></p>
  <p><textarea name='description' placeholder='Description'></textarea></p>
  <p><input type='submit' value="Submit" /></p>
</form>
<?php require('./view/bottom.php') ?>