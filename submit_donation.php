<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'charity_db';

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

$product_name = $_POST['product_name'];
$quality = $_POST['quality'];
$quantity = $_POST['quantity'];

$query = "INSERT INTO donations_items (product_name, quality, quantity) 
          VALUES ('$product_name', '$quality', '$quantity')";

if (mysqli_query($connection, $query)) {
    echo "New record created successfully";
            header("Location: index.php");

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>