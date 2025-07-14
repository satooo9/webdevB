<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../functions.php';

$filename = basename($_GET['file'] ?? '');
$filepath = __DIR__ . '/../storage/uploads/' . $filename;

if (!is_valid_image_name($filename)) {
    http_response_code(403);
    exit('不正なファイル名です。');
}

if (!file_exists($filepath)) {
    http_response_code(404);
    exit('画像が見つかりません。');
}

$mime = mime_content_type($filepath);
header("Content-Type: $mime");
readfile($filepath);
exit;
