<?php
    if ($_POST['toDelete'] == 'Yes') {
        unlink('./data/' . basename($_POST['title']));
        header('Location: ./');
    } else {
        header('Location: ./?id='.basename($_POST['title']));
    }
?>