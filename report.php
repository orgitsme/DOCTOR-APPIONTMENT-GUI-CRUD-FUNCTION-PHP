<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSHOP Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center-align text within the container */
        }

        h1 {
            color: #dc3545; /* Red color for report page heading */
        }

        .report {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1>Client Report</h1>
        <div class="report">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = ""; // Replace with your secure password
            $database = "MYSHOP";

            // Creating connection
            $connection = new mysqli($servername, $username, $password, $database);

            // Checking connection for errors
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            // Count the total number of clients
            $totalClientsSql = "SELECT COUNT(*) as total_clients FROM clients";
            $totalClientsResult = $connection->query($totalClientsSql);
            $totalClients = $totalClientsResult->fetch_assoc()['total_clients'];

            // Display the report
            echo "<p>Total number of clients: $totalClients</p>";

            // Close database connection (optional, but good practice)
            $connection->close();
            ?>
        </div>
    </div>
</body>

</html>
