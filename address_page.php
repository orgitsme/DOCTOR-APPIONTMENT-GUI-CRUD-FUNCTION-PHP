<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_address'])) {
    // Perform additional validation if needed

    $_SESSION['user_address'] = 'California, USA, 1 Cap Sandross';
    $_SESSION['user_details'] = 'Additional details for the order';  // You can customize this message

    // Redirect to the notification page
    header('Location: notification_page.php');
    exit();
}

echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Address Page</title>";
echo "<style>";
echo "body {";
echo "    font-family: 'Arial', sans-serif;";
echo "    background-color: #f8f9fa;";
echo "    margin: 0;";
echo "    padding: 0;";
echo "}";

echo ".address-container {";
echo "    max-width: 600px;";
echo "    margin: 50px auto;";
echo "    background-color: #fff;";
echo "    padding: 20px;";
echo "    border-radius: 8px;";
echo "    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);";
echo "}";

echo "h2 {";
echo "    color: #007bff;";
echo "    text-align: center;";
echo "}";

echo "form {";
echo "    display: flex;";
echo "    flex-direction: column;";
echo "    align-items: center;";
echo "}";

echo "label {";
echo "    display: block;";
echo "    margin-bottom: 10px;";
echo "    font-weight: bold;";
echo "}";

echo "input[type='text'],";
echo "textarea {";
echo "    width: 100%;";
echo "    padding: 10px;";
echo "    margin-bottom: 15px;";
echo "    box-sizing: border-box;";
echo "    border: 1px solid #ccc;";
echo "    border-radius: 5px;";
echo "}";

echo "input[type='submit'] {";
echo "    background-color: #007bff;";
echo "    color: #fff;";
echo "    padding: 10px;";
echo "    cursor: pointer;";
echo "    border: none;";
echo "    border-radius: 5px;";
echo "}";

echo "input[type='submit']:hover {";
echo "    background-color: #0056b3;";
echo "}";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<div class='address-container'>";
echo "<h2>Address Page</h2>";
echo "<form action='' method='post'>";
echo "<label for='user_address'>Address:</label>";
echo "<input type='text' name='user_address' id='user_address' placeholder='Enter your address' value='California, USA, 1 Cap Sandross' required>";
echo "<br><br>";
echo "<label for='user_details'>Details:</label>";
echo "<textarea name='user_details' id='user_details' placeholder='Enter additional details'></textarea>";
echo "<br><br>";
echo "<input type='submit' name='submit_address' value='Submit Address'>";
echo "</form>";
echo "<br>";
echo "<button onclick='placeOrder()'>Place Order</button>";
echo "</div>";

echo "<script>";
echo "function placeOrder() {";
echo "    document.getElementById('user_details').value = 'Order placed successfully!';";
echo "    document.forms[0].submit();";
echo "}";
echo "</script>";

echo "</body>";
echo "</html>";
?>
