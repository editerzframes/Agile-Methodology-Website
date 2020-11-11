<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: http://localhost/agile/mainpage.php/"); // Redirecting To Home Page
}
?>