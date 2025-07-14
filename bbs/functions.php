<?php
function str2html(string $string): string{
  return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}


// 画像関係
function is_valid_image_name(string $filename): bool{
  return preg_match('/^img_[a-zA-Z0-9]+\.(jpg|jpeg|png|gif)$/', $filename);
}