<?php
session_start();

if (!isset($_SESSION['logged_in']) && !isset($_POST['pay'])) {
    header('Location: sign.php');
}

$nav ='includes/navconnected.php';
    $idsess = $_SESSION['id'];

    $email_sess = $_SESSION['email'];
    $firstname_sess = $_SESSION['firstname'];
    $lastname_sess = $_SESSION['lastname'];
    $city_sess = $_SESSION['city'];
    $address_sess = $_SESSION['address'];

require 'includes/header.php';
require 'includes/navconnected.php';


if (isset($_POST['pay'])) {

    include 'db.php';

    $querycmd ="SELECT product2.id,
                       product2.name as 'product',
                       product2.price as 'price',

                       command.id as 'idcmd',
                       command.id_product,
                       command.quantity as 'quantity',
                       command.statut,
                       command.id_user as 'iduser',

                       users.id

                       FROM product2, command, users
                       WHERE product2.id = command.id_product AND users.id = command.id_user
                       AND command.id_user = '{$_SESSION['id']}' AND command.statut = 'ordered'";
    $resultcmd = $connection->query($querycmd);
    if($resultcmd->num_rows > 0){
        while ($rowcmd = $resultcmd->fetch_assoc()) {
            $productcmd = $rowcmd['product'];
            $quantitycmd = $rowcmd['quantity'];
            $pricecmd = $rowcmd['price'];
            $idcmd = $rowcmd['idcmd'];
            $firstnamecmd = $_POST['firstname'];
            $lastnamecmd = $_POST['lastname'];
            $citycmd = $_POST['city'];
            $addresscmd = $_POST['address'];

            $idusercmd = $rowcmd['iduser'];


            $price = $pricecmd * $quantitycmd;
            $fullname = $firstnamecmd . " " . $lastnamecmd ;

            $query_details = "INSERT INTO details_command(product,
                                                  quantity,
                                                  price,
                                                  id_command,
                                                  id_user,
                                                  user,
                                                  address,
                                                  city,
                                                  statut) VALUES('$productcmd',
                                                               '$quantitycmd',
                                                               '$price',
                                                               '$idcmd',
                                                               '$idusercmd',
                                                               '$fullname',
                                                               '$addresscmd',
                                                               '$citycmd',
                                                               'ready')";
            $resultdetails = $connection->query($query_details);

            $querypay = "UPDATE command SET statut = 'paid' WHERE id_user = '{$_SESSION['id']}' AND statut = 'ordered'";
            $resultpay = mysqli_query($connection, $querypay);
        }
    }
    unset($_SESSION["item"]);

}
?>
<head>

</head>
<style>
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
        <div class="col-3"></div>
        <div class="col-6 bg-body-tertiary mx-auto">
            <div class="card-image text-center">
                <!-- <img src="src/img/thanks.png" class="responsive-img" alt=""> -->
                <img src="src/img/Animation - 1714320514368.gif" class="responsive-img" alt="">
            </div>
            <div class="card-content">
                <hr>
                <h5 class="text-center">Thank you for your purchase</h5>
                <h5 class="text-center"><span class="text-warning"><?php echo"$firstname_sess" . " " . "$lastname_sess"; ?></span></h5>
                <p class="text-center">Your order is on its way!</p>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>


       

<?php require 'includes/footer.php'; ?>
