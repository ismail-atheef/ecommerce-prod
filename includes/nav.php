
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php"><img src="src/img/logo1.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
          <div class="collapse navbar-collapse" id="mynavbar">
                  <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./sign.php">Sign in</a>
                        </li>
                        <li class="nav-item">
                          <!-- <a class="nav-link" href="./cart.php">Cart</a> -->
                        </li>
                  </ul>
                  <ul>
                      <form class="d-flex" method="GET" action="search.php">
                        <div class="input-field d-flex">
                            <input  class="form-control me-2 searching" type="search" placeholder="Search" name='searched' required>
                            <button class="btn btn-primary" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                      </form>
                </ul>
                <!-- <ul>
                <li class="nav-item">
                          <a class="nav-link" style="color:white;"href="./sign.php"><h4><i class="bi bi-person-circle"></h4></i></a>
                        </li>
                </ul> -->
          </div>
  </div>
</nav>