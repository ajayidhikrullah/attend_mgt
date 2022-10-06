
<?php

$title = 'Success';
require_once 'includes/header.php';
require_once 'includes/auth.php';
require_once 'db/conn.php';
require_once 'sendEmail.php';


if(isset($_POST['submit'])){
    //
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $specialty = $_POST['specialty'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = "prof_uploads/";
    $dest = "$target_dir$contact.$ext";
    move_uploaded_file($orig_file,$dest);

    // call function to track if success or not
    $isSuccess = $crud->insertAttendee($firstname, $lastname, $dob, $specialty, $email, $contact, $dest);
    $specialtyName = $crud->getSpecialtyById($specialty);

    if ($isSuccess) {
        SendEmail::sendMail($email, 'Welcome to IT conference 2022, You have sucesssfully registered'); 
        include 'includes/succesmessage.php';
        } else{
            include 'includes/errormessage.php';
        
    }

}

?>

<?php require_once 'includes/footer.php'; ?>
