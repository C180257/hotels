<?php
//step1 
$area = -1;
if (isset($_REQUEST["area"])) {
    $area = $_REQUEST["area"];
}
//step2 lay du lieu database
$pdo = connectDatabase();
//step3 chay du lieu Sql
$sql = "select * from restaurants where area=:area?"; //$sql - "select * from restaurants where area=:area?";
//step4 chuyen du an vao sql
$pstmt = $pdo->prepare($sql);
//step5 dieu chinh thong tin trong sql
$psttmt->bindValue(1,$area);
$params[":area"] = $area;
//step6  chay SQL
$psttmt->execute($params);
//step7 set ket qua
$rs = $psttmt->fetchAll();
//step8 cho ket qua vao day 
disconnectDatabase($pdo);
$restaurant = [];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>ホテル検索結果一覧</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/hotels.css" />
</head>

<body>
	<header>
		<h1>ホテル検索結果一覧</h1>
		<p><a href="./entry.php">検索ページに戻る</a></p>
	</header>
	<main>
		<article>
			<table>
			    $sql = "select * from movies where title like :title"; 

$pstmt = $pdo->prepare($sql); 

$params = []; 

$params[":title"] = "%awake%"; 

$pstmt->execute($params); 
			    
			</table>
		</article>
	</main>
	<footer>
		<div id="copyright">(C) 2019 The Web System Development Course</div>
	</footer>
</body>

</html>