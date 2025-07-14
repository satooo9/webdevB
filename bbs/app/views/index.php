<form action="" method="post" enctype="multipart/form-data">
  <p>名前：<input type="text" name="name" /></p>
  <p>コメント：<textarea name="comment" rows="4" cols="40"></textarea></p>

  <!-- 画像ファイル選択欄を追加 -->
  <p><input type="file" name="image" accept="image/*"></p>

  <p>
    <input type="submit" value="投稿" />
  </p>
</form>

<hr />

<?php if (!empty($posts)): ?>
  <?php foreach ($posts as $post): ?>
    <div style="margin-bottom: 20px">
      <p>
        <strong><?= str2html($post['name']) ?></strong> さん
      </p>
      <p><?= nl2br(str2html($post['comment'])) ?></p>

      <!-- 画像の表示 -->
      <?php if (!empty($post['image'])): ?>
        <p>
          <img src="./image.php?file=<?= htmlspecialchars($post['image']) ?>" alt="投稿画像" style="max-width: 300px;">
        </p>
      <?php endif; ?>

      <p>
        <small><?= str2html($post['created_at']) ?></small>
      </p>
    </div>
  <?php endforeach; ?>
<?php else: ?>
  <p>投稿はまだありません。</p>
<?php endif; ?>