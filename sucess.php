
<?php

$title = 'Success';
require_once 'includes/header.php';

?>
<h1 class='text-center text-success'>You successfully registered for the conference</h1>
<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $specialty = $_POST['specialty'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];





?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $firstname .' ' . $lastname;?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?=$dob;?></h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link"><?=$email?></a>
        <a href="#" class="card-link"><?= $phone;?></a>
    </div>
</div>




<?php require_once 'includes/footer.php'; ?>
