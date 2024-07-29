<?php
session_start();


if (!isset($_SESSION['logged_in'])) {
  $nav = 'includes/nav.php';
}
else {
  $nav ='includes/navconnected.php';
  $idsess = $_SESSION['id'];
}

// $id_product =$_GET['id'];
 require 'includes/header.php';
 require $nav;
//  echo $id_product;
 ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    
    <style>
/* Styles for product cards */
.product-card {
width: 200px;
border: 1px solid #ccc;
border-radius: 5px;
padding: 10px;
margin: 10px;
display: inline-block;
}
/* Styles for pagination */
.pagination {
margin-top: 20px;
}
.pagination a {
display: inline-block;
padding: 8px 16px;
text-decoration: none;
color: black;
border: 1px solid #ddd;
border-radius: 5px;
}

.pagination a.active {
background-color: #007bff;
color: white;
}
.paginatenumber{
background-color: white;
}
.paginatenumber:hover{
background-color: grey;
color:white;
}
.cs-height{
height: 200px !important;
}
.ss{
border: 2px solid #fff;
border-radius: 25px;
background-color: #f2f2f2;
opacity: 0.75;
}
.ss:hover{
border: 2px solid grey;
border-radius: 25px;
opacity: 1;
}
a{
text-decoration: none !important;
color:black;
}
a:hover{
text-decoration: none !important;
color:black;
}
.title{
border: 2px solid #fff;
/* border-radius: 25px; */
background-color: white;
/* opacity: 0.75; */
}
/* .title:hover{
border: 2px solid grey;
border-radius: 25px;
opacity: 1;
} */
    .autocomplete {
        /*the container must be positioned relative:*/
        position: relative;
        display: block;

    }

    .autocomplete-items {
        color: #26a69a;
        font: 16px Roboto, sans-serif;
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding-bottom: 20px;
        padding-top: 20px;
        padding-left: 30px;
        cursor: pointer;
        background-color: #fff;
    }

    .autocomplete-items div:hover {
        /*when hovering an item:*/
        color: #26a69a;
        background-color: #e9e9e9;
    }

    .autocomplete-active {
        /*when navigating through the items using the arrow keys:*/
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
     /* Remove the navbar's default rounded borders and increase the bottom margin */ 
     .navbar {
      /* margin-bottom: 50px; */
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      margin: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    a{
      text-decoration: none;
      color:black;
    }

    /* formstyle */
.form {
  position: relative;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  gap: 10px;
  width: 300px;
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 30px 30px -30px rgba(27, 26, 26, 0.315);
}

.form .title {
  color: royalblue;
  font-size: 30px;
  font-weight: 600;
  letter-spacing: -1px;
  line-height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form input {
  outline: 0;
  border: 1px solid rgb(219, 213, 213);
  padding: 8px 14px;
  border-radius: 8px;
  width: 100%;
  height: 50px;
}

.form textarea {
  border-radius: 8px;
  height: 100px;
  width: 100%;
  resize: none;
  outline: 0;
  padding: 8px 14px;
  border: 1px solid rgb(219, 213, 213);
}

.form button {
  align-self: flex-end;
  padding: 8px;
  outline: 0;
  border: 0;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 500;
  background-color: royalblue;
  color: #fff;
  cursor: pointer;
}
.example1 {
  border: 2px solid #fff;
  border-radius: 25px;
}
.example1:hover {
  border: 2px solid grey;
  border-radius: 25px;
}
.ss{
  border: 2px solid #fff;
  border-radius: 25px;
  background-color: #f2f2f2;
  opacity: 0.75;
}
.ss:hover{
  border: 2px solid grey;
  border-radius: 25px;
  opacity: 1;
}
#aboutus{
  background-color: grey;
}
/* #home{
    background-image: url('../ecommerce-prod/src/img/vecteezy_online-shopping-on-phone-buy-sell-business-digital-web_4299835.jpg');
    width: 100%;
    height: 80vh;
    /*background-repeat: no-repeat;
    background-size: cover;
    /* background-position-x: 90px;
    background-position-y: -150px; 
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
} */

#home span{
    color: darkmagenta;
}
.splashbtn {
    --color: #00A97F;
    /* --color: #00A97F; */
    /* --color2: rgb(10, 25, 30); */
    --color2: rgb(255, 255, 255);
    padding: 0.8em 1.75em;
    background-color: transparent;
    /* opacity: 0.75; */
    border-radius: 15px;
    border: .3px solid var(--color);
    transition: .5s;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    z-index: 1;
    font-weight: 300;
    font-size: 17px;
    font-family: 'Roboto', 'Segoe UI', sans-serif;
    text-transform: uppercase;
    color: var(--color);
   }
   
   .splashbtn::after, .splashbtn::before {
    content: '';
    display: block;
    height: 100%;
    width: 100%;
    transform: skew(90deg) translate(-50%, -50%);
    position: absolute;
    inset: 50%;
    left: 25%;
    z-index: -1;
    transition: .5s ease-out;
    background-color: var(--color);
   }
   
   .splashbtn::before {
    top: -50%;
    left: -25%;
    transform: skew(90deg) rotate(180deg) translate(-50%, -50%);
   }
   
   .splashbtn:hover::before {
    transform: skew(45deg) rotate(180deg) translate(-50%, -50%);
   }
   
   .splashbtn:hover::after {
    transform: skew(45deg) translate(-50%, -50%);
   }
   
   .splashbtn:hover {
    color: var(--color2);
   }
   
   .splashbtn:active {
    filter: brightness(.7);
    transform: scale(.98);
   }

    /* testing */
.splashmodal{
background: rgba( 88, 182, 38, 0.15 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 6px );
-webkit-backdrop-filter: blur( 6px );
border-radius: 10px;
border: 2px solid rgba( 255, 255, 255, 0.18 );
width: 500px;
}
.toast-container {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1050; /* Adjust z-index as needed */
}
.cs-height{
  height: 200px !important;
}
.csp-height{
  height: 80px !important;
  border: 2px solid #fff;
  border-radius: 15px;
  background-color: #f2f2f2;
  /* opacity: 0.75; */
  padding: 3px 0;
  
}

    </style>
</head>
<body>

<div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="productpage.php">Products</a></li>
      <!-- <li class="breadcrumb-item"><a href="product.php?id=<!?php echo $id_product; ?>">Product</a></li> -->
      <!-- <li class="breadcrumb-item"><a href="product.php?id=14" class="breadcrumb">Product</a></li> -->
      <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
    </ol>
  </nav>
</div>

<div class="container">
    <!-- <h1>Product Page</h1> -->

    <!-- Product Cards -->
    <!-- <div class="product-cards">
        <!?php
        // Example PHP code to fetch and display products
        $products_per_page = 5; // Number of products per page
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
        $offset = ($current_page - 1) * $products_per_page; // Offset for fetching products

        // Simulated database query to fetch products based on pagination
        $total_products = 30; // Total number of products in the database
        $total_pages = ceil($total_products / $products_per_page); // Total number of pages

        // Simulated array of products for the current page
        $products = []; // Initialize an empty array

        // Add products to the array based on the current page and products per page
        for ($i = $offset + 1; $i <= min($offset + $products_per_page, $total_products); $i++) {
            $products[] = ['id' => $i, 'name' => 'Product ' . $i];
        }

        foreach ($products as $product) {
            echo '<div class="product-card">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>Product ID: ' . $product['id'] . '</p>';
            echo '</div>';
        }
        ?>
    </div> -->

    <!-- Product Cards -->
<!-- <div class="container"> -->
    <div class="row mb-3">
    <?php
    include 'db.php';

 // Pagination settings
    $products_per_page = 24; // Number of products per page
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
    $offset = ($current_page - 1) * $products_per_page; // Offset for fetching products

    // Query to count total number of products
    $count_query = "SELECT COUNT(*) AS total FROM product2";
    $count_result = $connection->query($count_query);
    $total_products = $count_result->fetch_assoc()['total'];

    // Calculate total pages
    $total_pages = ceil($total_products / $products_per_page);

    // Query to fetch products based on pagination
    $query = "SELECT id, name, price, description, photo1 FROM product2 LIMIT $offset, $products_per_page";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // echo '<div class="product-card">';
            // echo '<img src="productsimg/' . $row['photo1'] . '" alt="' . $row['name'] . '">';
            // echo '<h3>' . $row['name'] . '</h3>';
            // echo '<p>$' . $row['price'] . '</p>';
            // echo '<p>' . $row['description'] . '</p>';
            // echo '</div>';

            $id_best = $row['id'];
            $name_product = $row['name'];
            $price_product = $row['price'];
            $thumbnail_best = $row['photo1'];
            $description = $row['description'];

        ?>
            <!-- display product -->
            <div class="col-lg-2 col-md-4 col-sm-8">
      <div class="panel panel-primary ">
        <!-- <div class="panel-heading text-center"><span class="card-title blue-text"><?= $name_product; ?></span></div> -->
        <div class="panel-body"><a href="product.php?id=<?= $id_best;  ?>"><img src="productsimg/<?= $thumbnail_best; ?>" class="img-fluid cs-height" style="width:100%" alt="Image"></a></div>
        <div class="panel-heading title text-center csp-height"><span class="card-title "><?= $name_product; ?></span></div>
        <div class="panel-footer"><!--Buy 50 mobiles and get a gift card</div-->
        <div class="card-content">
                            <div class="container text-center">
                                <div class="row mt-3">
                                    <div class="col ss">
                                      <a href="product.php?id=<?= $id_best; ?>">
                                        <p class="pt-3"><i class="left fa fa-dollar"></i> <?= $price_product; ?></p>
                                      </a>
                                    </div>
                                    <!-- <div class="col s6">
                                        <p class="white-text"><i class="left fa fa-shopping-basket"></i> <!?= $totalsold; ?></p>
                                    </div> -->
                                </div>
                            </div>

        </div>
        </div>
      </div>
    </div>

            <!-- end display -->


      <?php  }
    } else {
        echo "No products found.";
    }
    $connection->close();
    ?>
</div>

<!-- Pagination -->
<div class="pagination">
    <?php
    // Render pagination links
    for ($page = 1; $page <= $total_pages; $page++) {
        echo '<a class="paginatenumber mb-3" href="productpage.php?page=' . $page . '">' . $page . '</a>';
    }
    ?>
</div>
</body>

