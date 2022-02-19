<?php
// 曜日の配列
$week_name = ['日', '月', '火', '水', '木', '金', '土'];

date_default_timezone_set('Asia/Tokyo');

for ($i = 0; $i<366; $i++) {
    $time = strtotime('+'.$i.' day');
    $date = date('Y/m/d', $time);
    $week = date('w', $time);
    $week_day = $week_name[$week];
    echo $date.'('.$week_day.')<br>';
}
?>