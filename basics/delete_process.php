<?php
    if ($_POST['toDelete'] == 'Yes') {
        unlink('./data/' . $_POST['title']);
        header('Location: ./');
    } else {
        header('Location: ./?id='.$_POST['title']);
    }
?>