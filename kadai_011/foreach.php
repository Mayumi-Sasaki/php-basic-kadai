<?php


// 連想配列
$item_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
foreach($item_data as $key => $value){
  echo "{$key}：{$value}";
  echo '<br>';
}


?>