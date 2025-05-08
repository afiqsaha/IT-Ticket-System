<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OSIT Fix</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
<style>
    /* Full-page background setup */
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden; /* Prevent scrolling */
        font-family: 'Roboto', Arial, sans-serif; /* Updated font to Roboto */
    }

    /* Import Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

    /* Blurred Background Image */
    .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('./dist/img/bgImage.png') no-repeat center center/cover;
        filter: blur(8px); /* Adjust the blur intensity */
        z-index: -1; /* Send the image to the back */
    }

    /* Welcome container styling */
    .welcome-container {
        text-align: center;
        padding: 30px;
        background: rgba(0, 0, 0, 0.85);
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
        z-index: 1; /* Ensure the container is above the background */
    }

    /* Logo image styling */
    .logo {
        max-width: 300px;
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    /* Slogan text styling */
    .slogan {
        font-size: 18px;
        color: #ffffff; /* Updated text color to white */
        font-weight: bold;
        margin-top: 10px;
    }

    /* Welcome text styling */
    h2 {
        color: #ffffff; /* Updated heading color to white */
        font-weight: 700; /* Bold heading for emphasis */
        margin-bottom: 20px;
    }

    /* Button styling */
    .btn-primary {
        margin-top: 20px;
        padding: 10px 20px;
        border-radius: 20px;
        font-weight: 600; /* Slightly bold for better readability */
    }
</style>
</head>
<body>
    <!-- Blurred Background Image -->
    <div class="background-image"></div>

    <div class="welcome-container">
        <!-- Logo Image -->
        <img src="./dist/img/logoDark-text.png" alt="Logo" class="logo">
        
        <!-- Slogan Text -->
        <h2>PESB Ticket System</h2>
        
        <!-- Get Started Button -->
        <a href="login.php" class="btn btn-primary">Login</a>
    </div>
</body>
</html>
