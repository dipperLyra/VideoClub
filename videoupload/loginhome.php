<?php
session_start();
include "upload.php";
//echo "welcome back".$_SESSION['login_user'];
?>
<html>
<header>
    <link rel="shortcut icon" href="./image/titleImg.ico" />
    <title> upload video </title>
</header>
<link rel="stylesheet" type="text/css" href="my.css">
<script src="upload.js"></script>
<body>
<!-- this is the left menu containing the dropdown navigation!-->
<div class="headerlog">
    <div class="topleft" id="myTopleft">
        <a href="#" class="main">metavid</a>
        <span class="dropdown">
                <button class="sell">Sell &or;</button>
                <div class="left">
                    <a href="#">sell your videos</a>
                    <a href="#"> lunch subscription service</a>
                </div>
            </span>
        <span class="dropdown">
                <button class="sell">Watch &or;</button>
               <div class="midc">
                <a href="#">staff picks</a>
                <a href="#">on demand</a>
                <a href="#">Explore</a>
               </div>
            </span>
        <span class="dropdown">
              <button class="sell">Learn &or;</button>
                <div class="rightc">
                <a href="#">blog</a>
                <a href="#">video school</a>
                <a href="#">Help center</a>
               </div>
            </span>
    </div>
    <!-- this the right part of the menu!-->
    <div class="topright" id="myTopright">
        <input type="text" placeholder="search web, people and more">
        <a href="watchhome.php" id="tan">watch</a>
        <a href="logout.php" id="tan">Logout</a>
    </div>
    <!-- this the middle text in the header with a button!-->
    <div class="headerCenter">
        <center>
            <h1><?php echo "WELCOME BACK ".$_SESSION['login_user'];?></h1>
            <span id="head">The high-quality home to make, share and watch movies</span>
        </center>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>
<!-- this is the middle page-->
<h2> <form class="upload" action="" enctype="multipart/form-data" method="POST" name="myform" onsubmit="return valid()">
        <span id="headupload"> UPLOAD YOUR VIDEO HERE</span><br><br>
        <input class="log2" type="text" placeholder="Description" name="desc">
        <input class="log2" type="file" name="vide">
        <br>
        <input id="be" type="submit" class="log2" value="Upload" name="upload"><br>
    <?php echo $error;?><?php echo $sucess;?>
    </form>
</h2>
<div class="mid">
            <span class="leftmid">
               <video width="500" height="290" controls>
                   <source src="movie.mp4" type="video/mp4">
                   </video>
            </span>
    <span class="rightmid">
                Host videos in the<br>
                highest quality possible<br>
                <br>
                <span class="bold">
                Start uploading, and enjoy 4K Ultra HD<br>
                quality, no ads before, during, or after your<br>
                videos, and a central place to manage<br>
                all your videos.
                </span><br>
                <br>
                <a href="login1.php" id="bu"> find a plan </a>
            </span>
    <br>
    <br><br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br><br>
    <br>

</div>





</body>
</html>

