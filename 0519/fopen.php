<?php

// 一回だけ読み込む
// require_onceは、読み込まれないとエラーになる →止まる
require_once('function.php');



// データを読み込む → $fp変数に代入
$fp = fopen('bookdata.csv', 'r');
var_dump($fp);


// エラーが発生した場合の処理
if ($fp === false) {
    echo "ファイルのオープンに失敗しました。";
    exit;
}



// $row=fgetcsv($fp);
//書籍名と著者名を表示する
while ($row = fgetcsv($fp)) {
    echo '<ul>';
    echo '<li>' . "書籍名："  . str2html($row[0]) . '</li>';
    echo '<li>' . "著者名："  . str2html($row[4]) . '</li>';
    echo '</ul>';
}
