<?php

// コメント

/*
コメント
コメント
*/


// 文字化け防止
mb_language("uni");
mb_internal_encoding("utf-8");
mb_http_input("auto");
mb_http_output("utf-8");


// 演算子
// 代入演算子
$n = 5;
// 数字に関する演算子
$l = 3 % 5;
// 文字列に関する演算子
$st = "Hello" . "World";
// 代入を伴う演算子
$z += 3; //$z = $z + 3;
$ss .= "Hi"; // $ss = $ss . "Hi";
// インクリメント　デクリメント演算子
$a = 5;
echo $a++; //$aを返してから１足す
echo $a;
++$a; //１足してから$aを返す

//変数
$message = "Hello World!!!!!!"; //コメント

// 変数と定数のルール
// $で始まる
// 英数字 _
// $の直後に関しては数字はNG
// 大文字小文字は区別される

// データ型
// 整数
$x = 5;
// 少数
$y = 2.3;
// 文字列
$s = 'Hello!';
// 論理型
$flag = false;
// 配列
// オブジェクト
// NULL
$l = NULL;

// 変数の値を表示
echo $x;
var_dump($x);
var_dump($y);
var_dump($s);
var_dump($flag);
var_dump($l);

// 定数
define("ADMIN_EMAIL","hogehoge@gmail.com");


// if文(条件分岐）と比較演算子
$age = 10;
if ($age >= 20) { // 比較演算子種類 < > <= >= == != <>
		echo "大人です";
} elseif ($age >= 3) {
		echo "子供です";
} else {
		echo "幼児です";
}

// switch文
$signal = "red";

switch ($signal) {
		case "red":
				echo "止まれ";
				break;
		case "blue":
				echo "進め";
				break;
		case "yellow":
				echo "注意";
				break;
		default:
				echo "ちょっと意味がわからない";
				break;
}

// while文　ループ文
$i = 0;
while ($i < 10) {
		echo $i;
		$i ++;
}

do {
		echo $i;
		$i --;
} while ( $i > 0);

// for文　ループ文
for ($j = 0; $j < 10; $j++) {
		echo $j;
}

// for文とbreak文
for ($j = 0; $j < 10; $j++) {
		if ($j % 2 == 0) {
				continue;
		}
		echo $j;
}

// for文とcontinue文
for ($j = 0; $j < 10; $j++) {
		if ($j == 5) {
				break;
		}
		echo $j;
}

//配列
$youbi = array("Sun","Mon","Tue","Wed","Thu","Fri");
$youbi[] = "Sat";
unset($youbi[1]); //要素の削除
echo $youbi[0];
var_dump($youbi);

// 連想配列
$sales =array(
		2000=> array("tanaka"=>100, "suzuki"=>200, "yazaki"=>50),
		2001=> array("tanaka"=>150, "suzuki"=>170),
		2002=> array("tanaka"=>200, "suzuki"=>80, "taira"=>500)
);

echo $sales[2000]["tanaka"];

// echo $sales["suzuki"];

var_dump($sales);

foreach ($youbi as $s) {
		echo $s;
}

foreach ($sales as $key => $value) {
		foreach ($value as $key2 => $value2) {
				echo $key2 . "'s sales is" . $value2;
		}
		// echo $key . "'s sales is" . $value;
}

// 関数　処理をまとめたもの
function getMax($a, $b) { // 引数 ローカル変数
		$rate = 0.8;
		if ($a > $b) {
				return $a * $rate; // 返り値
		} else {
				return $b * $rate;
		}
}

echo getMax(100,200);


// 数学関数
$x =5.2;
echo ceil($x);
echo floor($x);
echo round($x);
echo pi();
$r = rand(1,18);
echo $r;

// 文字列関数
// strlen strpo substr str_replace
$s = "hello";
echo strlen($s);
echo strpos($s, "l");

$s = "abcdefghijk";
echo substr($s, -3, 2);

$s = "this is a pen";

echo str_replace("pen", "brush", $s);

