<?php

// フォームの処理

// echo $_POST['birthday'];

$youbi = date("l", strtotime($_POST['birthday']));

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<title>PHPの練習</title>
	</head>
	<body>
	<h1>結果</h1>
	<p>あなたが入力したのは<?php echo htmlspecialchars($_POST['birthday']); ?>は<?php echo $youbi; ?>でした。</p>
<!-- htmlspecialcharsは悪意のあるコードを入力への対策 -->
	</body>
</html>

