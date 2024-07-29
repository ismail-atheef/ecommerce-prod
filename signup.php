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


require 'includes/signupconfirmation.php'; 
require 'includes/header.php';
require $nav; ?>
<head>
    
</head>
<style>
    .form {
  background-color: #fff;
  display: block;
  padding: 1rem;
  max-width: 400px;
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
  width: 300px;
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
        <!-- <div class="container"> -->



                                <form class="form" method="POST" enctype="multipart/form-data">
                                    <!-- <div class="row"> -->
                                        <p class="form-title">Create your account</p>
                                        <div class="input-container">
                                            <input type="email" placeholder="Enter email" name="email" class="validate" required>
                                            <!-- <span>
                                            </span> -->
                                        </div>
                                        <div class="input-container">
                                            <input type="text" placeholder="Enter first name" name="firstname" class="validate" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" placeholder="Enter last name" name="lastname" class="validate" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="password" placeholder="Enter password" name="password" class="validate value1" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="password" placeholder="Confirm password" name="confirmation" class="validate value2" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" placeholder="Enter city" name="city" class="validate" required>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" placeholder="Enter address" name="address" class="validate" required>
                                        </div>

                                        <div class="center-align">
                                            <!-- <button type="submit" id="confirmed" name="signup" class="btn meh button-rounded waves-effect waves-light ">Sign up</button> -->
                                            <button type="submit" class="submit" id="confirmed" name="signup">
                                                Sign up
                                            </button>
                                            <p class="signup-link">
                                                Got an account?
                                            <a href="./sign.php">Sign in</a>
                                            </p>
                                        </div>

                                        <!-- <p>By Registering, you agree that you've read and accepted our <a href="">User Agreement</a>,
                                            you're at least 18 years old, and you consent to our <a href="">Privacy Notice and receiving</a>
                                            marketing communications from us.</p> -->
                                    </div>
                                </form>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>
