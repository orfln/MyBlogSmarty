<?php
    // Виклик з бази даних всіх повідомлень з усіма параметрами
        
    include_once 'models/class.Connect.php';
        
    // Get reports with comments number less than 30
    $sql = "SELECT * FROM `REPORTS` WHERE `COMNUM`<30 ORDER BY `LAST_COMMENT_DATE` DESC, `DATE` DESC";
    $result1 = $con->query($sql);

    // Get reports with 30 comments or more
    $sql = "SELECT * FROM `REPORTS` WHERE `COMNUM`>=30 ORDER BY `LAST_COMMENT_DATE` DESC, `DATE` DESC";
    $result2 = $con->query($sql);
        
    $con->close();
        