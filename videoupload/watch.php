<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 9/20/17
 * Time: 12:34 PM
 */

    //if (isset($_POST['submit'])){
        $error=$search="";
        $search=$_POST['search'];
        $search=stripslashes($search);
        $search=htmlspecialchars($search, ENT_QUOTES | ENT_HTML5, 'UTF-8');

            $servername="localhost";
            $username="franc";
            $password="come1234";
            $dbname="videoupload";
            $connection=new mysqli($servername, $username,$password,$dbname);
            if ($connection->connect_error)
            {
                die("error in connection".$connection->connect_error);

            }//echo "succesfully connected";

            $result=$connection->query("SELECT * from upload WHERE Video LIKE '%$search%'");

            if ($result->num_rows>0){
            while ($row=$result->fetch_assoc()){
                $play=$row['Video'];

                //echo '<br /> name: '. $row['Video']. ' - Description: '. $row['Description'];

                echo " <video width='320' controls><source src='../$play'>Your browser does
                       not support the video tag.</video>" .$play;
                //$des=$row['Description'];
                //$videpath="../".$row['Video'];
            }
        }


            /*
            //echo $row['Firstname'];


            echo $des;
            if (isset($vid)){

            }*/else {$error= "video does not exist";}



            //}


?>
