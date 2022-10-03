
<?php

require_once 'db/conn.php';


if(isset($_POST['submit'])){
    //
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $spec = $_POST['specialty'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];

    $result = $crud->editAttendee($id, $fname, $lname, $dob, $spec, $email, $contact);
        if ($result) {
        # code...
            header('Location: viewrecords.php');
        }
        else{
            include 'includes/errormessage.php';
        }
    } else{
        include 'includes/errormessage.php';
    }

?>

<?php require_once 'includes/footer.php'; ?>
