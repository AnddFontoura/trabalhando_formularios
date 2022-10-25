<?php
    include_once('includes/header.php'); 

    $key = $_GET['key'];

    unset($_SESSION['employee'][$key]);

    include_once('list.php');
    
    include_once('includes/footer.php'); 
?>