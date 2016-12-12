<?php

// Задаємо змінну частину назви контролера
$controllerName= isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// Задаємо змінну частину назви функції
$actionName= isset($_GET['action']) ? ($_GET['action']) : 'index';

// Підключаємо заданий котролер
include_once 'controllers/'.$controllerName.'Controller.php';

// Формуємо повну назву функції
$function=$actionName.'Action';

// Викликаємо функцію
$function();

