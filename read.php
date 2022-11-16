<!DOCTYPE html>

<?php
    session_start();
?>

<html>
	<head>
		<meta charset='utf-8'>
		<title>JBB 글</title>
	</head>
	<body>
		<h1>Just Bulletin Board</h1>
    <?php
        if(isset($_GET['number']) == true && !($_GET['number'] == NULL)) {
            $conn = mysqli_connect('localhost', 'test', 'qwe123', 'JBB_DB');
            $sql = "SELECT * FROM board WHERE id={$_GET['number']}";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if($row['author'] == $_SESSION['userid']) {
            ?> 
                <br><button type="button" onclick="location.href='./update.php?number=<?= $row['id'] ?>'">수정</button>
                <form action="./delete_prs.php" method="post">
				    <input type='hidden' name='id' value='<?=$row['id']?>'>
                    <input type='hidden' name='author' value='<?=$row['author']?>'>
                    <input type='submit' value='삭제'>
                </form>
            <?php 
            }
            ?>

            <p><h2>제목 : <?= $row['title']?></h2></p>
            <h3>내용</h3><p><?= $row['content']?></p><br>
            <h3>작성자</h3><p><?= $row['author']?></p>
        <?php
        }
        else {
            echo "Error!";
        ?>
            <br><button type="button" onclick="location.href='./index.php'">돌아가기</button>
        <?php
        }
    ?>
	</body>
</html>