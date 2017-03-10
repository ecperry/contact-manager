<?php
//modified from Seth Wright's code: https://github.com/asethwright/php-task-app/blob/master/database.php
//this page directs the app to the corresponding contact database in MySql 
  error_reporting(E_ALL);
  if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
  }
  $db = new PDO('mysql:host=localhost;dbname=app;charset=utf8mb4', 'root', 'root');
