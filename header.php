<?php
//modified from Seth Wright's code: https://github.com/asethwright/php-task-app/blob/master/header.php
//this page acts as a header for all pages within the app and contains the navbar
  include 'database.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo Application</title>
    <!-- charset -->
    <meta charset="utf-8">

    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Vidaloka" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php"><span class ="w">w</span><span class ="slash">| </span><span class ="it">it</span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/index.php" class ="all">All Contacts</a></li>
              <li class = "contact"><a href="/new.php">New Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="row">
        <div class="col-lg-12 float">
