<?php
    define('DB_HOST', 'localhost'); // Отвечает за подключение хоста
    define('DB_USER', 'root'); // Отвечает за подключение пользавателя
    define('DB_PASS', ''); // Отвечает за подключение паролья
    define('DB_DATABASE', 'db_isfara'); // Отвечает за подключение к базе данних
    
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
    
    mysqli_set_charset($link, 'utf8'); // Кодировка подключения
    
    if(mysqli_connect_errno())
    {
        echo 'Ошибка в подключении к базе данных('. mysqli_connect_errno().'): '.
             'Номер ошибки: '. mysqli_connect_errno();
        exit();
    }
    