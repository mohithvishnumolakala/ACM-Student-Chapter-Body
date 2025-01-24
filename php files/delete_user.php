<?php
include 'config.php';

if (isset($_POST['delete'])) {
    $user_id = $_POST['user_id'];

    // SQL to delete a user
    $sql = "DELETE FROM registration_users WHERE Username = ?";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the user ID to the statement
        $stmt->bind_param("s", $user_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>