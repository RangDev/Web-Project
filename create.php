<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>JBB 글 쓰기</title>
	</head>
	<body>
		<h1>Just Bulletin Board</h1>
		<h2>글 쓰기</h2>
		<form action="./create_prs.php" method="post">
			<p>제목 : <br>
			 <input type="text" name="title" placeholder="Title"><br>
      		 내용 : <br>
			 <textarea name="content" placeholder="Content"></textarea><br></p>
      		<p><input type="submit" value="작성 완료"></p>
	  	</form>
	</body>
</html>