<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>JBB 로그인</title>
	</head>
	<body>
		<h1>Just Bulletin Board</h1>
		<h2>로그인</h2>
		<form action="./sign-in_prs.php" method="post">
			<p>아이디 : <br>
			 <input type="text" name="uid" placeholder="ID"><br>
      		 비밀번호 : <br>
			 <input type="password" name="upw" placeholder="PASSWORD"></p>
      		<p><input type="submit" value="로그인"></p>
	  	</form>
		<button type="button" onclick="location.href='./sign-up.php'">회원가입</button>
	</body>
</html>