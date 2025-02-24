<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Checkout Page</title>";
    echo "<style>";
    echo "body {";
    echo "    font-family: 'Arial', sans-serif;";
    echo "    background-color: #f8f9fa;";
    echo "    margin: 0;";
    echo "    padding: 0;";
    echo "    display: flex;";
    echo "    align-items: center;";
    echo "    justify-content: center;";
    echo "    height: 100vh;";
    echo "}";

    echo ".checkout-container {";
    echo "    max-width: 400px;";
    echo "    padding: 20px;";
    echo "    background-color: #fff;";
    echo "    border-radius: 8px;";
    echo "    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);";
    echo "}";

    echo "h2 {";
    echo "    color: #007bff;";
    echo "    text-align: center;";
    echo "}";

    echo "ul {";
    echo "    list-style-type: none;";
    echo "    padding: 0;";
    echo "}";

    echo "li {";
    echo "    margin-bottom: 10px;";
    echo "}";

    echo ".total-amount {";
    echo "    font-weight: bold;";
    echo "    text-align: center;";
    echo "}";

    echo ".payment-form {";
    echo "    margin-top: 20px;";
    echo "    text-align: center;";
    echo "}";

    echo "label {";
    echo "    display: block;";
    echo "    margin-bottom: 10px;";
    echo "}";

    echo "select, input {";
    echo "    width: 100%;";
    echo "    padding: 8px;";
    echo "    margin-bottom: 15px;";
    echo "    box-sizing: border-box;";
    echo "}";

    echo "input[type='submit'] {";
    echo "    background-color: #007bff;";
    echo "    color: #fff;";
    echo "    cursor: pointer;";
    echo "}";

    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='checkout-container'>";
    echo "<h2>Checkout Page</h2>";
    echo "<ul>";

    $totalAmount = 0;

    foreach ($_SESSION['cart'] as $item) {
        echo "<li>{$item['name']} - \${$item['price']}</li>";
        $totalAmount += $item['price'];
    }

    echo "</ul>";

    // Display total amount
    echo "<p class='total-amount'>Total Amount: \${$totalAmount}</p>";

    // Payment method form
    echo "<div class='payment-form'>";
    echo "<h3>Select Payment Method:</h3>";
    echo "<form action='credit_card_form.php' method='post'>";
    echo "<label for='payment_method'>Payment Method:</label>";
    echo "<select name='payment_method' id='payment_method'>";
    echo "<option value='credit_card'>Credit Card</option>";    
    echo "<option value='paypal'>PayPal</option>";
    echo "</select>";
    echo "<br><br>";
    echo "<input type='submit' name='submit_payment' value='CONFIRM'>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "<p>Your cart is empty. Please add items before proceeding to checkout.</p>";
}
?>
