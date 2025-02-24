<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Enter Credit Card Information</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-image: url('images/front.jpg');
    background-size: cover;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #0056b3;
}

/* Animation */
@keyframes confirmAnimation {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.confirmation {
    display: none;
    text-align: center;
}

.confirmation img {
    animation: confirmAnimation 2s linear infinite;
}

</style>
</head>
<body>
<div class="container">
    <h2>Enter Credit Card Information</h2>
    <form id="paymentForm">
        <label for="credit_card_number">Credit Card Number:</label>
        <input type="text" id="credit_card_number" name="credit_card_number" maxlength="12" required>
        <label for="expiry_date">Expiry Date (MM/YY):</label>
        <input type="text" id="expiry_date" name="expiry_date" maxlength="4" placeholder="MM/YY" required>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" maxlength="4" required>
        <button type="button" onclick="showConfirmation()">PAY</button>
    </form>
    <div class="confirmation" id="confirmation">
        <p>CHECKING!</p>
        <img src="images/processs.png" alt="PROCESSING" height="60px">
    </div>
</div>

<script>
function showConfirmation() {
    var paymentForm = document.getElementById("paymentForm");
    var creditCardNumber = paymentForm.elements["credit_card_number"].value;
    var expiryDate = paymentForm.elements["expiry_date"].value;
    var cvv = paymentForm.elements["cvv"].value;

    if (creditCardNumber.trim() === "" || expiryDate.trim() === "" || cvv.trim() === "") {
        alert("Please fill in all fields.");
        return;
    }

    document.getElementById("paymentForm").style.display = "none";
    document.getElementById("confirmation").style.display = "block";

    setTimeout(function() {
        window.location.href = "payment_success.php";
    }, 3000); // 5000 milliseconds = 5 seconds
}
</script>

</body>
</html>
