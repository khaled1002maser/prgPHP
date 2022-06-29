<?php
if (isset($_GET['Id'])) {
    session_start();
   session_destroy();
   header("Location:login.php");
}