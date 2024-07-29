<?php
session_start();

  include_once '../db.php';

if (isset($_GET['id'])) {
   $id=$_GET['id'];

   $query_delete = "DELETE FROM product2 WHERE id = '$id'";
   $result_delete = $connection->query($query_delete);


// header('Location: ' . $_SERVER['HTTP_REFERER']);

header('Location: ./editproduct.php?success=1');

    exit();

}

else {
  header('Location: ../sign.php');
}
?>
