<?php
   include 'databaseconn.php';

   session_start();

   session_unset();

   session_destroy();

   header("Location: woman2.php");
?>