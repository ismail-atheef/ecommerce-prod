<?php

session_start();

if (!isset($_SESSION['logged_in'])) {
    $nav ='includes/nav.php';
}

elseif($_SESSION['logged_in'] == 'True') {
    header('Location: index.php');
}

else{
    $nav ='includes/navconnected.php';
    $idsess = $_SESSION['id'];
}
error_reporting(0);

require 'includes/header.php';
require $nav; ?>

<head>
    
</head>
<style>


/* end of line   */
.navbar {
  /* margin-bottom: 50px; */
  border-radius: 0;
}
.form {
  background-color: #fff;
  display: block;
  padding: 1rem;
  max-width: 450px;
  border-radius: 0.5rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  text-align: center;
  color: #000;
}

.input-container {
  position: relative;
}

.input-container input, .form button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 400px;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.submit {
  display: block;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color: #4F46E5;
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100%;
  border-radius: 0.5rem;
  text-transform: uppercase;
}

.signup-link {
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
  text-align: center;
}

.signup-link a {
  text-decoration: underline;
}
</style>


<div class="container-fluid mt-5 pt-5">
    
    <div class="d-flex justify-content-center">
            <div class="row">
                                <form class="form " method="POST">
                                    <p class="form-title">Sign in to your account</p>
                                    <!-- <!?php require 'includes/loginconfirmation.php';?> -->
                                    <div class="input-container ">
                                        <input type="text" placeholder="Enter email" name="emaillog" class="validate">
                                        <span>
                                        </span>
                                    </div>
                                    <div class="input-container">
                                        <input type="password" name="passworddb" class="validate" placeholder="Enter password">
                                    </div>
                                    <?php require 'includes/loginconfirmation.php';?>
                                    <button type="submit" class="submit" name="login">
                                        Sign in
                                    </button>

                                    <p class="signup-link">
                                        No account?
                                        <a href="./signup.php">Sign up</a>
                                    </p>
                            </form>


            </div>
            </div>

</div>


<?php require 'includes/footer.php'; ?>
