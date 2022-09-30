
<?php

$title = 'Edit Attendees';
require_once 'includes/header.php';
require_once 'db/conn.php';

$result = $crud->getSpecialty();
if (!isset($_GET['id'])) {
    # code...
    echo 'error';
}else{
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetail($id);
    $fname = $attendee['firstname'];
?>

    <h1 class="text-center">Edit Registered Attendees</h1>
    <form method='POST' action='sucess.php'>
        <input type="hidden" name="id" value = "<?= $attendee['attendee_id'];?>">
        <div class="mb-3">
            <label for="firstname" value="<?= $fname?>" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name='firstname'>
        </div>
        <div class="mb-3">
            <label for="lastname" value="<?=$attendee['lastname']?>" class="form-label">Last Name</label>
            <input type="text" name='lastname' class="form-control" id="lastname" placeholder="your last name">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth </label>
            <input type="text" name='dob' class="form-control" id="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise </label>
            <select class="form-control" name='specialty' id="specialty">
                <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?=$r['specialty_id'];?>"
                        <?php 
                            if ($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
                        <?=$r['name'];?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="type in your email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" name='phone' class="form-control" id="phone" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success btn-block" name='submit'>Save Changes</button>

        </div>

    </form>
<?php } ?>
<!-- </div> -->
<?php require_once 'includes/footer.php'; ?>
