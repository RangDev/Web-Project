<?php
    session_start();
    session_unset();
    session_destroy();
    echo "로그아웃되었습니다.";
    ?>
    <br><button type="button" onclick="location.href='./index.php'">돌아가기</button>
    <?php
?>