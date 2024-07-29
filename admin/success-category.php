<?php
session_start();
include '../db.php'; // Include your database connection file

        if(isset($_POST['done'])) {
            $categoryName = $_POST['name'];
            $categoryIcon = $_FILES['categoryIcon']['name']; // Get the file name

            // Move the uploaded file to a folder (e.g., icons)
            $uploadDirectory = './src/img/';
            move_uploaded_file($_FILES['categoryIcon']['tmp_name'], $uploadDirectory . $categoryIcon);

            // Insert data into the database
            $queryInsertCategory = "INSERT INTO category (name, icon) VALUES ('$categoryName', '$categoryIcon')";

            // if ($connection->query($queryInsertCategory) === TRUE) {
            if(mysqli_query($connection, $queryInsertCategory)) {
                // echo "Category added successfully.";

                mysqli_close($connection);
                // Redirect to addproduct.php with success message
                header('Location: ./addcategory.php?success=1');
            
                exit();

            } else {
                echo "Error: " . $queryInsertCategory . "<br>" . $connection->error;
            }
        }

        $connection->close();
?>




            
<?php require 'includes/footer.php'; ?>
