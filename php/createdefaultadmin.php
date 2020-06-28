<?php
    $connect = mysqli_connect("localhost", "root", '');
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
    
    $insertadmin = "INSERT INTO Taxi.Admins
    (Login, Password) VALUES('admin', '')";

    if (!mysqli_query($connect, $insertadmin)) {
        exit("Ошибка при заполнении данных");
    }
    echo "Admin successfully created";
?>