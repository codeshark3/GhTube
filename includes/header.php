<<?php 
require_once("includes/config.php")
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GTube</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/commonActions.js"></script>
</head>
<body>
    <div id="pageContainer">
        <div id="mastHeadContainer">
       <button class="navShowHide">
           <img src="assets/images/icons/menu.png"/>
       </button>
       <a class="logoContainer" href="index.php"><img src="assets/images/icons/VideoTubeLogo.png" title="logo" alt="site-logo"/></a>

       <div class="searchBarContainer">
           <form action="search.php" method="GET">
               <input type="text" class="searchBar" name="term" placeholder="Search...">
                <button class="searchButton"><img src="assets/images/icons/sea
                rch.png"/></button>

           </form>
       </div>
        <div class="rightIcons">
            <a href="upload.php"><img class="upload" src="assets/images/icons/upload.png"/></a>
            <a href="#"><img class="upload" src="assets/images/profilePictures/default.png"/></a>
        </div>
        </div>
        <div id="sideNavContainer" style="display:none;">
        </div> 
        <div id="mainSectionContainer">
            <div id="mainContentContainer">