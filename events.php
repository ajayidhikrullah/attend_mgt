
<?php

    $title = 'Events';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'includes/auth.php';
?>

<h1 class="text-center">Register an Events</h1>
        <form method='POST' action='eventsRegister.php' enctype="multipart/form-data">
            <div class="mb-3">
                <label for="event_name" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="event_name" name='event_name' placeholder="name of events">
            </div>
            <div class="mb-3">
                <label for="seats" class="form-label">Count of Seat Number</label>
                <input type="text" name='seatNum' class="form-control" id="seats" placeholder="set number of seat">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Event Location</label>
                <input type="text" name="address" class="form-control" id="address">
            </div>
         
            <!-- <div class="custom-file">
                <input type="file" accept="image/*" name="avatar" class="custom-file-input " id="avatar">
                <small id="avatar" class="form-test text-danger">File upload is optional</small>
            </div> -->
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary btn-block" name='submit'>Register</button>
            </div>

        </form>

