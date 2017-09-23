<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 9/11/17
 * Time: 9:03 PM
 */

session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: login1.php"); // Redirecting To Home Page
}
?>
