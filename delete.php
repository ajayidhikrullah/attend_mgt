<?php
require_once 'db/conn.php';

    if (!$_GET['id']) {
        # code...
        echo 'error';
    } else{
        //get id values
        $id = $_GET['id'];
        //call delete function
        $result = $crud->deleteAttendee($id);
        if ($result) {
            # code...
            header("Location: viewrecords.php");
        } else{
            echo 'delete error';
        }

        // redirect to the list agai
    }


?>