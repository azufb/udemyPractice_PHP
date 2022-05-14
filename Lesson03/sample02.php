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
        $records = $db->query('SELECT count(*) as cnt FROM my_items');
        if ($records) {
            // fetch_asssoc()でデータを取り出す。
            while ($record = $records->fetch_assoc()) {
                //echo $record['item_name'].'<br>';
                echo 'cnt: ', $record['cnt'].'<br>';
            }
        }
    ?>
</body>
</html>