<?php
// Replace with your database credentials
$servername = "localhost";
$username = "mounish";
$password = "mounish123";
$dbname = "hospital_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate user credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        echo "Login successful!";
        // You can redirect the user to another page or perform additional actions here
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}

// Close the connection
$conn->close();
?>
