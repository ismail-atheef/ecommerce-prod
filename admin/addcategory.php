<?php

session_start();

if (!isset($_SESSION['id'])) {
header('Location: ../sign.php');
}
else {

error_reporting(0);

require 'includes/header.php';
require 'includes/navconnected.php'; }
?>
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
      <li class="breadcrumb-item"><a href="addcategory.php">add Category</a></li>

    </ol>
  </nav>
</div>

<div class="container mb-4">
    <form method="POST" enctype="multipart/form-data" action="success-category.php">
        <div class="card">
            <!-- <!?php
            include '../db.php';
            ?> -->
   

            <div class="row p-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Item name" required>
                        <label for="name">Category name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-file">
                        <label class="form-file-label" for="photo1">
                            <span class="form-file-text">Icon</span>
                        </label>
                        <input type="file" class="form-file-input card" id="categoryIcon" name="categoryIcon" accept="image/*" >
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
                Category added successfully!
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
