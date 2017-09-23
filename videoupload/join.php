<html>
<head>
    <link rel="shortcut icon" href="./image/titleImg.ico" />
    <title> upload video </title>
</head>
<link rel="stylesheet" type="text/css" href="my.css">
<script src="go.js"></script>
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
        <a href="login1.php" id="tan">Login</a>
    </div>
    <div class="login1">
        <span id="logtext">Create a new account with us<br><br>It is free and will always be.</span>
        <!-- this the login form-->
                <form   name="myform" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return valid()">
                    <input class="log2" type="text" name="firstName" placeholder="firstName"> <input class="log2" type="text" name="lastName" placeholder="last name"><br>
                    <br>
                    <input class="log2" type="email" name="Email" placeholder="Email"> <br>
                    <br>
                    <input class="log2" type="password" name="password" placeholder="password">
                    <input class="log2" type="password" name="password2" placeholder="re enter password"><br><br>
                    <input required type="radio" name="gender" value="male">male
                    <input required type="radio" name="gender" value="female">female
                    <br><br>
                    <input class="log2" type="submit" name="submit" value="create account">
                </form>
        <p id="jointext">By clicking Create Account, you agree to our Terms and confirm<br>
            that you have read our Data Policy, including our Cookie Use<br>
            Policy. You may receive SMS message notifications from<br>
            Metavid and can opt out at any time.</p>
    </div>
</div>

</body>
</html>
<?php
$firstName=$lastName=$Email=$SameEmail=$password="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        $Email = test_input($_POST["Email"]);
        $pasword = test_input($_POST["password"]);
        $gender = $_POST["gender"];
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $servername = "localhost";
    $username = "franc";
    $password = "come1234";
    $dbname = "videoupload";
    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error) {
        die("error in connection" . $connection->connect_error);

    }
//echo "succesfully conected";

    $sql = "INSERT INTO Persons(Firstname,Lastname,Email,password,Gender)
VALUES('$firstName','$lastName','$Email','$pasword','$gender')";

    if ($connection->query($sql) === TRUE) {
        echo "";
    } else {
        echo "submission failed" . $connection->error;
    }
    $connection->close();
?>
