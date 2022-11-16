<?php
    session_start();
    
    if($_POST['author'] == $_SESSION['userid']) {
        $conn = mysqli_connect('localhost', 'root', '123', 'JBB_DB');
        $sql = "DELETE FROM board
                WHERE id = '{$_POST['id']}'";
        $result = mysqli_query($conn, $sql);
        if($result == false){
            echo "삭제 과정 중 문제 발생";
            ?>
            <br><button type="button" onclick="location.href='./create.php'">돌아가기</button>
            <?php
        } 
        else {
            echo "삭제 성공";
            ?>
            <br><button type="button" onclick="location.href='./index.php'">돌아가기</button>
            <?php
        }
    }
    else {
        echo "Error";
    }
?>