<!DOCTYPE html>

<?php
	session_start();
    $conn = mysqli_connect('localhost', 'root', '123', 'JBB_DB');
    $sql = "SELECT * FROM board WHERE id={$_GET['number']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<html>
	<head>
		<meta charset='utf-8'>
		<title>JBB 글 수정</title>
	</head>
	<body>
		<h1>Just Bulletin Board</h1>
		<h2>글 수정</h2>
		<?php
		if($row['author'] == $_SESSION['userid']) {
		?>
			<form action="./update_prs.php" method="post">
				<input type='hidden' name='author' value='<?=$row['author']?>'>
				<input type='hidden' name='id' value='<?=$row['id']?>'>
				<p>제목 : <br>
				<input type="text" name="title" value=<?=$row['title']?>><br>
				내용 : <br>
				<textarea name="content"><?=$row['content']?></textarea><br></p>
				<p><input type="submit" value="수정 완료"></p>
			</form>
		<?php 
		}
		else {
			echo "Error";
		}
		?>
	</body>
</html>