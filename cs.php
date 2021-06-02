<?php
session_start();

 unset($_SESSION['correo']);
 header('location:index.php');

?>