<?php
$dir = 'avatars';
if(!is_dir($dir)){
    mkdir($dir, 0777, true);
}

if(move_uploaded_file($_FILES['photo']['tmp_name'], 'avatars/'.$_FILES['photo']['name'])) {
    $photo = 'avatars/'.$_FILES['photo']['name'];
} else {
    $photo = 'img/default_avatar.png';
}

$surname = $_POST['surname'];
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];

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

$sql = "INSERT INTO Person (`id`, `surname`, `name`, `birthday_date`, `phone_number`, `avatar`, `created_at`) 
VALUES (NULL, '$surname', '$name', '$birthday', '$phone', '$photo', NOW())";

if ($conn->query($sql) === TRUE) {
    header('Location: http://127.0.0.1:8201/');
    exit;
} else {
    echo "Error: ". $sql ."<br>". $conn->error;
    echo "<br>";
    echo "<h3><a href='http://127.0.0.1:8201/'></a></h3>";
}

$conn->close();
?>