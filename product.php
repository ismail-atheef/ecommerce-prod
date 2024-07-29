<?php
session_start();

if (!isset($_GET['id'])) {
    header('Location: index.php');
}

if (!isset($_SESSION['logged_in'])) {
  $nav = 'includes/nav.php';
}
else {
  $nav ='includes/navconnected.php';
  $idsess = $_SESSION['id'];
}

$id_product =$_GET['id'];
// $name =$_GET['name']
 require 'includes/header.php';
 require $nav;
//  echo $id_product;
 ?>
<script>
    function change_image(image){

var container = document.getElementById("main-image");

container.src = image.src;
}
document.addEventListener("DOMContentLoaded", function(event) {
});
</script>
 <style>
    /* body{background-color: #000} */
    .card{
        border:none
    }.product{
        background-color: #eee
    }.brand{
        font-size: 13px
    }.act-price{
        color:red;font-weight: 700
    }.dis-price{
        text-decoration: line-through
    }.about{
        font-size: 14px
    }.color{
        margin-bottom:10px
    }label.radio{
        cursor: pointer
    }label.radio input{
        position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none
    }label.radio span{
        padding: 2px 9px;border: 2px solid #ff0000;display: inline-block;color: #ff0000;border-radius: 3px;text-transform: uppercase
    }label.radio input:checked+span{
        border-color: #ff0000;background-color: #ff0000;color: #fff
    }.btn-danger{
        background-color: #ff0000 !important;border-color: #ff0000 !important
    }.btn-danger:hover{
        background-color: #da0606 !important;border-color: #da0606 !important
    }.btn-danger:focus{
        box-shadow: none
    }.cart i{
        margin-right: 10px
    }
    a{
      text-decoration: none;
      color:black;
    }
    /* #main-image{
        width
    } */
 </style>

<?php

include 'db.php';

                    //get products
                    $queryname = "SELECT name FROM product2 WHERE id = '{$id_product}'";
                    $result = $connection->query($queryname);

                    // Check if the query executed successfully and fetched at least one row
                    if ($result && $result->num_rows > 0) {
                        // Fetch the row as an associative array
                        $row = $result->fetch_assoc();
                        
                        // Extract the 'name' from the fetched row
                        $name = $row['name'];
                    } else {
                        // If no product with the specified ID is found, set a default name
                        $name = "Product";
                    }

                    // Free the result set
                    $result->free_result();

                    // Close the database connection
                    $connection->close();


                 ?>

<div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="productpage.php">Products</a></li>
      <li class="breadcrumb-item"><a href="product.php?id=<?php echo $id_product; ?>"><?php echo $name; ?></a></li>
      <!-- <li class="breadcrumb-item"><a href="#"><?php echo $name; ?></a></li> -->
      <!-- <li class="breadcrumb-item"><a href="product.php?id=14" class="breadcrumb">Product</a></li> -->
      <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
    </ol>
  </nav>
</div>




<?php

include 'db.php';

//get products
$queryproduct = "SELECT id, name, price, description, photo1, photo2, photo3, photo4
                 FROM product2 WHERE id = '{$id_product}'";

$result1 = $connection->query($queryproduct);

if ($result1 === false) {
    // Query execution failed
    echo "Error: " . $connection->error;
} else {
    // Query executed successfully
    if ($result1->num_rows > 0) {
        // Fetch data from the result set
        while ($rowproduct = $result1->fetch_assoc()) {
            // Process the fetched data
            $id_productdb = $rowproduct['id'];
            $name_product = $rowproduct['name'];
            $price_product = $rowproduct['price'];
            $description = $rowproduct['description'];
            $thumbnail_product = $rowproduct['photo1'];
            $id_pic1 = $rowproduct['photo1'];
            $id_pic2 = $rowproduct['photo2'];
            $id_pic3 = $rowproduct['photo3'];
            $id_pic4 = $rowproduct['photo4'];
        }
    } else {
        // No matching records found
        echo "No products found with ID: $id_product";
    }
}?>

