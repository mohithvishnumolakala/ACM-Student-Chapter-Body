<?php
$StudentId = $_POST['StudentID'];
$EventName = $_POST['eventname'];
$message=$_POST['message'];
$Rating=$_POST['rating'];


$hostname = "localhost";
$username = "root";
$password = "";
$database = "feedback";


$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback_table(StudentId,EventName,message,Rating) VALUES (?,?,?,?)";
$statement = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($statement, "sssi", $StudentId,$EventName,$message,$Rating);

if (mysqli_stmt_execute($statement)) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_stmt_close($statement);
mysqli_close($connection);
?>