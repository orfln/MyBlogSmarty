<?php
        // Виклик з бази даних повідомлення з `ID`=$id з його параметрами 
        
        include_once 'class.Connect.php';
        
        // Перевіряємо з'єднання
        if ($con->connect_error) {die("Помилка з'єднання: " . $con->connect_error);}
        $sql = "SELECT * FROM `REPORTS` WHERE `ID`='$id'";
        $result = $con->query($sql);

        // Виклик всіх коментарів до заданого повідомлення 
        $sql_comments = "SELECT `NAME`, `CONTENT`, `DATE` 
                          FROM `COMMENTS` 
                          WHERE `REPORT_ID`='$id' 
                          ORDER BY `DATE` DESC";
        $result_comments = $con->query($sql_comments);
        
        $con->close();