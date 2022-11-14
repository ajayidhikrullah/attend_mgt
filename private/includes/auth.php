<?php
    if (!isset($_SESSION['userId'])) {
        header('Location:'.WWW_ROOT.'/login.php');
    }



?>