<?php

session_start();

if ($_SESSION['role'] !== 'admin') {
    header('Location: ../index.php');
}

require 'includes/header.php';
require 'includes/navconnected.php'; //require $nav;?>
<style>
a{
    text-decoration: none;
    color:black;
}
</style>

  <div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-secondary rounded-3 ">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="allusers.php">Users</a></li>

    </ol>
  </nav>
</div>

<div class="container scroll">
    <table class="table table-hover">
        <thead>
        <tr>
            <th data-field="lastname">Full name</th>
            <th data-field="email">Username</th>
            <th data-field="city">City</th>
            <th data-field="country">Country</th>
            <th data-field="address">Address</th>
            <th data-field="role">Role</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
        include '../db.php';

        //get users
        $queryuser = "SELECT id, email, firstname, lastname, address, city, country,role FROM users";
        $resultuser = $connection->query($queryuser);
        if ($resultuser->num_rows > 0) {
            // output data of each row
            while($rowuser = $resultuser->fetch_assoc()) {
                $id_user = $rowuser['id'];
                $firstname = $rowuser['firstname'];
                $lasttname = $rowuser['lastname'];
                $email = $rowuser['email'];
                $city = $rowuser['city'];
                $country = $rowuser['country'];
                $address = $rowuser['address'];
                $role = $rowuser['role'];
                ?>
                <tr>
                    <td><?php echo" $firstname "." $lasttname"; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= $city; ?></td>
                    <td><?= $country; ?></td>
                    <td><?= $address; ?></td>
                    <td><?= $role; ?></td>
                    <!--td><a href="deleteuser.php?id=<?= $id_user; ?>"><i class="material-icons red-text">close</i></a></td-->
                </tr>
            <?php }}  ?>
        </tbody>
    </table>
</div>

<?php require 'includes/footer.php'; ?>
