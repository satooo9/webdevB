<?php

function str2html(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}


// フォームからの検索キーワード取得
$keyword = '';
if (isset($_POST['songs'])) {
    $keyword = trim($_POST['songs']);
}


$fp = fopen('songs.csv', 'r');
if ($fp === false) {
    echo "CSVファイルが見つかりませんでした。";
    exit;
}
$found = false;


while ($row = fgetcsv($fp)) {
    $isMatch = false;

    // 曲名にキーワードが含まれているか
    if (stripos($row[0], $keyword) !== false) {
        $isMatch = true;
    }

    // アーティスト名にキーワードが含まれているか
    if (stripos($row[1], $keyword) !== false) {
        $isMatch = true;
    }

    // どちらかが一致していれば表示
    if ($isMatch) {
        echo '<ul>';
        echo '<li>曲名：' . str2html($row[0]) . '</li>';
        echo '<li>アーティスト名：' . str2html($row[1]) . '</li>';
        echo '</ul>';
        $found = true;
    }
}

fclose($fp);


if (!$found) {
    echo "該当するデータが見つかりませんでした。";
}
