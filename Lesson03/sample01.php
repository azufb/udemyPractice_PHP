<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        $db->query('DROP TABLE test if exists test');
        $success = $db->query('CREATE TABLE test(id INT)');
        if ($success) {
            echo 'テーブルを削除して作成しました';
        } else {
            echo 'SQLが正常に動作しませんでした。';
            echo $db->error;
        }
    ?>
</body>
</html>