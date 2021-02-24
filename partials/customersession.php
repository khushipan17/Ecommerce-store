<?php 
session_start();

if(empty($_SESSION['username'] AND $_SESSION['password'])){

    $_SESSION['message'] = $message ;
    $message = 'Please Log in First';
    echo "<script> window.location.href = 'customerlogin.php'; </script>" ;
    

}


?>