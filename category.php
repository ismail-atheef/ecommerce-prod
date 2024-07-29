<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    $nav ='includes/nav.php';
}
else {
    $nav ='includes/navconnected.php';
    $idsess = $_SESSION['id'];
}

if(!isset($_GET['id'])){
    header('Location: index');
}

$id_category =$_GET['id'];
require 'includes/header.php';
require $nav; ?>
<head>
    <!-- <link rel="stylesheet" href="/ecommerce-prod/src/css/style.css"> -->
</head>
<style>
      a{
      text-decoration: none;
      color:black;
    }
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
</style>
<div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <!-- <li class="breadcrumb-item"><a href="product.php?id=<!?php echo $id_product; ?>" class="breadcrumb">Product</a></li> -->
      <li class="breadcrumb-item"><a href="category.php?id=<?= $id_category; ?>">Category</a></li>
    </ol>
  </nav>
</div>

<div class="container">
  <div class="row">
    <div class="col-2">
    <div class="collection card">
                <?php

                include 'db.php';

                //get categories
                $querycategory = "SELECT id, name FROM category";
                $total = $connection->query($querycategory);
                if ($total->num_rows > 0) {
                    // output data of each row
                    while($rowcategory = $total->fetch_assoc()) {
                        $id_categorydb = $rowcategory['id'];
                        $name_category = $rowcategory['name'];
                        ?>
                        <a href="category.php?id=<?= $id_categorydb; ?>" class='btn btn-light <?php if($id_categorydb == $id_category) {echo"active";} ?>' ><?= $name_category; ?></a>
                    <?php }} ?>
            </div>
       </div>
    <div class="col">
      <div class="container text-center">
        <div class="row row-cols-3">

                    <?php
                    //get products

                    //pages links
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $perpage = isset($_GET['per-page']) && $_GET['per-page'] <= 16 ? (int)$_GET['per-page'] : 16;

                    $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

                    $queryproduct = "SELECT SQL_CALC_FOUND_ROWS id, name, price, photo1 FROM product2 WHERE id_category = '{$id_category}' ORDER BY id DESC LIMIT {$start}, 16";
                    // $queryproduct = "SELECT SQL_CALC_FOUND_ROWS id, name, price, id_picture, thumbnail FROM product WHERE id_category = '{$id_category}' ORDER BY id DESC LIMIT {$start}, 16";
                    $result = $connection->query($queryproduct);

                    //pages
                    $total = $connection->query("SELECT FOUND_ROWS() as total")->fetch_assoc()['total'];
                    $pages = ceil($total / $perpage);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($rowproduct = $result->fetch_assoc()) {
                            $id_product = $rowproduct['id'];
                            $name_product = $rowproduct['name'];
                            $price_product = $rowproduct['price'];
                            // $id_pic = $rowproduct['id_picture'];
                            // $thumbnail_product = $rowproduct['thumbnail'];
                            $thumbnail_product = $rowproduct['photo1'];

                            ?>
                            <div class="col mb-2">
                          <div class="card">
                          <a class="btn btn-light" href="product.php?id=<?= $id_product; ?>">
                                <img class="card-img-top" src="productsimg/<?= $thumbnail_product; ?>" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title"><?= $name_product; ?></h5>

                                <p class="card-text"><small class="text-muted"><?= $price_product; ?> $</small></p>
                                </div>
                        </a>
                            </div>
                            </div>
                

                        <?php }} ?>
                        </div>
        </div>
</div>


<!-- <?php
// require 'includes/secondfooter.php';
// require 'includes/footer.php'; ?> -->
