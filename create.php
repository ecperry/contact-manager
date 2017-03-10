<?php
//modified from Seth Wright's code: https://github.com/asethwright/php-task-app/blob/master/create.php
//this page adds the input fields to the database and assigns it the next highest id from the previous
include 'database.php';

$stmt = $db->prepare("INSERT INTO contacts
(first, last, title, address, city, state, zip, phone, notes)
VALUES
(:first, :last, :title, :address, :city, :state, :zip, :phone, :notes)
");


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

$id = $db->lastInsertId();

 header('Location: edit.php?id=' . $id . '&created=true');

?>
