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
      <li class="breadcrumb-item"><a href="addproduct.php">Category</a></li>

    </ol>
  </nav>
</div>

<div class="container addproduct">
  <div class="container">
    <div class="row">
      <h3 class="text-center">Please Choose a Category</h3>
        <?php
        include '../db.php';

        //get categories
          $querycategory = "SELECT id, name, icon  FROM category";
          $total = $connection->query($querycategory);
          if ($total->num_rows > 0) {
          // output data of each row
          while($rowcategory = $total->fetch_assoc()) {
            $id_category = $rowcategory['id'];
            $name_category = $rowcategory['name'];
            $icon_category = $rowcategory['icon'];

        ?>

        <div class="col-lg-2 col-md-4 col-sm-8 pb-4">
        <div class="panel panel-primary shadow">
          <!-- <div class="panel-heading"></div> -->
            <div class="panel-body text-center pt-3"><a href="addp.php?id=<?= $id_category; ?>&category=<?= $name_category; ?>&icon=<?= $icon_category; ?>"><img src="src/img/<?= $icon_category; ?>" class="img-responsive" style="width: 100px;" alt="Image"></a></div>
              <div class="panel-footer">
                <div class="card-content">
                            <div class="container text-center">
                                <div class="row mt-3">

                                  <div>
                                        <p class="white-text pt-3"> <?= $name_category; ?></p>
                                    </div>
                                </div>
                            </div>

                </div>
              </div>

        </div>
                </div>

      <?php }} ?>
    </div>
  </div>
</div>

<!-- start -->
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
                Product added successfully!
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
