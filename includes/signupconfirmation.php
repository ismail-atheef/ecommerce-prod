<?php
if (isset($_POST['signup'])) {

  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];

  $encryptedpass = md5($password);


  include 'db.php';

  //connecting & inserting data

  $query = "INSERT INTO users(email,
  firstname,
  lastname,
  password,
  address,
  city,
  country,
  role) VALUES ('$email',
  '$firstname',
  '$lastname',
  '$encryptedpass',
  '$address',
  '$city',
  '$country',
  'user')";
// var_dump($connection->query($query));
// die();

if ($connection->query($query) === TRUE) {

  header('Location: ./index.php');
  exit();


     } else {
         echo "<h5 class='red-text'>Error: " . $query . "</h5>" . $connection->error;
     }

     $connection->close();

}

?>
