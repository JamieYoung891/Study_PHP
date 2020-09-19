<?php
  require('./db/use_mysql.php');

  $filtered = array (
    'id' => mysqli_real_escape_string($conn, $_POST['id']),
    'title' => mysqli_real_escape_string($conn, $_POST['title']),
    'description'=> mysqli_real_escape_string($conn, $_POST['description'])
  );

  $sql="
    UPDATE topic
      SET
        title = '{$filtered['title']}',
        description = '{$filtered['description']}'
      WHERE
        id = '{$filtered['id']}'
  ";

  $result = mysqli_query($conn, $sql);
  if($result===false){
    echo 'Fail to update the content. Please contact, site manager!';
    error_log(mysqli_error($conn));
  } else {
    echo 'Succeed to update the content! <a href="./">Return</a>';
  }
