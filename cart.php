<?php
session_start();

if ($_SESSION['item'] < 1 OR !isset($_SESSION['logged_in'])) {
    // header('Location: sign.php');
    echo "<meta http-equiv='refresh' content='0;url=index.php?nocart=1' />";
    exit();
}

else {
    $nav ='includes/navconnected.php';
    $idsess = $_SESSION['id'];
}



require 'includes/header.php';
require $nav;?>
<head>

</head>
<style>
  #cart-header{
    background-color: grey;
    color: white;
    padding: 10px;
}
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
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>

    </ol>
  </nav>
</div>



<div class="container mt-3 pb-5">
  <h4 id="cart-header">My Cart</h4>
  <!-- p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>             -->
  <table class="table table-hover">
    <thead>
      <tr>
            <th data-field="img">Item</th>
            <th data-field="name">Item Name</th>
            <th data-field="category">Category</th>
            <th data-field="price">Price</th>
            <th data-field="quantity">Quantity</th>
            <th data-field="total">Total</th>
            <th data-field="total"></th>
      </tr>
    </thead>
    <tbody>
                    <?php
                        include 'db.php';
                        //get products
                        $queryproduct = "SELECT product2.name as 'name',
                        product2.id as 'id', product2.price as 'price', product2.photo1 as 'img',
                        category.name as 'category', command.id_user, command.statut,
                        command.quantity as 'quantity'
                FROM category, product2, command
                WHERE command.id_product = product2.id AND product2.id_category = category.id AND command.statut = 'ordered' AND command.id_user = ".$_SESSION['id'];
                        $result1 = $connection->query($queryproduct);
                        if ($result1->num_rows > 0) {
                            // output data of each row
                            while($rowproduct = $result1->fetch_assoc()) {
                                $id_productdb = $rowproduct['id'];
                                $name_product = $rowproduct['name'];
                                $category_product = $rowproduct['category'];
                                $quantity_product = $rowproduct['quantity'];
                                $price_product = $rowproduct['price'];
                                $img_product = $rowproduct['img'];

                                ?>
                                <tr>
                                    <td><img src="productsimg/<?= $img_product; ?>" width="30%"></td>
                                    <!-- <img id="main-image" src="products/<!?= $thumbnail_product; ?>" alt="" width="70%"> -->
                                    <td><?= $name_product; ?></td>
                                    <td><?= $category_product; ?></td>
                                    <td>$<?= $price_product; ?></td>
                                    <td>
                                        <form method="POST" action="updatequantity.php">
                                            <input type="hidden" name="product_id" value="<?= $id_productdb; ?>">
                                            <div class="input-group mb-3">
                                            <input type="number" name="new_quantity" class="form-control" style="max-width: 100px;" value="<?= $quantity_product; ?>" min="1" required>
                                            <!-- <input type="submit" name="update_quantity" value="Update"> -->
                                            <button type="submit" name="update_quantity" class="btn btn-primary"> <i class="bi bi-check-lg"></i>
                                            </div>
                                          </button>
                                        </form>
                                    </td>
                                    <!-- <td><!?= $quantity_product; ?></td> -->
                                    <td>$<?= $price_product*$quantity_product; ?></td>
                                    <td><a href="deletecommand.php?id=<?= $id_productdb; ?>"><i class="text-danger fa fa-times"></i></a></td>
                                    <!-- <td><a href="deletecommand.php?id=<!?= $id_productdb; ?>"><i class="material-icons red-text">close</i></a></td> -->
                                </tr>
                            <?php }}?>
    </tbody>
    </table>

    <div class="right-align">
        <a href="checkout.php" class='btn btn-primary'>Check out <i class="fa fa-shopping-cart"></i></a>
    </div>

</div>

                                <!-- Bootstrap Toast -->
<div class="toast-container">
        <div class="toast" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
            <div class="toast-header bg-success text-white">
                <strong class="mr-auto">Success</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Quantity updated!
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


<?php
// require 'includes/secondfooter.php';
require 'includes/footer.php'; ?>
