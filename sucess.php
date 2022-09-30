
<?php

$title = 'Success';
require_once 'includes/header.php';
require_once 'db/conn.php';


if(isset($_POST['submit'])){
    //
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $specialty = $_POST['specialty'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    // call function to track if success or not
    $isSuccess = $crud->insertAttendee($firstname, $lastname, $dob, $specialty, $email, $contact);

    if ($isSuccess) {
        # code...
        echo "<h1 class='text-center text-success'>You successfully registered for the conference</h1>";
    } else{
        echo "<h1 class='text-center text-danger'>Not Successful, something is wrong!</h1>";
        
    }

}

?>

<?php require_once 'includes/footer.php'; ?>
