
<?php

$title = 'Success';
require_once 'includes/header.php';
// require_once 'includes/auth.php';
require_once 'db/conn.php';
require_once 'sendEmail.php';


if(isset($_POST['submit'])){
    

    
    //===================================
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

    $validation = $validate->backEndValidation($firstname, $email);
    // var_dump($validation);exit;
    $isSuccess = $crud->insertAttendee($firstname, $lastname, $dob, $specialty, $email, $contact, $dest);
    $specialtyName = $crud->getSpecialtyById($specialty);
    
    if ($isSuccess == true) {
        move_uploaded_file($orig_file,$dest);
        // SendEmail::SendMail($email, 'TESTING', 'Welcome to IT conference 2022, You have sucesssfully registered'); 
        include 'includes/succesmessage.php';
        // header('Location: view.php');
    } else{
            include 'includes/errormessage.php';
        
    }
}

?>

    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $_POST['firstname'] .' ' . $_POST['lastname'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$specialtyName['name'];?></h6>
                        <p class="card-text"></p>
                        <h6 class="card-subtitle mb-2 text-muted"><?=$_POST['dob'];?></h6>
                        <a href="#" class="card-link"><?=$_POST['email']?></a>
                        <a href="#" class="card-link"><?= $_POST['phone'];?></a>
                    </div>
                </div>

<?php require_once 'includes/footer.php'; ?>
