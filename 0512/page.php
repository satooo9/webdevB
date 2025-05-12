<!-- page.php -->

<!-- include使用 -->
<?php

include 'menu.php';
include 'menu.php';

// include は毎回読み込みます（同じファイルでも何度でも実行）。

?>



<!-- include_once使用 -->
<?php

require_once 'menu.php';

// include_once はすでに読み込まれている場合はスキップします。

?>