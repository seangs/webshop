<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="sotheary seang">

  <title>SeangsJeweleryshop</title>
  <!--for links -->



  <link rel="stylesheet" href="assets/about.css" type="text/css">
  <link rel="stylesheet" href="assets/contact.css" type="text/css" >
  <link rel="stylesheet" href="assets/slidefix.css" type="text/css" >
<!--
<link rel="stylesheet" href="assets/woman-watch.css" type="text/css">
<link rel="stylesheet" href="assets/woman-anhäng.css" type="text/css" >
<link rel="stylesheet" href="assets/male-watch.css" type="text/css">
<link rel="stylesheet" href="assets/male-watch-detail.css" type="text/css">
   -->
  <link rel="stylesheet" href="assets\loing.css" type="text/css" >
  <link rel="stylesheet" href="assets\register.css" type="text/css" >

  <!-- For Resposive only , must be with "viewpoint", it help for uploadt in hosting-->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="assets\responsive.css" type="text/css">

  <link rel="stylesheet" href="assets\style.css" type="text/css">
  <script type="text/javascript" src="jquery/slide.js"></script>

</head>

<body onload="slideshow()">
  <!-- forhead -->
  <header>
    <div class="main-head">
      <nav class="firsthead">
        <ul class="language">
          <li><a href="index.php?lang=en"><img src="images\en.png" alt="English"/></a></li>
          <li><a href="index.php?lang=de"><img src="images\gm.png" alt="Deutch"/></a></li>
        </ul>
        <div class="login">
          <a href="content\login.php" traget="_blank">
            <img src="images\login.png" alt="#"/></a>
          <a href="content\login.php" traget="_blank"><h5>Login</h5></a>
        </div>
        <div id="logo">
          <a href="index.php"><img src="images\logo.jpg"alt="#"></a>
        </div>
      </nav>
    </div>
    <?php
     $language = isset($_GET['lang']) ? $_GET['lang'] : 'en'; // for the first is alway English


    require_once "translate/$language.php";

?>
    <!--for Menu-bar-->
    <nav class="main-menu">
      <div class="menu">
        <ul class="menubar" id="myres-menu">
          <li><a href="index.php"><?php echo $lang['SMENU1']; ?></a></li>
          <li><a href="#"><?php echo $lang['SMENU2']; ?></a>
            <!--for sub-->
            <ul class="submenu">
              <li><a href="woman-watch.php"><?php echo $lang['SMENU3']; ?></a></li>
              <li><a href="w-anhange.php"><?php echo $lang['SMENU4']; ?></a></li>
            </ul>
          </li>
          <li><a href="#"><?php echo $lang['SMENU5']; ?></a>
            <ul class="submenu">
              <li><a href="male.php"><?php echo $lang['SMENU6']; ?></a></li>

            </ul>
          </li>
          <li><a href="content/about.php"><?php echo $lang['SMENU7']; ?></a></li>
          <li><a href="content/contact.php"><?php echo $lang['SMENU8']; ?></a></li>
        <!--  /* für anrufen die Menu zeigen */-->
          <li id="icon"><a href="javascript:void(0);" style="font-size:15px; display:none;" onclick="myFunction()">&#9776;></a></li>
        </ul>
      </div>
    </nav>
  </header>
