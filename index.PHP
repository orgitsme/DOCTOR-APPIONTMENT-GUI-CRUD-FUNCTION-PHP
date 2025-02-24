<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "MYSHOP";

// Creating connection
$connection = new mysqli($servername, $username, $password, $database);

// Checking connection for errors
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Read all rows from the database
$sql = "SELECT * FROM clients";
$result = $connection->query($sql);

// Check for query errors
if (!$result) {
    die("Invalid Query: " . $connection->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSHOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('images/front.jpg'); /* Set the correct path to your local image */
            background-size: cover;
            background-position: center;
            color: #495057;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            text-align: center; /* Center-align text within the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
        }

        /* Table styling */
        table {
            border: 1px solid #ddd;
            border-collapse: collapse; /* Remove border between cells */
            width: 100%; /* Make table responsive */
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        /* Button styling */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }

        .btn-primary:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.2);
        }

        /* Custom style for DELETE button */
        .btn-delete {
            background-color: #dc3545; /* Red color for DELETE button */
            border-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #bd2130; /* Darker red on hover for DELETE button */
            border-color: #bd2130;
        }

        /* Custom style for HOME button */
        .btn-home {
            background-color: #28a745; /* Green color for HOME button */
            border-color: #28a745;
        }

        .btn-home:hover {
            background-color: #218838; /* Darker green on hover for HOME button */
            border-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1>CLINIC</h1>
        <!-- Other content here -->
        <h2>List of PATIENTS</h2>
        <a class="btn btn-primary" href="/MYSHOP/create.php" role="button">New Client</a>
        <a class="btn btn-delete" href="/MYSHOP/report.php" role="button">Generate Report</a>
        <a class="btn btn-home" href="/MYSHOP/front_page.php" role="button">Home</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Read data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['created_at']}</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/MYSHOP/edit.php?id={$row['id']}'>EDIT</a>
                            <a class='btn btn-delete btn-sm' href='/MYSHOP/delete.php?id={$row['id']}'>DELETE</a>
                        </td>
                    </tr>
                    ";
                }

                // Close database connection (optional, but good practice)
                $connection->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
