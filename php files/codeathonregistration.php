<?php
$RollNo = $_POST['rollNumber'];
$CollegeName = $_POST['collegeName'];


$hostname = "localhost";
$username = "root";
$password = "";
$database = "events";
$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO codeathon(RollNo,College) VALUES (?, ?)";
$statement = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($statement, "ss", $RollNo,$CollegeName);

if (mysqli_stmt_execute($statement)) {
    echo "User Added successfully!";
} else {
    echo "Error: " . mysqli_error($connection);
}
    

mysqli_stmt_close($statement);
mysqli_close($connection);
?>