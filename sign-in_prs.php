<?php
    session_start();
    
    if(isset($_POST['uid'])&&isset($_POST['upw'])){
        $userid = $_POST['uid'];
        $userpw = $_POST['upw'];

        $conn = mysqli_connect('localhost', 'root', '123', 'JBB_DB');
        $sql="SELECT * FROM account where login_id='$userid'&&login_pw='$userpw'";
        $result = mysqli_fetch_array(mysqli_query($conn,$sql));
        if($result == true){
            echo "ID : $userid";
            echo "<br> 로그인 성공";
            $_SESSION['userid'] = $userid;
            ?>
            <br><button type="button" onclick="location.href='./index.php'">돌아가기</button>
            <?php
        }
        else {
            echo "로그인 실패";
        }
    }
?>