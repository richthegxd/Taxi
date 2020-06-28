<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $When = $_POST['When'];
    $Time = $_POST['Time'];
    $Start = $_POST['Start'];
    $End = $_POST['End'];

    if(isset($_POST['Car'])) {
        $Car = $_POST['Car'];
    } else {
        exit("Check the fields for completion");
    };
    foreach($_POST as $name => $value) {
        if($value == '') {
            exit("Check the fields for completion");
        }
    };

    $connect = mysqli_connect("localhost", "root", "");

    $createdb = "CREATE DATABASE IF NOT EXISTS Taxi";

    if (!mysqli_query($connect, $createdb)) {
        exit("Ошибка при создании базы данных");
    };

    $createt = "CREATE TABLE IF NOT EXISTS Taxi.Books (
        `idBook` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `NameBook` varchar(15) NOT NULL,
        `PhoneBook` varchar(30) NOT NULL,
        `WhenBook` varchar(50) NOT NULL,
        `TimeBook` varchar(50) NOT NULL,
        `StartBook` varchar(50) NOT NULL,
        `EndBook` varchar(50) NOT NULL,
        `Car` varchar(50) NOT NULL,
        `Status` int NOT NULL
    )";

    if (!mysqli_query($connect, $createt)) {
        exit("Ошибка при создании таблицы");
    };

    $insertsubject = "INSERT INTO Taxi.Books
    (NameBook, PhoneBook, WhenBook, TimeBook, StartBook, EndBook, Car, Status)
    VALUES('$Name', '$Phone', '$When', '$Time', '$Start', '$End', '$Car', 1)";

    if (!mysqli_query($connect, $insertsubject)) {
        exit("Ошибка при заполнении данных");
    }
    echo "Your booking request has been sent.";
?>