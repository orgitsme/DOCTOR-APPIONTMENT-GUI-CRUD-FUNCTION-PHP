<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animated Buttons</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    height: 100vh;
    color: #0000000;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('images/front.jpg'); /* Background image added */
    background-size: cover;
    background-position: center;
  }

  .button-container {
    text-align: center;
  }

  .button {
    font-size: 18px;
    width: 200px; /* Button width set to 200px */
    height: 50px; /* Button height set to 50px */
    border-radius: 45px;
    transition: all 0.3s ease;
    margin: 10px;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    
  }

  .button-text {
    margin-left: 30px; /* Adjusted margin to avoid overlap */
  }

  .button:hover {
    transform: scale(1.05);
  }
</style>
</head>
<body>

<div class="button-container">
  <button class="btn btn-success button" onclick="location.href='display_products.php';">
    <span class="button-text">CLINIC</span> <!-- Button text without duplication -->
  </button>
  <button class="btn btn-primary button" onclick="location.href='index.php';">
    PATIENT DETAILS
  </button>
  <button class="btn btn-primary button" onclick="location.href='index.php';">
    UOL AIR TOUR✈ 
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
