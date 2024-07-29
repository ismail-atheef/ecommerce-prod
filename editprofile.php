<?php

session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: sign.php');
}

else {
  $sessid = $_SESSION['id'];
  $email_sess = $_SESSION['email'];
  $firstname_sess = $_SESSION['firstname'];
  $lastname_sess = $_SESSION['lastname'];
}
 require 'includes/header.php';
 require 'includes/navconnected.php'; //require $nav;?>

<style>
    .form {
  background-color: #fff;
  display: block;
  padding: 1rem;
  max-width: 400px;
  border-radius: 0.5rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  text-align: center;
  color: #000;
}

.input-container {
  position: relative;
}

.input-container input, .form button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 300px;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.submit {
  display: block;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color: #4F46E5;
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100%;
  border-radius: 0.5rem;
  text-transform: uppercase;
}

.signup-link {
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
  text-align: center;
}

.signup-link a {
  text-decoration: underline;
}
a{
    text-decoration: none;
    color:black;
}
</style>


<!-- <!?php
include 'db.php';

 $queryproduct = "SELECT product.name as 'name',
 product.id as 'id', product.price as 'price',
 category.name as 'category', command.id_user, command.statut,
 command.quantity as 'quantity'
FROM category, product, command
WHERE command.id_product = product.id AND product.id_category = category.id AND command.statut = 'ordered' AND command.id_user = ".$_SESSION['id'];
$result1 = $connection->query($queryproduct);



?> -->

<div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="editprofile.php">Edit Profile</a></li>
    </ol>
  </nav>
</div>

<div class="container-fluid mt-5">
    <div class="d-flex justify-content-center">
        <!-- <div class="container"> -->



                                <form class="form" method="POST" enctype="multipart/form-data">
                                    <!-- <div class="row"> -->
                                        <p class="form-title">Update your Profile</p>
                                        <div class="input-container">
                                            <input type="email" placeholder="Enter email" name="email" value='<?= $email_sess; ?>' class="validate" required>
                                            <!-- <span>
                                            </span> -->
                                        </div>

                                        <div class="input-container">
                                            <input type="text" placeholder="Enter first name" name="firstname" value='<?= $firstname_sess; ?>' class="validate" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" placeholder="Enter last name" name="lastname" value='<?= $lastname_sess; ?>' class="validate" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="password" placeholder="Enter password" name="password" class="validate value1" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="password" placeholder="Confirm password" name="confirmation" class="validate value2" required>
                                        </div>
            <?php

             if (isset($_POST['update'])) {

              $newfirstname = $_POST['firstname'];
              $newlastname = $_POST['lastname'];
               $newemail = $_POST['email'];
               $newpassword = md5($_POST['password']);

               $_SESSION['email'] = $newemail;
               $_SESSION['firstname'] = $newfirstname;
               $_SESSION['lastname'] = $newlastname;

              include 'db.php';
              // update info on users Toble
              $queryupdate = "UPDATE users SET firstname ='$newfirstname', lastname ='$newlastname', email ='$newemail', password ='$newpassword' WHERE id='$sessid'";
              $result = $connection->query($queryupdate);
              // echo "<meta http-equiv='refresh' content='0'; url='index.php?edtprofile=1' />";
              echo "<meta http-equiv='refresh' content='0; url=index.php?edtprofile=1' />";

                    // $_SESSION['email'] = $newemail;
                    // $_SESSION['firstname'] = $newfirstname;
                    // $_SESSION['lastname'] = $newlastname;

              // echo "<meta http-equiv='refresh' content='0'; url='index.php?editprofile=1' />";
              
              

             }

             ?>
           <div class="center-align">
               <button type="submit" id="confirmed" name="update" class="submit ">Submit</button>
           </div>
           <!-- <!?php echo "<meta http-equiv='refresh' content='0'; url='index.php?edtprofile=1' />"; ?> -->

     </div>
   </form>
 </div>
    </div>
  </div>
</div>
    <?php require 'includes/footer.php'; ?>
