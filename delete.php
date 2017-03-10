<?php
//modified from Seth Wright's code: https://github.com/asethwright/php-task-app/blob/master/delete.php
//this page is removing the values associated with a particular id and removing that id from visibility
  include 'database.php';
  $stmt = $db->prepare('DELETE from contacts WHERE id = :id');
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));
  header('Location: http://localhost:8080/index.php?deleted=true');
?>
