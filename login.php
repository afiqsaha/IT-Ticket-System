<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OSIT Fix  | Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
<style>
    /* Full-page setup */
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        overflow: hidden; /* Prevent scrolling */
    }

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

    /* Login container styling */
    .container {
        width: 400px;
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        color: #fff;
        z-index: 1; /* Bring the container above the background */
    }

    /* Toggle link styling */
    .toggle-link {
        color: #0d6efd;
        cursor: pointer;
    }

    /* Centered logo */
    .logo-resize {
        width: 300px; /* Adjust the width as needed */
        height: auto; /* Keeps the image aspect ratio */
        display: block; /* Makes the image a block element */
        margin: 0 auto 20px auto; /* Centers the image horizontally and adds spacing */
    }

    /* Admin and Technician login links styling */
    .login-links {
        margin-top: 10px;
    }

    .login-links a {
        color: #0d6efd;
        text-decoration: none;
    }

    .login-links a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <!-- Blurred Background Image -->
    <div class="background-image"></div>

    <!-- Login Form Container -->
    <div class="container">
        <img src="./dist/img/logoDark-text.png" alt="Logo" class="logo-resize">

        <!-- Login Form -->
        <div id="login-section">
            <h4>Login</h4>
            <form action="process_login.php" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <p class="mt-3 text-center">Don't have an account? <span id="show-register" class="toggle-link">Register Here</span></p>

            <!-- Admin and Technician Login Links -->
            <div class="login-links text-center">
                <a href="AdminLgn.php">Admin Login</a> | 
                <a href="TechnLgn.php">Technician Login</a>
            </div>
        </div>

        <!-- Registration Form -->
        <div id="register-section" style="display: none;">
            <h4>Register</h4>
            <form action="process_register.php" method="POST">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Register</button>
            </form>
            <p class="mt-3 text-center">Already have an account? <span id="show-login" class="toggle-link">Login Here</span></p>

          </div>
        </div>
    </div>

    <script>
        // Toggle between login and register sections
        document.getElementById('show-register').addEventListener('click', () => {
            document.getElementById('login-section').style.display = 'none';
            document.getElementById('register-section').style.display = 'block';
        });
        document.getElementById('show-login').addEventListener('click', () => {
            document.getElementById('register-section').style.display = 'none';
            document.getElementById('login-section').style.display = 'block';
        });
    </script>
</body>
</html>
