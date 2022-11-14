<?php
    require_once('../private/initialize.php');
    // include_once (WWW_ROOT .'/session.php');
    // require_once 'includes/auth.php';
    require_once (INCLUDE_PATH . '/header.php');
    require_once (PRIVATE_PATH . '/db/conn.php');
    session_destroy();
        header("Location: login.php");



?>