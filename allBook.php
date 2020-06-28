<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $connect = mysqli_connect('localhost', 'root', '');
    $createdb = 'CREATE DATABASE IF NOT EXISTS Taxi';
    
    if (!mysqli_query($connect, $createdb)) {
        exit("Ошибка при создании базы данных");
    };

    $createt = 'CREATE TABLE IF NOT EXISTS Taxi.Admins (
        `idAdmin` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Login` varchar(30) NOT NULL,
        `Password` varchar(30) NOT NULL
    )';

    if (!mysqli_query($connect, $createt)) {
        exit('Ошибка при создании таблицы');
    };
    $result = mysqli_query($connect, 'SELECT * FROM `books`');
    $valuesubject = 0;
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin</title>
    <link rel='stylesheet' href='css/allBook.css'>
    <link rel='stylesheet' href='css/reset.css' />
    <link rel='stylesheet' href='css/font.css' />
</head>
<body>
    <?php
            if($_COOKIE['login'] == 1) {
                include_once 'php/showallbook.php';
            } else {
                include_once 'php/loginpanel.php';
            }
    ?>
</body>
</html>