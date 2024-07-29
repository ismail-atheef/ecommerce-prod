<?php

session_start();

// error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!isset($_GET['id']) && !isset($_GET['category']) && !isset($_GET['icon'])){
    header('Location: index.php');

}

else {
    $id_category =$_GET['id'];
    $name_category =$_GET['category'];
    $caticon =$_GET['icon'];

    // Store $id_category in session variable
    // echo "ID Category: $id_category"; // Debugging
    $_SESSION['id_category'] = $id_category;
    // echo "Session ID kCategory: " . $_SESSION['id_category']; // Debugging
    require 'includes/header.php';
    require 'includes/navconnected.php'; } ?>

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
    <ol class="breadcrumb p-3 bg-body-secondary rounded-3 ">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="addproduct.php">Category</a></li>
      <li class="breadcrumb-item"><a href="#">add Product</a></li>

    </ol>
  </nav>
</div>

<div class="container mb-4">
    <form method="POST" enctype="multipart/form-data" action="success2.php">
        <div class="card">
            <?php
            include '../db.php';
            ?>
            <div class="d-flex justify-content-center row">
                <div class="col-2 p-3">
                <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="src/img/<?= $caticon; ?>" alt="Category Icon">
                </div>
                <!-- <img class="img-fluid img-thumbnail rounded mx-auto d-block" src="src/img/<!?= $caticon; ?>.png" alt="Category Icon"> -->
            </div>

            <div class="row p-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Item name" required>
                        <label for="name">Item name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        <label for="price">Price</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="description" name="description" placeholder="Description" required></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-file">
                        <label class="form-file-label" for="photo1">
                            <span class="form-file-text">Thumbnail</span>
                        </label>
                        <input type="file" class="form-file-input card" id="photo1" name="photo1" accept="image/*" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-file">
                        <label class="form-file-label" for="photo2">
                            <span class="form-file-text">Additional Pictures</span>
                        </label>
                        <input type="file" class="form-file-input card" id="photo1" name="photo2" accept="image/*" >
                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-2"> -->
                    <div class="form-file">
                        <label class="form-file-label" for="photo3">
                            <!-- <span class="form-file-text">Additional Picture</span> -->
                        </label>
                        <input type="file" class="form-file-input card " id="photo1" name="photo3" accept="image/*" >
                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-2"> -->
                    <div class="form-file">
                        <label class="form-file-label" for="photo4">
                            <!-- <span class="form-file-text">Additional Picture</span> -->
                        </label>
                        <input type="file" class="form-file-input card " id="photo1" name="photo4" accept="image/*" >
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-3">
                <button type="submit" name="done" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <!-- <!?php require 'success.php'; ?> -->
    </form>
</div>



</div>


<?php require 'includes/footer.php'; ?>
