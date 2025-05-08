<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OSIT Fix  | Technician Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
<style>
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        overflow: hidden;
    }
    .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('./dist/img/bgImage.png') no-repeat center center/cover;
        filter: blur(8px);
        z-index: -1;
    }
    .container {
        width: 400px;
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        color: #fff;
        z-index: 1;
    }
    .logo-resize {
        width: 300px;
        height: auto;
        display: block;
        margin: 0 auto 20px auto;
    }
    .toggle-link {
        color: #0d6efd;
        cursor: pointer;
    }
    .toggle-link:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="background-image"></div>
    <div class="container">
        <img src="./dist/img/logoDark-text.png" alt="Logo" class="logo-resize">
        <h4>Technician Login</h4>
        <form action="process_technician_login.php" method="POST">
            <div class="form-group">
                <label>Technician Email</label>
                <input type="email" name="technician_email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="technician_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login as Technician</button>
        </form>
        <p class="mt-3 text-center">
            <a href="login.php" class="toggle-link">Return to User Login</a>
        </p>
    </div>
</body>
</html>
