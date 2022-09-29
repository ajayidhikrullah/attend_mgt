
<?php

    $title = 'View Records';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getAttendee();

?>


<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Speciality</th>
      <th scope="col">Phone contact</th>
      <th scope="col">Date of Birth</th>


    </tr>
  </thead>
  <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
        <tbody>
            <tr>
            <th scope="row"><?=$r['attendee_id']?></th>
            <td><?=$r['firstname']?></td>
            <td><?=$r['lastname']?></td>
            <td><?=$r['email']?></td>
            <td><?=$r['specialty_id']?></td>
            <td><?=$r['phone']?></td>
            <td><?=$r['dob']?></td>
            </tr>  
        <tbody>
    <?php } ?>
</table>




<?php require_once 'includes/footer.php';?>