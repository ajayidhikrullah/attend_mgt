
<?php
    $title = 'View Events';
    require_once '../includes/header.php';
    require_once '../includes/auth.php';
    require_once '../db/conn.php';

    $results = $event->getEvent();

?>


<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name of Event</th>
      <th scope="col">Venue</th>
      <th scope="col">Seat available</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
        <tbody>
            <tr>
            <th scope="row"><?=$r['id']?></th>
            <td><?=$r['name']?></td>
            <td><?=$r['address']?></td>
            <td><?=$r['num_of_seat']?></td>
            <td>
                <a href="view.php?id=<?=$r['id']?>" class="btn btn-primary">View</a>
                <a href="edit.php?id=<?=$r['id']?>" class="btn btn-warning">Edit</a>
                <a onclick = "return confirm('Are you sure you want to delete this user?')"; href="delete.php?id=<?=$r['id']?>" class="btn btn-danger">Delete</a>
            </td>
            </tr>  
        <tbody>
    <?php } ?>
</table>




<?php require_once '../includes/footer.php';?>