<?php
session_start();

if (!isset($_SESSION['logged_in']) && !isset($_SESSION['item'])) {
    header('Location: sign.php');
}

elseif($_SESSION['item'] < 1){
    header('Location: index.php');
}
else {
    $nav ='includes/navconnected.php';
    $idsess = $_SESSION['id'];

    $email_sess = $_SESSION['email'];
    $country_sess = $_SESSION['country'];
    $firstname_sess = $_SESSION['firstname'];
    $lastname_sess = $_SESSION['lastname'];
    $city_sess = $_SESSION['city'];
    $address_sess = $_SESSION['address'];
}

require 'includes/header.php';
require $nav;?>
<head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<style>
    .form {
  background-color: #fff;
  display: block;
  padding: 1rem;
  /* max-width: 400px; */
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
.input-group-text{
width: 100px;
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
.input-container {
    display: inline-block;
    vertical-align: top; /* Aligns the input vertically with the label */
}

.input-label {
    display: inline-block;
    width: 120px; /* Adjust as needed */
}
#shipping-header{
    background-color: black;
    color: white;
    padding: 10px;
    border-radius: 5px;
}
#summary-header{
    background-color: grey;
    color: white;
    padding: 10px;
    border-radius: 5px;
}
.bg-grey{
    background-color: lightgrey;
}
a{
    text-decoration: none;
    color:black;
}

</style>
<div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
      <li class="breadcrumb-item"><a href="checkout.php">Checkout</a></li>
    </ol>
  </nav>
</div>

<div class="container">
  <div class="row">
                    <div class="col-1">
                    
                    </div>

                    <div class="col-6 bg-body-tertiary p-3">
                        <h4 id="shipping-header">SHIPPING</h4>
                    <form class="form" method="POST" action="final.php" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="email" class="form-control" placeholder="Enter Email Address" name="email" value='<?= $email_sess; ?>' class="validate" required>
                            </div>

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2">First Name</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname" value='<?= $firstname_sess; ?>' class="validate" required>
                            </div>

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Last Name</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Lastname" name="lastname" value='<?= $lastname_sess; ?>' class="validate" required>
                            </div>

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon4">City</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter City" name="city" value='<?= $city_sess; ?>' class="validate" required>
                            </div>

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon5">Address</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Address" name="address" value='<?= $address_sess; ?>' class="validate" required>
                            </div>


                            <div class=" justify-content-end">
                                <button type="submit" id="confirmed" name="pay" class="btn btn-primary">Pay</button>
                            </div>
                        </form>
                    </div>

                    <!-- <div class="col-1">
                    
                    </div> -->
                    <div class="col-4 p-3 bg-body-tertiary">
                        <div class="row justify-content-end">
                                        <div class="container">
                                                <h4 id="summary-header">Summary</h4>
                                                <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Qty</th>
                                                                <th>Price</th>
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
                                                                      $number=0;
                                                                      $total=0;
                                                                        // output data of each row
                                                                        while($rowproduct = $result1->fetch_assoc()) {
                                                                            // $id_productdb = $rowproduct['id'];
                                                                            $name_product = $rowproduct['name'];
                                                                            // $category_product = $rowproduct['category'];
                                                                            $quantity_product = $rowproduct['quantity'];
                                                                            $price_product = $rowproduct['price'];
                                                                            // $img_product = $rowproduct['img'];
                                                                            
                                                                            $number=$number+1;
                                                                            $subtotal=$price_product*$quantity_product;
                                                                            $total=$total+$subtotal;


                                                                            ?>
                                                                <tr>
                                                                <td><?= $number;?></td>
                                                                <td><?= $name_product; ?></td>
                                                                <td><?= $quantity_product; ?></td>
                                                                <td>$<?= $subtotal; ?></td>
                                                                <!-- <td>$<?= $price_product*$quantity_product; ?></td> -->
                                                                </tr>
                                                                <!-- <tr>
                                                                <td>2</td>
                                                                <td>Jane</td>
                                                                <td>Doe</td>
                                                                <td>jane@example.com</td>
                                                                </tr>
                                                                <tr>
                                                                <td>3</td>
                                                                <td>Mike</td>
                                                                <td>Smith</td>
                                                                <td>mike@example.com</td>
                                                                </tr> -->
                                                                <?php }}?>
                                                                <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Total</td>
                                                                <td>$<?= $total; ?></td>
                                                                </tr>
                                                            </tbody>
                                                </table>
                                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="row"></div>

                    </div>

</div>
<?php require 'includes/footer.php'; ?>
