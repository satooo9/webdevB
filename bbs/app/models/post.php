<?php

function get_all_posts($pdo)
{
  $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insert_post(PDO $pdo, string $name, string $comment, string $image): void
{
  $sql = 'INSERT INTO posts (name, comment, image, created_at) VALUES (?, ?, ?, NOW())';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$name, $comment, $image]);
}
