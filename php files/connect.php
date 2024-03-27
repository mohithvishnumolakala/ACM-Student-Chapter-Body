
<?php
// Database connection parameters
$hostname = "localhost";
$username = "root";
$dbpassword = "";
$database = "login";


// Create a database connection
$conn = new mysqli($hostname, $username, $dbpassword, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to validate user credentials
function validateUser($username, $password, $conn) {
    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true; // Valid credentials
    } else {
        return false; // Invalid credentials
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate user credentials
    if (validateUser($username, $password, $conn)) {
        header("Location: loginwindow.html");
        // Add additional logic (e.g., session management) for successful login
    } else {
        echo '<script>alert("Invalid password or the username");</script>';
        

    }
}

// Close the database connection
$conn->close();
?>

<!-- HTML form for login -->

