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
        <li>HTML</li>
      </ol>
    </section>
    <section>
      <a href='./create.php'>Create</a>
    </section>
  </nav>
  <main>
    <form action='process_create.php' method='POST'>
      <p><input type='text' name='title' placeholder="Title" /></p>
      <p><textarea name='description' placeholder='Description'></textarea></p>
      <p><input type='submit' value="Submit" /></p>
    </form>
  </main>
</body>

</html>