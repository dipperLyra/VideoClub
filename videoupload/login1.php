<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: loginhome.php");
}
?>
<html>
<header>
    <link rel="shortcut icon" href="./image/titleImg.ico" />
    <title> upload video </title>
</header>
<script src="b.js"></script>
<link rel="stylesheet" type="text/css" href="my.css">
<body>
<!-- this is the left menu containing the dropdown navigation!-->
<div class="headerall">
    <div class="topleft" id="myTopleft">
        <a href="my.html" class="main">metavid</a>
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
        <input type="text" placeholder="search videos, people and more">
        <a href="join.php" class="green">Join</a>
    </div>
<!-- this the login form-->
<div class="login">
    <center>
    <form name="myform" class="log" action="" method="POST" onsubmit="return valid()">
        <span><?php echo $error;?></span><br><br>
        <input class="log2" type="email" placeholder="Email" name="email"><br><br>
        <input class="log2" type="password" placeholder="Password" name="pass"><br>
        <br>
        <br>
        <input type="submit" value="Login">
    </form>
    </center>
</div>
</div>
</body>
</html>

