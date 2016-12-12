<?php
        $server_name = "localhost";
        $user_name = "blogadmin";
        $password = "12345678";
        $db_name = "Blogdb2";
        
        // Створюємо з'єднання
        $con = new mysqli($server_name, $user_name, $password, $db_name);
        
        // Перевіряємо з'єднання
        // if ($con->connect_error) {die("Помилка з'єднання: " . $con->connect_error);}