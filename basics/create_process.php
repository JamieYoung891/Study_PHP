<?php
file_put_contents('./data/'.$_POST['title'], $_POST['content']);
header('Location: ./?id='.$_POST['title']);
?>