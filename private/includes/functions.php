<?php
    function Url_for($script_path){
        /**
         * add leading / if not present
         * 
         */

         if ($script_path[0] != '/') {
            $script_path = '/' . $script_path;
         }
         return WWW_ROOT.$script_path;
    }


?>