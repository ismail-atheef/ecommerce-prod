<style>
  .custom-dropdown-menu {
    left: auto !important;
    right: 0;
}
</style>
<!-- <ul id="dropdown2" class="dropdown-content">
<li><a class="blue-text" href="editprofile.php">Edit</a></li>
<li><a class="blue-text" href="logout.php">Log out</a></li>
</ul>
<div class="navbar-fixed">
 <nav class="navblack">
   <div class="nav-wrapper nav-wrapper-2 container white">
   <ul class="left hide-on-med-and-down">
     <li><a href="index.php" class="dark-text">E-Commerce</a></li>

   </ul>

   <ul  class="right hide-on-med-and-down">
       <li><a href="index.php" class="dark-text">Dashboard</a></li>
     <li><a href="profile.php" class="nohover dropdown-button" class="dropdown-button" href="#!" data-activates="dropdown2"><img class="responsive-img" src="users/default.jpg">
       <i class="fa fa-angle-down dark-text right"></i></a></li>
   </ul>
 </div>
 </nav>
</div> -->


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><img src="src/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="mynavbar">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link" href="./index.php">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="./sign.php">Sign in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./cart.php">Cart</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                  </a> -->
                  
                  <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="blue-text" href="editprofile.php">Edit</a></li>
                    <li><a class="blue-text" href="logout.php">Log out</a></li>
                  </ul>
                </li>
              </ul> -->

              <div class="btn-group dropstart">
                    <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img  src="users/default.jpg" width="40" height="40" class="rounded-circle">
                    </a>
                  <div class="dropdown-menu">
                      <li><a class="dropdown-item" href="index.php">Home</a></li>
                      <!-- <li><a class="dropdown-item" href="cart.php">shopping_cart</a></li> -->
                      <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                      <!-- <h6 class="dropdown-header">Dropdown header</h6> -->
                      <!-- <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a> -->
                  </div>
              </div>



              
        </div>
  </div>
</nav>
