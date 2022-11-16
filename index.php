<!DOCTYPE html>

<?php
    session_start();
?>

<html>
	<head>
		<meta charset='utf-8'>
		<title>JBB 홈</title>
	</head>
	<body>
		<h1>Just Bulletin Board</h1>
		<h2>로그인</h2>
		<?php
		if(isset($_SESSION['userid'])) {
            echo $_SESSION['userid'];
			?>님 로그인 중
			<button type="button" onclick="location.href='./log-out_prs.php'">로그아웃</button>
			<h3>글 목록</h3>
			<button type="button" onclick="location.href='./create.php'">글 쓰기</button>
		<?php
			$conn = mysqli_connect('localhost', 'root', '123', 'JBB_DB');
			$sql = "SELECT * FROM board order by created desc";
			$result = mysqli_query($conn, $sql);
			$number = 1;
		?>
			<table>
				<caption>글 목록</caption>
				<thead align = "center">
					<tr>
						<td width = "50" align="center">번호</td>
						<td width = "500" align = "center">제목</td>
						<td width = "100" align = "center">작성자</td>
						<td width = "200" align = "center">날짜</td>
					</tr>
				</thead>
				<tbody>
				<?php
				while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td width = "50" align = "center"><?=$number?></td>
						<td width = "500" align = "center">
						<a href = "read.php?number=<?= $row['id'] ?>">
						<?=$row['title']?></a></td>
						<td width = "100" align = "center"><?= $row['author']?></td>
						<td width = "200" align = "center"><?= $row['created']?></td>
					</tr>
				<?php
					$number++;
				}
				?>
				</tbody>
			</table>
		<?php
		} 
		else { ?>
		<button type="button" onclick="location.href='./sign-in.php'">로그인</button>
		<button type="button" onclick="location.href='./sign-up.php'">회원가입</button>
		<?php } ?>
	</body>
</html>