<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "school_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
include 'config.php'; // Connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['u_name'];
    $pass = $_POST['u_pass'];

    // This SQL command matches your "student" table columns
    $sql = "INSERT INTO student (username, password) VALUES ('$user', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>