
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./image/titleImg.ico" />
    <title>upload video</title>
</head>
<link rel="stylesheet" type="text/css" href="my.css">
<script></script>
<body class="headerlog">
<!-- this is the left menu containing the dropdown navigation!-->
<div>
    <div class="topleft" id="myTopleft">
        <a href="loginhome.php" class="main">metavid</a>
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
        <a href="logout.php" id="tan">Logout</a>
    </div>
    <!-- this the middle text in the header with a button!-->
    <div class="headerCenterw">
        <center>
            <form action="" method="POST">
                 <input class="search" type="search" placeholder="search for videos" name="search">
                <button class="sell" type="submit"><img src="./image/search.png" width="22px" height="19px">search </button>
            </form>
            <?php echo $error;?>
        </center>
    </div>
    <br>
    <br>
    <br>
</div>
<div>
    <span class="leftmid">
        <?php
        include "watch.php";
        ?>
    </span>
</div>

</body>
</html>
