<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>

<body>
    <h1>WEB</h1>
    <ol>
        <li><a href="?id=HTML">HTML</a></li>
        <li><a href="?id=CSS">CSS</a></li>
        <li><a href="?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
        <?php
        echo $_GET['id'];
        ?>
    </h2>
    <p>
        <?php
        echo file_get_contents('data/' . $_GET['id']);
        ?>
    </p>
</body>

</html>