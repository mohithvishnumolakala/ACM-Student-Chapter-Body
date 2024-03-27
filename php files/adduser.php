<?php
$Username = $_POST['username'];
$Password = $_POST['password'];


$hostname = "localhost";
$username = "root";
$password = "";
$database = "login";


$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO registration(Username,Password) VALUES (?, ?)";
$statement = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($statement, "ss", $Username,$Password);

if (mysqli_stmt_execute($statement)) {
    echo "User Added successfully!";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_stmt_close($statement);
mysqli_close($connection);
?>