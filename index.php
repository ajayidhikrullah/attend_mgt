
<?php
    require_once('private/initialize.php');
    $title = 'Index';
    require_once (INCLUDE_PATH . '/header.php');
    require_once (PRIVATE_PATH . '/db/conn.php');

    $result = $crud->getSpecialty();
?>

        <h1 class="text-center">Registration for Conference</h1>
        <form method='POST' action="<?php echo PUBLIC_PATH .'/attendee/sucess.php'?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name='firstname' placeholder="your first name">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" name='lastname' class="form-control" id="lastname" placeholder="your last name">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth </label>
                <input type="text" name='dob' class="form-control" id="dob">
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
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="type in your email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp">
                <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
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
    <!-- </div> -->
<?php require_once INCLUDE_PATH . '/footer.php'; ?>
