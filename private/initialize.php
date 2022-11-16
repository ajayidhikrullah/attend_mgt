<?php

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname("PRIVATE_PATH"));
    define("PUBLIC_PATH", PROJECT_PATH.'/public');
    define("INCLUDE_PATH", PRIVATE_PATH.'/includes');
    include_once (PRIVATE_PATH.'/includes/functions.php');
    /**
     * assign root URl as PHP constant
     */

     $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
     $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);

     define("WWW_ROOT",$doc_root);






?>