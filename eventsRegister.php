
<?php

$title = 'Events Registration';
require_once 'includes/header.php';
// require_once 'includes/auth.php';
require_once 'db/conn.php';


if(isset($_POST['submit'])){
    //===================================
    $eventName = $_POST['event_name'];
    $venue = $_POST['address'];
    $numOfSeat = $_POST['seatNum'];

    // var_dump($numOfSeat);exit();


    // $orig_file = $_FILES["avatar"]["tmp_name"];
    // $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    // $target_dir = "prof_uploads/";
    // $dest = "$target_dir$contact.$ext";

    // $validation = $validate->backEndValidation($firstname, $email);
    // var_dump($validation);exit;

    $isSuccess = $event->insertEvent($eventName, $venue, $numOfSeat);
    
    if ($isSuccess == true) {
    
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
                <h5 class="card-title"><?= $_POST['event_name'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"> This is the number of seat available <b><?=$_POST['seatNum'];?></b></h6>
                        <p class="card-text"></p>
                        <a href="#" class="card-link"><?=$_POST['address'];?></a>
                    </div>
                </div>

<?php require_once 'includes/footer.php'; ?>
