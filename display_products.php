<?php
session_start();

// Initialize cart array if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Updated doctor array with raw details including default prices
$doctors = [
    ['id' => 1, 'name' => 'Dr. MAZDOR', 'qualification' => 'MD, PhD', 'image' => 'https://png.pngtree.com/png-clipart/20230918/ourmid/pngtree-photo-men-doctor-physician-chest-smiling-png-image_10132895.png', 'price' => 50],
    ['id' => 2, 'name' => 'Dr. TILU COMLEX', 'qualification' => 'MBBS, MS', 'image' => 'https://img.freepik.com/premium-photo/smiling-nurse-portrait-isolated-white-using-digital-tablet_53419-9441.jpg', 'price' => 60],
    ['id' => 3, 'name' => 'Dr. SHEMI', 'qualification' => 'MD, DNB', 'image' => 'https://png.pngtree.com/png-clipart/20230918/ourmid/pngtree-photo-men-doctor-physician-chest-smiling-png-image_10132895.png', 'price' => 55],
    ['id' => 4, 'name' => 'Dr. MOYE MOYE', 'qualification' => 'MBBS, MD', 'image' => ' https://img.freepik.com/premium-photo/smiling-nurse-portrait-isolated-white-using-digital-tablet_53419-9441.jpg', 'price' => 65],
    ['id' => 5, 'name' => 'Dr. ALA DITA', 'qualification' => 'MBBS, MS', 'image' => 'https://png.pngtree.com/png-clipart/20230918/ourmid/pngtree-photo-men-doctor-physician-chest-smiling-png-image_10132895.png', 'price' => 70],
    ['id' => 6, 'name' => 'Dr. SHELAA', 'qualification' => 'MD, DM', 'image' => 'https://img.freepik.com/premium-photo/smiling-nurse-portrait-isolated-white-using-digital-tablet_53419-9441.jpg', 'price' => 75],
    ['id' => 7, 'name' => 'Dr.BHOLA', 'qualification' => 'MBBS, MS', 'image' => 'https://e7.pngegg.com/pngimages/766/694/png-clipart-nursing-care-physician-medicine-health-care-female-doctor-service-medical.png', 'price' => 80],
    ['id' => 8, 'name' => 'Dr. RED MOLI', 'qualification' => 'MD, DNB', 'image' => 'https://img.freepik.com/premium-photo/smiling-nurse-portrait-isolated-white-using-digital-tablet_53419-9441.jpg', 'price' => 85],
    ['id' => 9, 'name' => 'Dr. SHAME NATSON', 'qualification' => 'MBBS, MD', 'image' => 'https://e7.pngegg.com/pngimages/766/694/png-clipart-nursing-care-physician-medicine-health-care-female-doctor-service-medical.png', 'price' => 90],
];

// Check if the "Book an Appointment" form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book_appointment'])) {
    $doctorId = $_POST['doctor_id'];

    // Find the selected doctor
    $selectedDoctor = null;
    foreach ($doctors as $doctor) {
        if ($doctor['id'] == $doctorId) {
            $selectedDoctor = $doctor;
            break;
        }
    }

    // Add the selected doctor to the cart with additional details including price
    if ($selectedDoctor) {
        $selectedDoctor['price'] = $selectedDoctor['price'];
        $_SESSION['cart'][] = $selectedDoctor;
    }

    // Redirect to checkout page with doctor's ID
    header("Location:credit_card_form.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/front.jpg'); /* Background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
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

        .book-appointment-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .book-appointment-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="color: #fff;">Doctors</h2>

        <div class="doctor-container">
            <?php
            foreach ($doctors as $doctor) {
                echo "<div class='doctor-item'>";
                echo "<img class='doctor-image' src='{$doctor['image']}' alt='{$doctor['name']}' />";
                echo "<p style='color: #000;'>{$doctor['name']} - {$doctor['qualification']}</p>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='doctor_id' value='{$doctor['id']}'>";
                echo "<input type='hidden' name='price' value='{$doctor['price']}'>"; // Add hidden input for price
                echo "<input class='book-appointment-btn' type='submit' name='book_appointment' value='Book Appointment'>";
                echo "</form>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
