<?php
// register.php
// POSTで送信された値を受け取る
echo "<h1>受け取ったデータ</h1>";
echo $_POST["name"] . "さん、こんにちわ！";

// あなたの年齢は、〇〇歳ですね。
echo "あなたの年齢は" . $_POST["age"] . "歳ですね。";
var_dump($_POST);
