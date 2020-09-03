<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>

<body>
    <h1><a href="./">WEB</a></h1>
    <ol>
        <li><a href="./?id=HTML">HTML</a></li>
        <li><a href="./?id=CSS">CSS</a></li>
        <li><a href="./?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
        <?php
        if (isset($_GET['id'])) echo $_GET['id'];
        else echo 'Welcome';
        ?>
    </h2>
    <p>
        <?php
        if (isset($_GET['id'])) echo file_get_contents('data/' . $_GET['id']);
        else echo 'Hello!';
        ?>
    </p>
</body>

</html>