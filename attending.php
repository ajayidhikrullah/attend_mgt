
<?php
    $title = 'Attending Records';
    require_once 'includes/header.php';
    require_once 'includes/auth.php';
    require_once 'db/conn.php';

    $results = $crud->getAttendee();

if ($_SESSION['userId'] == '3') {
    # code...
        echo "<h4 class='error'>You have no right to access this page</h4>";
        die();
} else{
// 

    echo "<h1>Welcome oooooooo</h1>";

}

?>

<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Speciality</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
        <tbody>
            <tr>
            <th scope="row"><?=$r['attendee_id']?></th>
            <td><?=$r['firstname']?></td>
            <td><?=$r['lastname']?></td>
            <td><?=$r['dob']?></td>
            <td>
                <a href="view.php?id=<?=$r['attendee_id']?>" class="btn btn-primary">View</a>
                <a href="edit.php?id=<?=$r['attendee_id']?>" class="btn btn-warning">Edit</a>
                <a onclick = "return confirm('Are you sure you want to delete this user?')"; href="delete.php?id=<?=$r['attendee_id']?>" class="btn btn-danger">Delete</a>
            </td>
            </tr>  
        <tbody>
    <?php } ?>
</table>

<?php require_once 'includes/footer.php';?>