<div class="container">
<div class="container ">
  <div class="row">
    <div class="col">
       <div class="row">
        <div class="col-12 ">
        <div class="text-center p-4"> <img id="main-image" src="productsimg/<?= $id_pic1; ?>" alt="" width="70%"> </div>
        </div>
                            <!-- <div class="col p-0 m-0 text-center"> <img onclick="change_image(this)" src="productsimg/<!?= $pics; ?>" width="70">  </div><!?php }} ?> -->
                            <!-- <div class="col p-0 m-0 text-center"> <img onclick="change_image(this)" src="productsimg/<?= $id_pic1; ?>" width="70">  </div>
                            <div class="col p-0 m-0 text-center"> <img onclick="change_image(this)" src="productsimg/<?= $id_pic2; ?>" width="70">  </div>
                            <div class="col p-0 m-0 text-center"> <img onclick="change_image(this)" src="productsimg/<?= $id_pic3; ?>" width="70">  </div>
                            <div class="col p-0 m-0 text-center"> <img onclick="change_image(this)" src="productsimg/<?= $id_pic4; ?>" width="70">  </div> -->
                            
                            
        </div>
    </div>
    <div class="col">
    <form method="post">
            <div class="product p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center"> <a href="./index.php"><i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span></a> </div> 
                    <div class="d-flex align-items-center"> <a href="./cart.php"><i class="fa fa-shopping-cart"></i> <span class="ml-1"></span></a> </div>
                </div>
                <div class="mt-4 mb-3"> 
                    <h5 class="text-uppercase"><?= $name_product; ?></h5>
                    <div class="price d-flex flex-row align-items-center"> <span class="act-price"><h4>$<?= $price_product; ?></h4></span>
                        <div class="ml-2">  </div>
                    </div>
                </div>
                <p class="h6"><?= $description; ?></p>
                <div class="mt-5">
                    <div >
                        <!-- <i class="fa-solid fa-shopping-basket prefix"></i> -->
                        <!-- <i class="material-icons prefix">shopping_basket</i> -->
                        <label for="icon_prefix">Quantity</label><br>
                        <input id="icon_prefix" type="number" value="1" name="quantity" min="1" class="validate" required>
                        
                    </div>
                    <!-- <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label> -->
                </div>
                <?php
if (isset($_POST['buy'])) {
    // Check if user is logged in
    if (!isset($_SESSION['logged_in'])) {
        echo "<meta http-equiv='refresh' content='0;url=./sign.php' />";
    } else {
        $quantity = $_POST['quantity'];

        // Include database connection
        include 'db.php';

        // Check if command for this product exists for the user
        $query_check_command = "SELECT * FROM command WHERE id_product = '$id_productdb' AND id_user = '$idsess' AND statut != 'paid'";
        $result_check_command = $connection->query($query_check_command);

        if ($result_check_command === false) {
            // Handle query error
            echo "<h5 class='text-red'>Error: " . $query_check_command . "</h5><br><br><br>" . $connection->error;
        } else {
            if ($result_check_command->num_rows > 0) {
                // this product exists, update quantity
                $row_command = $result_check_command->fetch_assoc();
                $existing_quantity = $row_command['quantity'];
                $new_quantity = $existing_quantity + $quantity;

                $query_update_command = "UPDATE command SET quantity = '$new_quantity' WHERE id_product = '$id_productdb' AND id_user = '$idsess'";
                if ($connection->query($query_update_command) === TRUE) {
                    $_SESSION['item'] += 1;
                    echo "<meta http-equiv='refresh' content='0;url=product.php?id=$id_productdb' />";
                } else {
                    echo "<h5 class='text-red'>Error: " . $query_update_command . "</h5><br><br><br>" . $connection->error;
                }
            } else {
                // this product doesn't exist, proceed with insertion
                $query_insert_command = "INSERT INTO command(id_product, quantity, statut, id_user)
                    VALUES ('$id_productdb', '$quantity', 'ordered', '$idsess')";

                if ($connection->query($query_insert_command) === TRUE) {
                    $_SESSION['item'] += 1;
                    echo "<meta http-equiv='refresh' content='0;url=product.php?id=$id_productdb' />";
                } else {
                    echo "<h5 class='text-red'>Error: " . $query_insert_command . "</h5><br><br><br>" . $connection->error;
                }
            }
        }
        $connection->close();
    }
}
?>
                <div class="cart mt-4 align-items-center"> <button type="submit" name="buy" class="btn btn-primary text-uppercase mr-2 px-4">Add to Cart</button>  </div>
            </div>
            </form>
    </div>
  </div>
</div>

</div>





<?php
//  require 'includes/secondfooter.php';
 require 'includes/footer.php'; ?>
