<?php
require_once('./lib/print.php');
require('./view/top.php');
?>
<section>
  <h2><?php print_title(); ?></h2>
  <p><?php print_content(); ?></p>
</section>
<?php require('./view/bottom.php'); ?>