<?php
session_start();

// Check if the cart is empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    // Redirect to doctors page if cart is empty
    header("Location: doctors.php");
    exit;
}

// Total price calculation
$totalPrice = 0;
foreach ($_SESSION['cart'] as $doctor) {
    $totalPrice += $doctor['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/front.jpg'); /* Background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            padding-top: 50px;
        }

        .doctor-image {
            width: 200px;
            height: 200px;
        }

        .doctor-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .doctor-item {
            margin: 10px;
            background-color: rgba(255, 255, 255, 0.7); /* Doctor item background color with opacity */
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .checkout-summary {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        
        <div class="doctor-container">
            <?php foreach ($_SESSION['cart'] as $doctor): ?>
                <div class="doctor-item">
                    <img class="doctor-image" src="<?= $doctor['image'] ?>" alt="<?= $doctor['name'] ?>" />
                    <p><?= $doctor['name'] ?> - <?= $doctor['qualification'] ?></p>
                    <p>Price: $<?= $doctor['price'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="checkout-summary">
            <h3>Total Price: $<?= $totalPrice ?></h3>
            <!-- Add a form for further checkout steps or payment processing -->
            <form method="post" action="process_checkout.php">
                <!-- Add your checkout form fields here -->
                <button type="submit" class="btn btn-primary">Proceed to Payment</button>
            </form>
        </div>
    </div>
</body>
</html>
