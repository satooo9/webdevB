<?php
require_once './functions.php';

try {
    $dbh = db_open();

    $sql = 'SELECT title, author FROM books';
    // SQL文を実行、結果を変数に代入配列で取得
    $statment = $dbh->query($sql);
    // データを一行ずつ取得
    while ($row = $statment->fetch()) {
        echo '書籍名：' . str2html($row[0]) . "<br>";
        echo '著者名：' . str2html($row[1]) . "<br><br>";
    }
} catch (PDOException $e) {
    echo '接続失敗: ' . str2html($e->getMessage()) . "<br>";
    exit;
}
