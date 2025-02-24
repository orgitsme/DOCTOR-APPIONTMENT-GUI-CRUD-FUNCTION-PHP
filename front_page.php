<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('images/front.jpg'); /* Set the correct path to your local image */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: font-size 1s ease; /* Add animation to font-size */
        }

        .container {
            background-color: rgba(255, 255, 255, 0); /* Fully transparent */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #000000;
            font-size: 100px; /* Set font size to 36px */
            transition: font-size 1s ease; /* Add animation to font-size */
        }

        p {
            font-size: 32px;
            color: #000000;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
            margin-top: 15px;
            border-radius: 45px; /* Set button radius to 45 */
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }

        .btn-primary:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.2);
        }
    </style>
</head>
 
<body>
    <div class="container">
        <h1>WELCOME</h1>
        <p><b>DOCTOR NABEEL</p>
        <a class="btn btn-primary" href="/MYSHOP/login_form.php" role="button">Visit Now</a>
    </div>

    <script>
        // Add JavaScript to trigger animation on page load
        window.onload = function () {
            document.body.style.fontSize = "36px";
            document.querySelector('h1').style.fontSize = "36px";
        };
    </script>
</body>

</html>
