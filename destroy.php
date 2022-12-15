<?php
$id = $_POST['id'];

$servername = "db";
$username = "user";
$password = "test";
$dbname = 'myDb';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `avatar` FROM Person WHERE id = $id";
$result = $conn->query($sql);
$value = $result->fetch_assoc();

if($value['avatar'] != 'img/default_avatar.png') {
    unlink($value['avatar']);
}
$sql = "DELETE FROM Person WHERE `Person`.`id` = $id";
$conn->query($sql);
$conn->close();

header('Location: http://127.0.0.1:8201/');
exit;
?>