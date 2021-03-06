<?php
    // 危険な文字列を受け取らないようにサニタイズ
    $memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS);
    $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
    $stmt = $db->prepare('INSERT INTO memos (memo) VALUES (?)');
    if (!$stmt) {
        die($db->error);
    }
    $stmt->bind_param('s', $memo);
    $ret = $stmt->execute();

    if ($ret) {
        echo '登録されました！';
    } else {
        echo $db->error;
    }
?>