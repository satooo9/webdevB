<?php
$name = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
];
var_dump($name);

// 高橋を取る場合
echo $name['takahashi'];


for ($i = 0; $i < count($name); $i++) {
    echo $name[$i] . "<br>";     // キーが存在しないため使えない)
};


foreach ($name as $value) {
    echo $value . "<br>";
};


foreach ($name as $key => $value) {
    echo 'キーは' . $key . "、名前は" . $value . "<br>";
};
