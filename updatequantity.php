<?php
session_start();

include_once 'db.php';

if(isset($_POST['update_quantity'])) {
    $idsess = $_SESSION['id'];

    // Get the product ID and new quantity from the form
    $product_id = $_POST['product_id'];
    $new_quantity = $_POST['new_quantity'];

    $query_update_quantity = "UPDATE command SET quantity = '$new_quantity' WHERE id_product = '$product_id' AND id_user = '$idsess' AND statut != 'paid'";
    if ($connection->query($query_update_quantity) === TRUE) {
        echo "<meta http-equiv='refresh' content='0;url=cart.php?success=1' />";
    } else {
        echo "<h5 class='text-red'>Error: " . $query_update_quantity . "</h5><br><br><br>" . $connection->error;
    }

    // Close the database connection
    $connection->close();
}
?>
