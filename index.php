
<?php

    $title = 'Index';
    require_once 'includes/header.php';

?>

        <h1 class="text-center">Registration for Conference</h1>
        <form method='POST' action='sucess.php'>
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
                    <option value="">DB Admin</option>
                    <option value="">Project Manager</option>
                    <option value="">Cybersecurity</option>
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
                <button type="submit" class="btn btn-primary btn-block" name='submit'>Submit</button>

            </div>

        </form>
    <!-- </div> -->
<?php require_once 'includes/footer.php'; ?>
