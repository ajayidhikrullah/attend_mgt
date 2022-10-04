<?php
  include_once 'includes\session.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance || <?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  </head>
  <body>
<div class="container">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">IT Seminar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav mr-auto">      
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg" href="viewrecords.php">Seminar Attendees</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="nav justify-content-end">      
          <ul class="nav justify-content-end">
            <li class="nav-item">

              <?php
                  if (!isset($_SESSION['userId'])) {
              ?>
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              <?php } else { ?>
                <a href="#" class="nav-link active"><span>Hello <?php echo $_SESSION['username'];?></span></a>
                <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
              <?php } ?>
            </li>
            <li class="nav-item">
            </li>
          </ul>
      </div>    
  </div>
</nav>

<br/>
