<?php

// CREATE CONNECTION
$servername = "localhost";
$username = "root";
$password = "";
$database = "MYSHOP";

$connection = new mysqli($servername, $username, $password, $database);

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:/MYSHOP/index.php");
        exit;
    }

    $id = $_GET['id'];

    // Delete the client from the database
    $sql = "DELETE FROM clients WHERE id=$id";
    $result = $connection->query($sql);

    if (!$result) {
        $errorMessage = "Invalid Query: " . $connection->error;
    } else {
        $successMessage = "Client deleted successfully";
    }

    header("location:/MYSHOP/index.php");
    exit;
}

?>
