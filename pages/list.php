<?php
require_once("..//database.php");
require_once("..//use_pdo.php");
require_once("..//class.php");

$pdo= connectDatabase();
$sql= "select * from hotels";

$pstmt = $pdo -> prepare($sql);
$pstmt -> execute();
$rs = $pstmt -> fetchAll();
disconnectDatabase($pdo);
$hotels[];
foreach ($rs as $record){
    $id = intval($record["id"]);
    $name = $record["name"];
    $price =intval($record["price"]);
    $pref = $record["pref"];
    $city = $record["city"];
    $address =$record["address"];
    $memo =$record["memo"];
    $image =$record["image"];
    $hotel = new Hotel($id,$name,$price,$pref,$city,$address,$memo,$image);
    $hotels[] = $hotel;
}

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