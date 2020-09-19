<?php
  require('./db/use_mysql.php');

  $filtered = array (
    'title' => mysqli_real_escape_string($conn, $_POST['title']),
    'description'=> mysqli_real_escape_string($conn, $_POST['description'])
  );

  $sql="
    INSERT INTO topic (
      title, description, created
    ) VALUE (
      '{$filtered['title']}',
      '{$filtered['description']}',
      NOW()
    )
  ";

  $result = mysqli_query($conn, $sql);
  if($result===false){
    echo 'Fail to create new content. Please contact, site manager!';
    error_log(mysqli_error($conn));
  } else {
    echo 'Succeed to create new content! <a href="./">Return</a>';
  }
