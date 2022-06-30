<?php
   session_start();
   unset($_SESSION["valid"]);
   
   echo '<script>alert("Successfully logged out")</script>';
   header('Refresh: 2; URL = admin/admin-login.php');
?>