<?php
require_once("function.php");

$height = (float)$_POST["height"];
$weight = (float)$_POST["weight"];


// if ((0 < $height) && ($height < 3)) {
//     echo "適正体重は" . $height * $height * 22 . "kgです。";
// } else {
//     echo "身長を正しく入力してください。";
//     exit;
// }


// 以下の方法でも可能

// if (0 < $height) {
//     if ($height < 3) {
//         echo "適正体重は" . $height * $height * 22 . "kgです。";
//     } else {
//         echo "身長は3より小さい値を入力してください。";
//     }
// } else {
//     echo "身長は0より大きい値を入力してください。";
// }



if (!((0 < $height) && ($height < 3))) {
    echo "身長を正しく入力してください。";
    exit;
}


if (($weight < 50) || (200 < $weight)) {
    echo "体重を正しく入力してください。";
    exit;
}

$goal_weight = $height * $height * 22;
$difference = abs($goal_weight - $weight);

echo "体重" . $weight . "kg<br>";
echo "理想" . $goal_weight . "kg<br>";
echo "後" . $difference . "kgで適正体重です。<br>";
