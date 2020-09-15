<?php
  require('./db/use_mysql.php');

  $sql="
    INSERT INTO topic (
      title, description, created
    ) VALUE (
      '{$_POST['title']}',
      '{$_POST['description']}',
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
