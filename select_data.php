<?php
include 'db_config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 修正点
$sql = "SELECT name, subject, score, comment FROM SCORES";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 結果セットのすべての行を一度に配列として取得
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    // forループを使用して行を処理
    for ($i = 0; $i < count($rows); $i++) {

        // 修正点
        echo "<tr><td>" . $rows[$i]["name"] . "</td><td>" . $rows[$i]["subject"] . "</td><td>" . $rows[$i]["score"] . "</td><td>" . $rows[$i]["comment"] . "</td></tr>";
    }
    echo '</table>';
} else {
    echo "<h3>検索結果は0件です</h3>";
}

$conn->close();
