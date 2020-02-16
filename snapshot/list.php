<php?

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
	<article id="de">
			<h2>ホテルの検索</h2>
			<table class="list">
				<tr>
					<td class="photo"><img width="110" alt="写真" src="../pages/img/<?php echo $image; ?>" /></td>
					<td class="info">
						<dl>
						    <dt><?php echo $name; ?></dt>
							<dd><?php echo $detail; ?></dd>
						</dl>
					</td>
				</tr>
			</table>
		</article>
		
	</main>
	<footer>
		<div id="copyright">(C) 2019 The Web System Development Course</div>
	</footer>
</body>

</html>