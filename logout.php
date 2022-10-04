<?php
    include_once 'includes/session.php';
    // require_once 'includes/auth.php';
    session_destroy();
        header("Location: index.php");



?>