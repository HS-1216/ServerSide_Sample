<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="check.js" defer></script>
    <title>サーバサイド_サンプル</title>
</head>

<body>
    <h1>サーバサイド_サンプル</h1>

    <h2>データ検索</h2>
    <table>
        <tr>
            <th>名前</th>
            <th>教科</th>
            <th>点数</th>

            <!-- 修正点 -->
            <th>コメント</th>

        </tr>
        <tr>
            <td>サンプル太郎</td>
            <td>英語</td>
            <td>100</td>

　　　　　　　<!-- 修正点 -->
            <td>サンプルコメントです</td>

        </tr>

        <!-- ここにデータが挿入されます -->
        <?php
        if (isset($_POST['searchBtn'])) {
            include 'select_data.php';
        }
        ?>
    </table>
    <form method="POST" action="index.php">
        <button type="submit" name="searchBtn">全件検索</button>
    </form>

    <h2>データ登録</h2>
    <form name="registerForm" method="POST" action="insert_data.php" onsubmit="return validateForm()">
        <table>
            <tr>
                <th>名前</th>
                <th>教科</th>
                <th>点数</th>

                <!-- 修正点 -->
                <th>コメント</th>

            </tr>
            <tr>
                <td><input type="text" id="name" name="name"></td>
                <td><input type="text" id="subject" name="subject"></td>
                <td><input type="number" id="score" name="score" max="100" min="0"></td>

                <!-- 修正点 -->
                <td><input type="text" id="comment" name="comment" placeholder="30文字以内"></td>

            </tr>
        </table>
        <button type="submit" name="registerBtn">登録</button>
    </form>
</body>

</html>
