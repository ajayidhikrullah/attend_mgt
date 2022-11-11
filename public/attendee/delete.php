<?php
require_once 'includes/auth.php';
require_once 'db/conn.php';

    if (!$_GET['id']) {
        include 'includes/erroemessage.php';
        header("Location: viewrecords.php");
    } else{
        //get id values
        $id = $_GET['id'];
        //call delete function
        $result = $crud->deleteAttendee($id);
        if ($result) {
            # code...
            header("Location: viewrecords.php");
        } else{
            include 'includes/errormessage.php';
        }

        // redirect to the list agai
    }


?>