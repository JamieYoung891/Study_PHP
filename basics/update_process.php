<?php
    $url = './data/';
    $new_title = $_POST['title_new'];
    rename($url.$_POST['title_old'], $url.$new_title);

    file_put_contents($url.$new_title, $_POST['content_new']);

    header('Location: ./?id='.$new_title);
?>