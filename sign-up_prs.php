<?php
    if($_POST['upw'] == $_POST['re_upw']){
        $conn = mysqli_connect('localhost', 'test', 'qwe123', 'JBB_DB');
        $sql = "INSERT INTO account (login_id, login_pw, created) 
                VALUES(
                    '{$_POST['uid']}',
                    '{$_POST['upw']}',
                    NOW()
                    )";
        $result = mysqli_query($conn, $sql);
        if($result == false){
            echo "저장 과정 중 문제 발생";
            ?>
            <br><button type="button" onclick="location.href='./sign-up.php'">돌아가기</button>
            <?php
        } 
        else {
            echo "성공";
            ?>
            <br><button type="button" onclick="location.href='./index.php'">돌아가기</button>
            <?php
        }
    }
    else{
        echo "비밀번호 불일치";
        ?>
        <br><button type="button" onclick="location.href='./sign-up.php'">돌아가기</button>
        <?php
    }
?>