<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Ellen, Brage">
    <meta name="description" content="Ellen Brage, graphic designer and web developer based in Sweden.">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:200,300,400,600,700,900|Alegreya:400,400i,500,500i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Passion+One:400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <?php wp_head(); ?>
  </head>

  <?php
  /*code to figure out user's theme choice, uncomment to use this solution*/

  // if (isset($_COOKIE['theme'])) {
  //   $theme = $_COOKIE['theme'];
  // } else {
  //   $theme = "standard";
  // }

  ?>

  <!-- <body id='<?php //echo $theme ?>'> -->
  <body>

    <?php require("partials/sitehead.php"); ?>
