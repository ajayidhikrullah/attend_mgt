
<?php

$title = 'View Details';
require_once 'includes/header.php';
require_once 'db/conn.php';

//get attendee by id
if (!isset($_GET['id'])) {
    # code...
    echo "<h1 class='text-danger'>Please check your details and try again</h1>";
} else{
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetail($id);
?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $result['firstname'] .' ' . $result['lastname'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?=$result['dob'];?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><?=$result['name'];?></h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link"><?=$result['email']?></a>
            <a href="#" class="card-link"><?= $result['phone'];?></a>
        </div>
    </div>

<?php } ?>




<?php require_once 'includes/footer.php';?>