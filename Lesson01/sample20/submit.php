<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!empty($_REQUEST['my_name'])): ?>
        <p>お名前： <?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
    <?php else: ?>
        <p>お名前が入力されていません。前のページに戻ってください。</p>
    <?php endif; ?>
</body>
</html>