<?php
include 'database.php';
$stmt = $db->prepare('UPDATE contacts SET title = :title, description = :description, priority = :priority, completed = :completed WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':first' => $_POST['first'],
  ':last' => $_POST['last'],
  ':title' => $_POST['title'],
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zip' => $_POST['zip'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes']
));
header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);
