<?php
    $title = 'User Login';

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username, $new_password);
    // var_dump($password);exit();

        if (!$result) {
    // var_dump($username);exit();

            echo "<div class='alert alert-danger'>Username or Password is Incorrect! Please check your information is correct...</div>";
        } else {
    // var_dump('Yes');exit();

            $_SESSION['username'] = $username;
            $_SESSION['userId'] = $result['users_id'];
            header("Location: viewrecords.php");
        }
    }

?>

<h1 class="text-center"><?php echo $title?></h1>

<form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    <table class="table table-sm">
        <tr>
            <td><label for="username">Username: *</label></td>
            <td><input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']?>">

            <?php if (empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>$username_error</p>"; ?>
            </td>
        </tr>

        <tr>
            <td><label for="password">Password: *</label></td>
            <td>
                <input type="password" name="password" id="password" value="" class="form-control" id="password">

                <?php if(empty($password) && isset($password_error)) echo "<p class='text-danger'>$password_error</p>";?>

            </td>
        </tr>
    </table>
    
    <br>
    <a href="#">Forgot Password</a>
    
    <br>
    
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <input type="submit" value="Login" class="btn btn-primary btn-block"> <br><br>
    </div>

</form>