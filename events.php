
<?php

$title = 'Events';
require_once 'includes/header.php';
require_once 'db/conn.php';
require_once 'includes/auth.php';


?>

<h1 class="text-center">Register an Events</h1>
        <form method='POST' action='' enctype="multipart/form-data">
            <div class="mb-3">
                <label for="event_name" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="event_name" name='event_name' placeholder="name of events">
            </div>
            <div class="mb-3">
                <label for="seats" class="form-label"></label>
                <input type="text" name='seats' class="form-control" id="seats" placeholder="set of seat">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="address">
            </div>
         
            <div class="mb-3">
                <label for="specialty" class="form-label">Area of Expertise </label>
                <!-- <input type="text" class="form-control" id="specialty"> -->
                <select class="form-control" name='specialty' id="specialty">
                    <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?=$r['specialty_id'];?>"><?=$r['name'];?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="custom-file">
                <input type="file" accept="image/*" name="avatar" class="custom-file-input " id="avatar">
                <small id="avatar" class="form-test text-danger">File upload is optional</small>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary btn-block" name='submit'>Submit</button>

            </div>

        </form>

