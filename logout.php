<?php
  session_start();

 echo "Logout Successfully ";
 
 session_destroy();
 unset($_SESSION['username']);   // function that Destroys Session 
  header("Location: index.php");
?> 