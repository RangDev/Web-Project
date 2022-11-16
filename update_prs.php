<?php
    session_start();

    if($_POST['author'] == $_SESSION['userid']) {
        $conn = mysqli_connect('localhost', 'test', 'qwe123', 'JBB_DB');
        $sql = "UPDATE board SET
                title = '{$_POST['title']}',
                content = '{$_POST['content']}'
                WHERE id = '{$_POST['id']}'";
        $result = mysqli_query($conn, $sql);
        if($result == false){
            echo "저장 과정 중 문제 발생";
            ?>
            <br><button type="button" onclick="location.href='./update.php?number=<?= $_POST['id'] ?>'">돌아가기</button>
            <?php
        } 
        else {
            echo "저장 성공";
            ?>
            <br><button type="button" onclick="location.href='./index.php'">돌아가기</button>
            <?php
        }
    }
    else {
        echo "Error";
    }
?>