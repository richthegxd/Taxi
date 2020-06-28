<?php
    $idBook = $_POST['idBook'];

    $connect = mysqli_connect('localhost', 'root', '', 'Taxi');

    $setid = mysqli_query($connect,"UPDATE `books` SET `Status`= 0 WHERE idBook = $idBook");

    $deletestatus = mysqli_query($connect, "DELETE FROM `books` WHERE Status = 0");

    if(!$setid) {
        exit("Ошибка смены статуса");
    };

    if(!$deletestatus) {
        exit("Ошибка удаления");
    };

    echo "Deny: success";
?>