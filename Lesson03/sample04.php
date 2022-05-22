<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
        $message = 'フォームからのメモです。';
        // 直接queryを実行すると危険なので、prepareを利用。
        $stmt = $db->prepare('INSERT INTO memos (memo) VALUES (?)');
        if (!$stmt) {
            // 実行してプログラムを終了させる。
            die($db->error);
        }
        // bind_paramで?に値を代入。
        $stmt->bind_param('s', $message);
        $ret = $stmt->execute();
        if ($ret) {
            echo 'データを挿入しました。';
        } else {
            echo 'データの挿入に失敗しました。ザンネーン！';
        }
        
    ?>
</body>
</html>