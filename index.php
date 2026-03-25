<?php

$host = "l9dihbld794r61qpbdjljhva";
$user = "mysql";
$password = "CfyF,le13!#";
$db = "default";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo $row["id"] . " - " . $row["name"] . " - " . $row["email"] . "<br>";
    echo "Salom dunyo"
}

?>