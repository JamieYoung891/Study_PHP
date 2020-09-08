<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>

<body>
    <h1><a href="./">WEB</a></h1>
    <ol>
        <?php
        $list = scandir('data');
        for ($i = 0; $i < count($list); $i++) {
            $key = $list[$i];
            if ($key === '.' || $key === '..') continue;
            else
        ?>
            <li><a href="./?id=<?= $key ?>"><?= $key ?></a></li>
        <?php
        }
        ?>
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