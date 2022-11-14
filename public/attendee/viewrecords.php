
<?php
    $title = 'View Records';
    require_once('../../private/initialize.php');
    $title = 'Index';
    require_once (INCLUDE_PATH . '/header.php');
    require_once (INCLUDE_PATH . '/auth.php');
    require_once (PRIVATE_PATH . '/db/conn.php');
    // require_once 'includes/header.php';
    // require_once 'includes/auth.php';
    // require_once 'db/conn.php';

    $results = $crud->getAttendee();

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




<?php require_once INCLUDE_PATH.'/footer.php';?>