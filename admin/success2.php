<?php
session_start();
include '../db.php'; // Include your database connection file

// Check if form is submitted
if(isset($_POST['done'])) {
      // Retrieve $id_category from session variable
      if (isset($_SESSION['id_category'])) {
        $id_category = $_SESSION['id_category'];
        echo "Retrieved ID Category: $id_category"; // Debugging
      } else {
        // Handle case where $id_category is not set in session
        echo "Error: Category ID not found.";
        exit(); // Stop further execution
      }
    // Escape user inputs for security
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);




// File upload logic for product photos
$productPhotos = array();
$uploadDirectory = '../productsimg/'; // Directory to store product photos
$allowedExtensions = array('jpg', 'jpeg', 'png');

foreach(['photo1', 'photo2', 'photo3', 'photo4'] as $key => $inputName) {
    if(isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
        $extension = pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION);
        if(in_array($extension, $allowedExtensions)) {
            $productPhotos[$key] = $_FILES[$inputName]['name'];
            move_uploaded_file($_FILES[$inputName]['tmp_name'], $uploadDirectory . $productPhotos[$key]);
        }
    }
}

// Insert query for product
$query = "INSERT INTO product2 (name, price, id_category, description, photo1, photo2, photo3, photo4) VALUES ('$name', '$price', '$id_category', '$description', '$productPhotos[0]', '$productPhotos[1]', '$productPhotos[2]', '$productPhotos[3]')";

if(mysqli_query($connection, $query)) {
    // header("../index.php");
    // echo "Product added successfully.";
    // header('Location: ./addproduct.php');
    // echo "<h5 class='text-success'>Product added successfully.</h5>";
    mysqli_close($connection);
    // Redirect to addproduct.php with success message
    header('Location: ./addproduct.php?success=1');

    exit();
    
    // header("./admin/addproduct.php");
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
}

// Close connection
mysqli_close($connection);
}
?>
            
<?php require 'includes/footer.php'; ?>
