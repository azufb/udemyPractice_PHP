<?php
require ('intax.php'); // 外部ファイル読み込み

$price = 150;
$price_tax = intax($price);
echo $price_tax;
?>