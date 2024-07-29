<?php

session_start();

if (!isset($_SESSION['logged_in'])) {
    $nav = 'includes/nav.php';
} else {
    $nav = 'includes/navconnected.php';
    $idsess = $_SESSION['id'];
}

// require 'includes/header.php';
// require $nav; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"-->
    <!-- <link rel="stylesheet" href="/ecommerce-prod/src/css/style.css"> -->
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    
      <!-- our project just needs Font Awesome Solid + Brands -->
  <link href="/ecommerce-prod/src/css/fontawesome.css" rel="stylesheet" />
  <link href="/ecommerce-prod/src/css/brands.css" rel="stylesheet" />
  <link href="/ecommerce-prod/src/css/solid.css" rel="stylesheet" />
    
</head>

<style>
.jumbo{
  background-color: black;
  background-image: url("./src/img/1401.i016.019.S.m001.c10.ecommerce_background.jpg");
  /* background-attachment: fixed; */
  background-size: cover;
}
.jumboh1{
  /* color:purple; */
  color: purple !important;
  font-size: 90px;
  font-weight: 600;
  letter-spacing: -1px;
  line-height: 30px;
  

}
body{
  background-color: #ffaa00;
  /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpath fill='%23ffb100' d='M486 705.8c-109.3-21.8-223.4-32.2-335.3-19.4C99.5 692.1 49 703 0 719.8V800h843.8c-115.9-33.2-230.8-68.1-347.6-92.2C492.8 707.1 489.4 706.5 486 705.8z'/%3E%3Cpath fill='%23ffb800' d='M1600 0H0v719.8c49-16.8 99.5-27.8 150.7-33.5c111.9-12.7 226-2.4 335.3 19.4c3.4 0.7 6.8 1.4 10.2 2c116.8 24 231.7 59 347.6 92.2H1600V0z'/%3E%3Cpath fill='%23ffbe00' d='M478.4 581c3.2 0.8 6.4 1.7 9.5 2.5c196.2 52.5 388.7 133.5 593.5 176.6c174.2 36.6 349.5 29.2 518.6-10.2V0H0v574.9c52.3-17.6 106.5-27.7 161.1-30.9C268.4 537.4 375.7 554.2 478.4 581z'/%3E%3Cpath fill='%23ffc500' d='M0 0v429.4c55.6-18.4 113.5-27.3 171.4-27.7c102.8-0.8 203.2 22.7 299.3 54.5c3 1 5.9 2 8.9 3c183.6 62 365.7 146.1 562.4 192.1c186.7 43.7 376.3 34.4 557.9-12.6V0H0z'/%3E%3Cpath fill='%23ffcc00' d='M181.8 259.4c98.2 6 191.9 35.2 281.3 72.1c2.8 1.1 5.5 2.3 8.3 3.4c171 71.6 342.7 158.5 531.3 207.7c198.8 51.8 403.4 40.8 597.3-14.8V0H0v283.2C59 263.6 120.6 255.7 181.8 259.4z'/%3E%3Cpath fill='%23ffd914' d='M1600 0H0v136.3c62.3-20.9 127.7-27.5 192.2-19.2c93.6 12.1 180.5 47.7 263.3 89.6c2.6 1.3 5.1 2.6 7.7 3.9c158.4 81.1 319.7 170.9 500.3 223.2c210.5 61 430.8 49 636.6-16.6V0z'/%3E%3Cpath fill='%23ffe529' d='M454.9 86.3C600.7 177 751.6 269.3 924.1 325c208.6 67.4 431.3 60.8 637.9-5.3c12.8-4.1 25.4-8.4 38.1-12.9V0H288.1c56 21.3 108.7 50.6 159.7 82C450.2 83.4 452.5 84.9 454.9 86.3z'/%3E%3Cpath fill='%23ffef3d' d='M1600 0H498c118.1 85.8 243.5 164.5 386.8 216.2c191.8 69.2 400 74.7 595 21.1c40.8-11.2 81.1-25.2 120.3-41.7V0z'/%3E%3Cpath fill='%23fff852' d='M1397.5 154.8c47.2-10.6 93.6-25.3 138.6-43.8c21.7-8.9 43-18.8 63.9-29.5V0H643.4c62.9 41.7 129.7 78.2 202.1 107.4C1020.4 178.1 1214.2 196.1 1397.5 154.8z'/%3E%3Cpath fill='%23ffff66' d='M1315.3 72.4c75.3-12.6 148.9-37.1 216.8-72.4h-723C966.8 71 1144.7 101 1315.3 72.4z'/%3E%3C/g%3E%3C/svg%3E"); */
  background-image: url("./src/img/sun-tornado.svg");
  background-attachment: fixed;
  background-size: cover;
}
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
#home{
    background-image: url('./src/img/vecteezy_online-shopping-on-phone-buy-sell-business-digital-web_4299835.jpg');
    width: 100%;
    height: 80vh;
    /*background-repeat: no-repeat;*/
    background-size: cover;
    /* background-position-x: 90px;
    background-position-y: -150px; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}

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
}

</style>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Family Grocer</h1>      
    <p>BY SIBCO</p>
  </div>
</div>
<?php
require $nav;?>

<section id="home">
        <div class="container text-left splashmodal p-5 ">
            <h5>New Arrivals</h5>
            <h1><span>The Best</span> Sellers</h1>
            <p>Eshop offers the best products for the most affordable prices</p>
            <!-- <button class="splashbtn">Shop Now</button> -->
            <a href="productpage.php"><button class="splashbtn">Shop Now</button></a>
        </div>
      </section>
      <section>
              <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                    <div class="container">
                      <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                    <div class="container">
                      <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                    <div class="container">
                      <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
      </section>

<section id="featured" class="my-5 pb-5">

<div class="container">    
  <div class="row ">
        <!-- connect to DB and fetch products-->
        <div class="container text-center">
          <h3>Our Featured</h3>
          <hr class="mx-auto mt-5">
          <!-- <p>Here you can check our featured products</p> -->
        </div>
    <?php

        include 'db.php';

        // selecting product available in largest quantity
        $queryfirst = "SELECT
    product2.id as 'id',
    product2.name as 'name',
    product2.price as 'price',
    product2.photo1 as 'thumbnail',
    
    SUM(command.quantity) as 'total',
    command.statut,
    command.id_product
    
    FROM product2, command
    WHERE product2.id = command.id_product AND command.statut = 'paid'
    GROUP BY product2.id
    ORDER BY SUM(command.quantity) DESC LIMIT 6";
        $resultfirst = $connection->query($queryfirst);
        if ($resultfirst->num_rows > 0) {
            // output data of each row
            while ($rowfirst = $resultfirst->fetch_assoc()) {

                $id_best = $rowfirst['id'];
                $name_best = $rowfirst['name'];
                $price_best = $rowfirst['price'];
                $thumbnail_best = $rowfirst['thumbnail'];
                $totalsold = $rowfirst['total'];

        ?>

    <div class="col-lg-2 col-md-4 col-sm-8">
      <div class="panel panel-primary">
        <div class="panel-heading text-center csp-height"><span class="card-title"><?= $name_best; ?></span></div>
        <div class="panel-body"><a href="product.php?id=<?= $id_best;  ?>"><img src="productsimg/<?= $thumbnail_best; ?>" class="img-fluid cs-height" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer"><!--Buy 50 mobiles and get a gift card</div-->
        <div class="card-content">
                            <div class="container text-center">
                                <div class="row mt-3">
                                    <div class="col s6 ss">
                                      <a href="product.php?id=<?= $id_best; ?>">
                                        <p class="white-text pt-3"><i class="left fa fa-dollar"></i> <?= $price_best; ?></p>
                                      </a>
                                    </div>
                                    <!-- <div class="col s6">
                                        <p class="white-text"><i class="left fa fa-shopping-basket"></i> <?= $totalsold; ?></p>
                                    </div> -->
                                </div>
                            </div>

        </div>
        </div>
      </div>
    </div>

    <?php }
        } ?>

  </div>
</div><br>

      </section>
      
      <!-- <section id="home">
      <div class="container splashmodal p-5">
            <h5>New Arrivals</h5>
            <h1><span>The Best</span> Sellers</h1>
            <p>Eshop offers the best products for the most affordable prices</p>
            <button class="splashbtn">Shop Now</button>
        </div>
      </section> -->
      <section class="jumbo">
                  <div class="my-5 ">
                    <div class="p-5 text-center bg-body-tertiary jumbo">
                      <div class="container py-5 ">
                        <h1 class="text-body-emphasis jumboh1">NEW YEAR SALE</h1>
                        <p class="col-lg-8 mx-auto lead">
                          <!-- <img src="./src/img/lucas-favre-4x-67z_TaGo-unsplash.jpg" alt="" style="background-attachment: fixed; background-size: cover;"> -->
                          
                        </p>
                      </div>
                    </div>
                  </div>
      </section>




<section id="category" class="my-5 pb-5">

<!-- <div class="container-fluid center-align categories"> -->
    <!-- <a href="#category" class="button-rounded btn-large waves-effect waves-light">Categories</a> -->
    <div class="container" id="category">
        <div class="row">
        <div class="container text-center">
          <h3>Categories</h3>
          <hr class="mx-auto mt-5">
	  </div>
            <?php

            //get categories
            $querycategory = "SELECT id, name, icon  FROM category";
            $total = $connection->query($querycategory);
            if ($total->num_rows > 0) {
                // output data of each row
                while ($rowcategory = $total->fetch_assoc()) {
                    $id_category = $rowcategory['id'];
                    $name_category = $rowcategory['name'];
                    $icon_category = $rowcategory['icon'];

            ?>
        <div class="col-lg-2 col-md-4 col-sm-8 mb-4">
        <div class="panel panel-primary ss shadow">
          <div class="panel-heading"></div>
            <div class="panel-body text-center pt-3"><a href="category.php?id=<?= $id_category;  ?>"><img src="admin/src/img/<?= $icon_category; ?>" class="img-responsive" style="width: 100px;" alt="Image"></a></div>
              <div class="panel-footer"><!--Buy 50 mobiles and get a gift card</div-->
                <div class="card-content">
                            <div class="container text-center">
                                <div class="row mt-3">
                                  <!-- <div class="col s6"> -->
                                  <div>
                                        <p class="white-text pt-3"> <?= $name_category; ?></p>
                                    </div>
                                </div>
                            </div>

                </div>
              </div>
            <!-- </div> -->
          <!-- </div> -->
        </div>
                </div>


            <?php }
            } ?>
        </div>
    </div>
<!-- </div> -->
          </section>
          </body>
<section class="my-5 pt-5 pb-5" id="aboutus">
<div class="container-fluid about" id="about">
    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-md-6 col-sm-8">
                <h3 class="animated slideInUp wow">About Us</h3>
                <!-- <div class="divider animated slideInUp wow"></div> -->
                <p class="animated slideInUp wow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere erat leo, in facilisis turpis consequat a. Sed egestas, odio in imperdiet euismod, ligula arcu vehicula odio, in rutrum mi velit vitae ligula. Sed orci sapien, pellentesque quis suscipit vitae, ultrices ut neque. Fusce eget lectus lacus. Vivamus vestibulum lacus enim. Maecenas non risus dictum, eleifend purus sed, scelerisque quam. Phasellus ac neque auctor, aliquet felis eleifend, interdum justo. Praesent consequat fermentum enim, sed porta enim. Curabitur eget malesuada nisl. Nunc ut convallis ante, nec dignissim sem. </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8">
            <form class="form">
              <div class="title">Contact us</div>
              <input type="text" placeholder="Your email" class="input">
              <textarea placeholder="Your message"></textarea>
     
              <button>Submit</button>
            </form>
            </div>

        </div>
    </div>
</div>
</section>


                                <!-- Bootstrap Toast -->
                <div class="toast-container">
                <div class="toast" id="attentionToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                <div class="toast-header bg-warning text-white">
                <strong class="mr-auto">Attention!</strong>
                <!-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"> -->
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="toast-body">
                No Item in cart!
            </div>
        </div>
    </div>

    <div class="toast-container">
                <div class="toast" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                <div class="toast-header bg-success text-white">
                <strong class="mr-auto">Success</strong>
                <!-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"> -->
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="toast-body">
                Profile is updated!
            </div>
        </div>
    </div>

   <!-- Include Bootstrap JavaScript and jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <!-- JavaScript to show the Toast -->
    <script>
        $(document).ready(function(){
            // Check if the success parameter is present in the URL
            if(getUrlParameter('nocart') === '1') {
                // Show the toast
                $('#attentionToast').toast('show');
            }
            else if(getUrlParameter('edtprofile') === '1'){
               // Show the toast of user profile edit
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






<footer class="container-fluid text-center">
  <p>Family Grocer Copyright 2024</p>  
  <!-- <form class="form">
    <div class="title">Contact us</div>
    <input type="text" placeholder="Your email" class="input">
    <textarea placeholder="Your message"></textarea>
     
    <button>Submit</button>
</form> -->
</footer>