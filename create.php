<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "MYSHOP";

// CREATE CONNECTION
$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Add new client to the database using prepared statements
        $stmt = $connection->prepare("INSERT INTO clients(name, email, phone, address) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $address);

        // Set parameters and execute
        $stmt->execute();
        $stmt->close();

        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $successMessage = "Client added correctly";

        header("location:/MYSHOP/index.php");
        exit;
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('https://pictures.dealer.com/c/crownbmwcharlottesville/0846/9acec7fc7f47ae7d51ce7c69a676cbccx.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #495057;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1>DIGITAL NOMAD GEAR SHOP</h1>
        <div class="container my-5">
            <h2>Login Form</h2>

            <form method="post">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                    </div>
                </div>

                <div class="row">
                     
                <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-outline-primary" href="/MYSHOP/index.php" role="button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
