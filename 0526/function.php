<?php
// 関数を定義する
function str2html(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}


// 関数を呼び出す
// 関数名()で実行