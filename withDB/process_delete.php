<?php
require('./db/use_mysql.php');

$filtered = array(
  'id' => mysqli_real_escape_string($conn, $_POST['id']),
  'to_delete' => mysqli_real_escape_string($conn, $_POST['to_delete'])
);

if ($filtered['to_delete'] == 'NO') header('Location: ./?id=' . $filtered['id']);
else {
  $sql = "
    DELETE from topic
      WHERE
        id = '{$filtered['id']}'
  ";

  $result = mysqli_query($conn, $sql);
  if ($result === false) {
    echo 'Fail to delete the content. Please contact, site manager!';
    error_log(mysqli_error($conn));
  } else {
    echo 'Succeed to delete the content! <a href="./">Return</a>';
  }
}
