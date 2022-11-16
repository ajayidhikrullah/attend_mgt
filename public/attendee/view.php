
<?php

require_once('../../private/initialize.php');
$title = 'View Details';
require_once (INCLUDE_PATH . '/header.php');
require_once (INCLUDE_PATH . '/auth.php');
require_once (PRIVATE_PATH . '/db/conn.php');

// require_once 'includes/header.php';
// require_once 'includes/auth.php';
// require_once 'db/conn.php';

//get attendee by id
// var_dump($_GET['id']);exit;

if (!isset($_GET['id'])) {
    # code...
    echo "<h1 class='error'>Please check your details and try again</h1>";
} else{
    // var_dump('seconddd');exit;

    $id = $_GET['id'];
    $result = $crud->getAttendeeDetail($id);
?>


    <img src="<?php echo empty($result['avatar_path']) ? "/prof_uploads/blank.png" : $result['avatar_path']; ?>" alt="re-upload image">
    <br/>
    <br/>

    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $result['firstname'] .' ' . $result['lastname'];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$result['name'];?></h6>
                    <p class="card-text"></p>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$result['dob'];?></h6>
                    <a href="#" class="card-link"><?=$result['email']?></a>
                    <a href="#" class="card-link"><?= $result['phone'];?></a>
                </div>
            </div>
            <br>
            <br>
        
            <a href="viewrecords.php" class="btn btn-info">Back to List</a>
            <a href="edit.php?id=<?=$result['attendee_id']?>" class="btn btn-warning">Edit</a>
            <a onclick = "return confirm('Are you sure you want to delete this user?')"; href="delete.php?id=<?=$result['attendee_id']?>" class="btn btn-danger">Delete</a>

        </div>

        <!-- chart stat -->
        <div class="col-8">
            <canvas id="myChart" width="50" height="20"></canvas>
        </div>

    </div>
<?php } ?>




<?php require_once INCLUDE_PATH.'/footer.php';?>