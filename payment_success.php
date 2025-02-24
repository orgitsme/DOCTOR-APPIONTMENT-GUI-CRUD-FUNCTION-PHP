<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Success</title>
<style>
body {
    
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 200px;
    margin: 50px auto;
    text-align: center;
}

.success {
    color: #12AD2B;
    font-size: 24px;
}

.slider {
    width: 100px;
    height: 100px;
    margin: 20px auto;
    position: relative;
    overflow: hidden;
    border-radius: 25px;
}

.slide {
    width: 100%;
    height: 100%;
    position: absolute;
    animation: slide 5s infinite;
}

@keyframes slide {
    0% { left: -100%; }
    100% { left: 100%; }
}

.green-tick {
    width: 80px;
    height: 80px;
    background-image: url('https://upload.wikimedia.org/wikipedia/commons/e/e4/Green_tick.png'); /* Green tick image URL */
    background-size: cover;
    margin: 20px auto;
    animation: tick-animation 1s ease-in-out forwards;
}

@keyframes tick-animation {
    0% { transform: scale(0); }
    100% { transform: scale(1); }
}
</style>
</head>
<body>
<div class="container">
    <div class="success">Payment Successful!</div>
    <div class="slider">
        <div class="slide" style="background-color: #007bff;"></div>
    </div>
    <div class="green-tick"></div>
    <div class="client-details">
        <p>Thank you, For your payment!</p>
        <!-- Display additional client details here -->
    </div>
</div>
</body>
</html>
