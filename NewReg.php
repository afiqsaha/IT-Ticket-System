<?php
include_once 'db_connect.php'; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match. <a href='login.php'>Try again</a>";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $mysqli = dbConnect();
    $query = $mysqli->prepare("SELECT id FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $query->store_result();

    if ($query->num_rows > 0) {
        echo "Email is already registered. <a href='login.php'>Login here</a>";
        exit();
    }

    // Insert new user into the database
    $stmt = $mysqli->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful! <a href='login.php'>Login now</a>";
    } else {
        echo "Registration failed. Please try again.";
    }

    $stmt->close();
    $mysqli->close();
}
?>
