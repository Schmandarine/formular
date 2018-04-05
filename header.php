<?php
session_start();

if (!isset($_SESSION['post-data'])){
  $_SESSION['post-data'][] = "";
}

?>
<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>
  <title>Neuer Titel!</title>
  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  
  <link rel="icon" href="images/favicon.png">
  
</head>

<body>