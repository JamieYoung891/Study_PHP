<?php
require_once('./db/use_mysql.php');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while ($row = mysqli_fetch_array($result)) {
  $list = $list . "<li><a href='./?id={$row['id']}'>{$row['title']}</a></li>";
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>WEB</title>
</head>

<body>
  <header>
    <h1>WEB</h1>
  </header>
  <nav>
    <section>
      <ol>
        <?= $list ?>
      </ol>
    </section>
    <section>
      <a href='./create.php'>Create</a>
    </section>
  </nav>
  <main>
    <h2>Welcome</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eligendi reprehenderit labore laborum. Exercitationem distinctio quae iusto labore ad tempore fugit repellat velit odio deleniti omnis quis sunt qui cumque tempora, soluta mollitia repellendus perferendis sit. Obcaecati voluptate corporis explicabo dolore cum commodi accusantium nobis eaque. Neque impedit ullam delectus perspiciatis quo sit deserunt esse voluptate itaque, qui eveniet beatae ad amet asperiores voluptas ab molestias voluptatibus, consequuntur nemo hic laboriosam velit quaerat! Vel asperiores alias minus esse enim? Aspernatur molestias dicta perspiciatis consequatur, hic ea quasi doloribus totam nemo, rerum quam quia obcaecati necessitatibus? Error fugiat dolorem itaque inventore!</p>
  </main>
</body>

</html>