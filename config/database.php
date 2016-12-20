<?php
$servername = "localhost";
$username = "root";
$password = "";
$sql;

try {
    $conn = new PDO("mysql:host=$servername;dbname=frameworktest", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "You're in!"; 
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>