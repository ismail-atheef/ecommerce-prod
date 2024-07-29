<?php

session_start();

if ($_SESSION['role'] !== 'admin') {
  header('Location: ../index.php');
}

 require 'includes/header.php';
 require 'includes/navconnected.php'; //require $nav;?>


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
a{
  text-decoration: none;
  color:black;
}
.toast-container {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1050; /* Adjust z-index as needed */
}
</style>

  <div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-secondary rounded-3 ">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="editproduct.php">Edit Products</a></li>

    </ol>
  </nav>
</div>


<div class="container scroll">
  <table class="table table-hover">
    <thead>
      <tr>
            <th data-field="img">Item</th>
            <th data-field="name">Item Name</th>
            <th data-field="categoryName">Category</th>
            <th data-field="price">Price</th>
            <th data-field="price"></th>
            <!-- <th data-field="quantity">Quantity</th>
            <th data-field="total">Total</th> -->
      </tr>
    </thead>
     <tbody>
<?php
include '../db.php';

$queryfirst = "SELECT id, id_category, name, price, photo1 FROM product2";
$resultfirst = $connection->query($queryfirst);
if ($resultfirst->num_rows > 0) {
  // output data of each row
  while($rowfirst = $resultfirst->fetch_assoc()) {

        $idp = $rowfirst['id'];
        $name = $rowfirst['name'];
        // $statut = $rowfirst['statut'];
        $category = $rowfirst['id_category'];
        $price = $rowfirst['price'];
        $img_product = $rowfirst['photo1'];
        // $user = $rowfirst['user'];

        $querycategory = "SELECT name FROM category WHERE id = '$category'";
        $categoryResult = $connection->query($querycategory);

        if ($categoryResult->num_rows > 0) {
            $categoryRow = $categoryResult->fetch_assoc();
            $categoryName = $categoryRow['name'];
        } else {
            $categoryName = "Category Not Found";
        }

      
    ?>
    <tr>
    <td><img src="../productsimg/<?= $img_product; ?>" width="20%"></td>
      <td><?= $name; ?></td>
      <td><?= $categoryName; ?></td>
      <td><?= $price; ?></td>
      <td class="text-center"><a href="deleteproduct.php?id=<?= $idp; ?>"><i class="text-danger fa-solid fa-xmark"></i></a></td>
      <!-- <td><a href="deletecmd.php?id=<!?= $idp; ?>&userid=<!?= $user; ?>"><i class="material-icons red-text">close</i></a></td> -->
    </tr>
    <?php }} ?>
  </tbody>
</table>
</div>


<!-- Bootstrap Toast -->
<div class="toast-container">
        <div class="toast" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
            <div class="toast-header bg-warning text-white">
                <strong class="mr-auto">Success</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Product deleted successfully!
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <!-- JavaScript to show the Toast -->
    <script>
        $(document).ready(function(){
            // Check if the success parameter is present in the URL
            if(getUrlParameter('success') === '1') {
                // Show the toast
                $('#successToast').toast('show');
            }
        });

        // Function to get URL parameter by name
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };
    </script>

 <?php require 'includes/footer.php'; ?>
