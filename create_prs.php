<?php
    session_start();

    $conn = mysqli_connect('localhost', 'test', 'qwe123', 'JBB_DB');
    $sql = "INSERT INTO board (title, content, created, author) 
            VALUES(
                '{$_POST['title']}',
                '{$_POST['content']}',
                NOW(),
                '{$_SESSION['userid']}'
                )";
    $result = mysqli_query($conn, $sql);
    if($result == false){
        echo "저장 과정 중 문제 발생";
        ?>
        <br><button type="button" onclick="location.href='./create.php'">돌아가기</button>
        <?php
    } 
    else {
        echo "저장 성공";
        ?>
        <br><button type="button" onclick="location.href='./index.php'">돌아가기</button>
        <?php
    }
?>