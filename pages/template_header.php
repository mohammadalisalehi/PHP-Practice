<!DOCTYPE html>
<html>
<head>
  <meta name="name" content="content">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>14_practice</title>
  <link rel="stylesheet" type="text/css" href="http://static.dev/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="http://static.dev/css/ermile.css">
  <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $DIRECTION; ?>">
<header>
  <h1><?php
    $app = get_appdetail("desc");
    echo $app["desc"];
    ?></h1>
  <!-- <i class="fa fa-home"></i> -->
  <a href="?lang=fa">فارسی</a>
  <a href="?name=about">about</a>
  <a href="http://practice.dev/">home</a>
  <a href="?lang=en">English</a>
</header>
<div class="row auto">
