<?php
$sum = 100+1050+200;
$taxRate = 0.1;
// echo '合計金額は、'.$sum.'円です。';
?>

<p>合計金額は、<?php echo $sum ?>円です。</p>
<p>税込金額は、<?php echo (1+$taxRate)*$sum ?>円です。</p>