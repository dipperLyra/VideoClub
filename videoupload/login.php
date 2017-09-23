<?php
    session_start();
    //if (isset($_POST['submit'])){
        $error=$email=$pass="";
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $email=stripslashes($email);
        $pass=stripslashes($pass);
       // $email=htmlspecialchars($email);
        //$pass=htmlspecialchars($pass);
        $email=htmlspecialchars($email, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $pass=htmlspecialchars($pass, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        if (empty($email) || empty($pass)){
           $error= "";
        }
        else{

            /*$email=stipslashes($email);
            $email=mysql_real_escape_string($email);
            $pass=stipslashes($pass);
            $pass=mysql_real_escape_string($pass);*/
            //echo $email.$pass;

            //connection with database

            $servername="localhost";
            $username="franc";
            $password="come1234";
            $dbname="videoupload";
            $connection=new mysqli($servername, $username,$password,$dbname);
            if ($connection->connect_error)
            {
                die("error in connection".$connection->connect_error);

            }//echo "succesfully connected";

            $result=$connection->query("SELECT * from Persons WHERE Email='$email' AND password='$pass'");
            $row=$result->fetch_assoc();
            //echo $row['Firstname'];
            $user=$row['Firstname'];


            if (isset($user)){
                $_SESSION['login_user']=$user;
                header("location:loginhome.php");
                //echo "login successfull";
            }else {$error= "incorrect username or password";}



        //}
    }

?>