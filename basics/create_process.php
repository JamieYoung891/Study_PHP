<?php
file_put_contents('./data/'.basename($_POST['title']), $_POST['content']);
header('Location: ./?id='.basename($_POST['title']));
?>