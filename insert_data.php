<?php
include 'db_config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$subject = $_POST['subject'];
$score = $_POST['score'];

$sql = "INSERT INTO SCORES (name, subject, score) VALUES ('$name', '$subject', '$score')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>データが登録されました</h2>";
    echo '<button onclick="location.href=\'index.php\'">戻る</button>';
}

$conn->close();