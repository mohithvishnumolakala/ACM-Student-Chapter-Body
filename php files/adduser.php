<?php
$Name= $_POST['name'];
$Year= $_POST['year'];
$Branch= $_POST['branch'];
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

$sql = "INSERT INTO registration_users(Name,Year,Branch,Username,Password) VALUES (?,?,?,?,?)";
$statement = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($statement, "sssss",$Name,$Branch,$Year,$Username,$Password);

if (mysqli_stmt_execute($statement)) {
    echo "User Added successfully!";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_stmt_close($statement);
mysqli_close($connection);
?>