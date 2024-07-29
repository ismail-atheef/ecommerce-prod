<?php

session_start();

if ($_SESSION['role'] !== 'admin') {
  header('Location: ../index.php');
}

 require 'includes/header.php';
//  require 'includes/navconnected.php'; //require $nav;?>

 <head>
  
 </head>
<style>
body{
  background-color: black;
}
a{
  text-decoration: none;
  color:black;
}
/* .ss{
background-color: black;
} */
/* img{
  height: 20vh;
} */
</style>


<!-- start -->
<main class="d-flex flex-nowrap bg-body-tertiary">
  <!-- <h1 class="visually-hidden">Sidebars examples</h1> -->

  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <!-- <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg> -->
      <span class="fs-4">Admin</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <!-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> -->
          Home
        </a>
      </li>
      <!-- <li>
        <a href="#" class="nav-link text-white">
          <!-\- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg> -\->
          Dashboard
        </a>
      </li> -->
      <!-- <li>
        <a href="#" class="nav-link text-white">
          <!-/- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg> -/->
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <!-/- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg> -/->
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <!-/- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg> -/->
          Customers
        </a>
      </li> -->
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="./users/default.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Admin</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
       
        <li><a class="dropdown-item disabled" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>

  <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" >
  <div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-secondary rounded-3 ">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->

    </ol>
  </nav>
</div>

<div class="container dashboard">
  <div class="row row-cols-3">
    <div class="col col-lg-4 col-md-4 col-sm-8 px-5">
        <div class="panel panel-primary">
        <!-- <div class="panel-heading text-center"><span class="card-title blue-text">test</span></div> -->
              <div class="panel-body"><a href="#"><img src="src/img/product.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
                <div class="panel-footer"><!--Buy 50 mobiles and get a gift card</div-->
                  <div class="card-content">
                            <div class="container text-center">
                                <div class="row mt-3">
                                  <hr>
                                    <div class="col s6 ss p-2">
                                      <p>Products</p>
                                      <div class="btn btn-secondary mb-2">
                                        <a href="addproduct.php" class="blue-text">Add Products</a>
                                      </div>
                                      <div class="btn btn-secondary mb-2">
                                        <a href="editproduct.php" class="blue-text">Edit Products</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
              
        </div>
    </div>

    <div class="col col-lg-4 col-md-4 col-sm-8 px-5">
        <div class="panel panel-primary">
        <!-- <div class="panel-heading text-center"><span class="card-title blue-text">test</span></div> -->
              <div class="panel-body"><a href="#"><img src="src/img/catego.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
                <div class="panel-footer"><!--Buy 50 mobiles and get a gift card</div-->
                  <div class="card-content">
                            <div class="container text-center">
                                <div class="row mt-3">
                                  <hr>
                                    <div class="col s6 ss p-2">
                                      <p>Categories</p>
                                      <div class="btn btn-secondary mb-2">
                                        <a href="addcategory.php" class="blue-text">Add Categories</a>
                                      </div>
                                      <div class="btn btn-secondary mb-2">
                                        <a href="editcategory.php" class="blue-text">Edit Categories</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
              
        </div>
    </div>



    <div class="col col-lg-4 col-md-4 col-sm-8 px-5">
        <div class="panel panel-primary">
        <!-- <div class="panel-heading text-center"><span class="card-title blue-text">test</span></div> -->
              <div class="panel-body"><a href="#"><img src="src/img/user.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
                <div class="panel-footer"><!--Buy 50 mobiles and get a gift card</div-->
                  <div class="card-content">
                            <div class="container text-center">
                                <div class="row mt-3">
                                  <hr>
                                    <div class="col s6 ss p-2">
                                      <p>Users</p>
                                      <div class="btn btn-secondary mb-2">
                                        <a href="allusers.php" class="blue-text">View Users</a>
                                      </div>
                                      <div class="btn btn-secondary mb-2">
                                        <a href="edituser.php" class="blue-text">Edit Users</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                  </div>
                </div>
              
        </div>
    </div>


</div>

         <?php

            include '../db.php';
            //get total users
            $queryusers = "SELECT count(id) as total FROM users";
            $resultusers = $connection->query($queryusers);

            if($resultusers->num_rows > 0) {
              while ($rowusers = $resultusers->fetch_assoc()) {
                $totalusers = $rowusers['total'];
              }
            }

            //get total ordered
            $queryorder = "SELECT count(id) as total, statut FROM command WHERE statut = 'ordered'";
            $resultorder = $connection->query($queryorder);

            if($resultorder->num_rows > 0) {
              while ($roworder = $resultorder->fetch_assoc()) {
                $totalorder = $roworder['total'];
              }
            }

            //get total products
            $queryorder = "SELECT count(id) as total FROM product2";
            $resultorder = $connection->query($queryorder);

            if($resultorder->num_rows > 0) {
              while ($roworder = $resultorder->fetch_assoc()) {
                $totalproduct = $roworder['total'];
              }
            }

            //get total paid commands
            $querypaid = "SELECT count(id) as total, statut FROM command WHERE statut = 'paid'";
            $resultpaid = $connection->query($querypaid);

            if($resultorder->num_rows > 0) {
              while ($rowpaid = $resultpaid->fetch_assoc()) {
                $totalpaid = $rowpaid['total'];
              }
            }
          ?>
  <!-- </div> -->
  <!-- <div class="container mt-5 p-5 bg-body-secondary shadow">
    <div class="row">
         <div class="col s12 m4">
           <div class="card horizontal red lighten-1">
             <div class="card-stacked">
              <div class="card-content">
                <h5 class="white-text"><i class="material-icons left">supervisor_account</i> Total Users</h5>
              </div>
               <div class="card-action">
                 <h5 class="white-text"><?= $totalusers; ?></h5>
               </div>
             </div>
           </div>
         </div> -->
         <div class="container mt-5 p-5 bg-body-secondary shadow">
          <div class="row">
         <div class="card p-3 col" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
              <h5 class="card-title">Total Users<hr></h5>
              <p class="card-text"><?= $totalusers; ?></p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
            </div>
            

            
          <div class="card p-3 col" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
              <h5 class="card-title">Total Products<hr></h5>
              <p class="card-text"><?= $totalproduct; ?></p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
            </div>
            </div>
            </div>
<!-- 
         <div class="col s12 m4">
           <div class="card red lighten-1 horizontal">
             <div class="card-stacked">
              <div class="card-content">
                <h5 class="white-text"><i class="material-icons left">shopping_cart</i> Total Orders</h5>
              </div>
               <div class="card-action">
                 <h5 class="white-text"><?= $totalorder; ?></h5>
               </div>
             </div>
           </div>
         </div> -->

         <!-- <div class="col s12 m4">
           <div class="card red lighten-1 horizontal">
             <div class="card-stacked">
              <div class="card-content">
                <h5 class="white-text"><i class="material-icons left">shopping_cart</i> Total Payments</h5>
              </div>
               <div class="card-action">
                 <h5 class="white-text"><?= $totalpaid; ?></h5>
               </div>
             </div>
           </div>
         </div>
       </div>
    </div>
  </div>
  </div> -->
</main>
<!-- end -->




 <?php require 'includes/footer.php'; ?>
