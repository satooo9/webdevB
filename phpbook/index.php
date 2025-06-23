<?php
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/header.php';
require_once __DIR__ . '/login_check.php';

try {
    $dbh = db_open();

    $sql = 'SELECT * FROM books';
    // SQL文を実行、結果を変数に代入配列で取得
    $statement = $dbh->query($sql);

?>
    <table border="1">
        <tr>
            <th>更新</th>
            <th>書籍名</th>
            <th>ISBN</th>
            <th>価格</th>
            <th>出版日</th>
            <th>著者名</th>
        </tr>

        <?php while ($row = $statement->fetch()): ?>
            <tr>
                <td><a href="edit.php?id=<?php echo (int) $row['id']; ?>">更新</a></td>
                <td><?php echo str2html($row['title']) ?></td>
                <td><?php echo str2html($row['isbn']) ?></td>
                <td><?php echo str2html($row['price']) ?></td>
                <td><?php echo str2html($row['publish']) ?></td>
                <td><?php echo str2html($row['author']) ?></td>
            </tr>

        <?php endwhile; ?>
    </table>

<?php
} catch (PDOException $e) {
    // XSS対策のためのエスケープ
    echo '接続失敗: ' . str2html($e->getMessage());
    exit;
}
?>

<?php
include __DIR__ . '/inc/footer.php';
