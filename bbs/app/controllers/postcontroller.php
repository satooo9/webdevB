<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../models/post.php';
require_once __DIR__ . '/../../functions.php';

// アップロード先
$uploadDir = __DIR__ . '/../../storage/uploads/';
if (!file_exists($uploadDir)) {
  mkdir($uploadDir, 0777, true); // ネストフォルダも作成
}

// DB接続
$pdo = new PDO($config['dsn'], $config['user'], $config['pass']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// バリデーション関数
function validate_post(string $name, string $comment): array
{
  $errors = [];
  if ($name === '') {
    $errors[] = '名前を入力してください。';
  }
  if ($comment === '') {
    $errors[] = 'コメントを入力してください。';
  }
  return $errors;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $comment = trim($_POST['comment'] ?? '');
  $errors = validate_post($name, $comment);

  $imagePath = '';

  if (empty($errors)) {
    // 画像アップロード処理
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
      $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $newFileName = 'img_' . uniqid() . '.' . $ext;
      $uploadPath = $uploadDir . $newFileName;

      if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
        $imagePath = $newFileName;  // ファイル名だけ保存
      } else {
        error_log("ファイルの移動に失敗しました");
      }
    }

    insert_post($pdo, $name, $comment, $imagePath);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
  }
}

$posts = get_all_posts($pdo);
require __DIR__ . '/../views/layout.php';
