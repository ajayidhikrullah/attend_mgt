
<?php

$title = 'Success';
require_once 'includes/header.php';
require_once 'includes/auth.php';
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
    move_uploaded_file($orig_file,$dest);

                $result = $crud->checkEmail($email);
                var_dump('heheheh success');exit;

                    // if ($result > 0) {
                    //     var_dump('TAKEN OOOOO');exit;
                    // }else{
                    //     var_dump('NOT TAKEN OOOOO');exit;
                    // }
                    // exit();
                
                    // if($result['email'] == true){
                    //     // var_dump('same ni');exit;
                    // var_dump('trueeeeee');exit;

                    // } else {
                    // var_dump('Wrong house ' . $email);exit;

                    //     // $email = $_GET['email'];
                    //     // $res = $crud->checkEmail($email);        
                    // }
    // call function to track if success or not
    // $checkEmail = $validate->emailExist($email);
    // var_dump($checkEmail);exit;
    // $validation = $validate->backEndValidation($firstname, $email);
    

    $isSuccess = $crud->insertAttendee($firstname, $lastname, $dob, $specialty, $email, $contact, $dest);
    $specialtyName = $crud->getSpecialtyById($specialty);

    if ($validation || $isSuccess) {
        // SendEmail::SendMail($email, 'TESTING', 'Welcome to IT conference 2022, You have sucesssfully registered'); 
        include 'includes/succesmessage.php';
        header('Location: view.php');
        } else{
            include 'includes/errormessage.php';
        
    }

}

?>

<?php require_once 'includes/footer.php'; ?>