// printf
$s = "apple";
$n = 40;
$p = 5.322;

printf("we have %d %ss for $%.2f", $n, $s, $p);

$year = 1981;
$month = 5;
$day = 22;

printf("%04d-%02d-%02d", $year, $month, $day);

// 日本語を扱う場合
$s = "こんにちは";

echo mb_strlen($s, "UTF-8");

// 配列関数
$a = array("tanaka", "sasaki", "kimura", "yoshida", "uchida");

echo count($a);

sort($a);
foreach($a as $key => $value) {
		printf("a[%d] => %s ...", $key, $value);
}

echo implode("|", $a);

$b = "a, b, c, d, e, f, g";

$c = explode(",", $b);
var_dump($c);

// in_arry
$a = array("tanaka", "sasaki", "kimura", "yoshida", "uchida");

if (in_array("tanaka", $a)) {
		echo "BINGO!";
}

// 日付、時間の関数 日付同士の計算等に使用する
echo time(); // Unixタイムスタンプ ＝ 1970/1/1 00:00:00からの通算秒

echo date("Y-m-d H:i:s", mktime(5,0,0,5,22,1984));
echo date("z", mktime(5,0,0,5,22,1984));
echo date("z", strtotime("1984-5-22 05:00:00"));
echo date("z", strtotime("+5 day"));
echo date("z", strtotime("last mondy"));

// ファイル関数
$testFile = "test.dat";
$contents = "こんにちは!";

if (file_exists($testFile)) {
		echo "存在します!";
} else {
		echo "ありません!";
}

if (is_writable($testFile)) {

		if(!$fp = fopen($testFile, "a")) { //aはアテンド（追加）の意味
				echo "オープンできません!";
				exit;
		}

		if (fwrite($fp, $contents) === false) {
				echo "書き込み失敗!";
				exit;
		}

		echo "書き込み成功!";

		fclose($fp);

} else {
		echo "Not writable! - 存在しないかも";
}

$contents = file_get_contents($testFile);
echo $contents;

$contents = file($testFile);

var_dump($contents);

if (!$fp = fopen($testFile, "r")) {
		echo "File could not open!";
		exit;
}

$contents = fread($fp, filesize($testFile));

echo $contents;

fclose($fp);

// データベース関連

// データベースへ接続
mysql_connect("localhost", "dbuser001", "dbpwd001") or die("can't connect to DB: ". mysql_error());
mysql_select_db("blog_app") or die("can't select DB: ". mysql_error());

$s = "たなか";

// 入力をエスケープする
$sql = sprintf("update users set name = '$s' where id = 1", mysql_real_escape_string($s));

$rs = mysql_query($sql);

if (!$rs) {
		echo "can't run query " . mysql_error();
		exit;
}

printf("%d件が更新されました！", mysql_affected_rows() );

$rs = mysql_query("select * from users");

// エラー処理
if (!$rs) {
		echo "can't run query". mysql_error();
		exit;
}

// 取得したデータベース内容を表示
if (mysql_num_rows($rs)) {
		while ($row = mysql_fetch_assoc($rs)) {
				var_dump($rs);
		}
} else {
		echo "nothing returned";
}

$rs = mysql_query("select * from users");

if (!$rs) {
		echo "can't run query". mysql_error();
		exit;
}

printf("%d件が表示されました！", mysql_affected_rows() );

// Cookie (ブラウザにデータを保存する機能)

setcookie('userName', 'pense', time()+60*60*24*14);

echo $_COOKIE['userName'];

// セッション(サーバ側にデータを保存)

$_SESSION['userName'];

// 以降を実行させない
// exit;

?>


<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<title>PHPの練習</title>
	</head>
	<body>
		<h1>PHPの練習</h1>
		<p>こんにちは！</p>
		<p><?php echo $message; ?></p>
		<p>私のメアドは<?php echo ADMIN_EMAIL; ?>です！</p>
		<form action="get_info.php" method="post">
		<input type="text" name="birthday" value="">
		<input type="submit" value="送信">
		</form>
	</body>
</html>

