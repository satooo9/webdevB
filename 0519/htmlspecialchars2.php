<?php
//htmlspecialchars2.php
// HTMLエスケープ
echo htmlspecialchars($_POST['a'], ENT_QUOTES, 'UTF-8');
