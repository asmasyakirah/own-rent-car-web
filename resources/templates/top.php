<?php

// Create Session
session_start();
//echo session_id();

error_reporting(E_ALL ^ E_NOTICE);

// Call config and functions settings
require('resources/config.php');
require('resources/functions.php');

?>

<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
  <head>

    <!-- Page Favicon -->
    <link rel="shortcut icon" href="resources/img/orange.ico" type="image/x-icon"/>

    <!-- Page Title -->
    <title>
      <?php 
      echo $config['project']; 
      if ($page['title'] != "") 
      {
        echo " | " . $page['title'];
      }
      ?>      
    </title>

    <!-- HTML basics -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap settings -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="resources/css/ownrentcar.css" rel="stylesheet">
    <!-- Fa Icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Pacifico Icon -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>