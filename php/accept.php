<?php
    require_once 'sms.ru.php';

    $idBook = $_POST['idBook'];

    $connect = mysqli_connect('localhost', 'root', '', 'Taxi');

    $result = mysqli_query($connect, "SELECT * FROM `books` WHERE idBook = $idBook");

    while ($row = mysqli_fetch_assoc($result)){  
        $data = new stdClass();
        $data->to = $row['PhoneBook'];
        $data->text = "{$row['NameBook']}, Ваша заявка на бронирование автомобиля {$row['Car']},было одобрено\nВы сможете забрать автомобиль {$row['WhenBook']} в {$row['TimeBook']} ";
    }

    $setid = mysqli_query($connect,"UPDATE `books` SET `Status`= 0 WHERE idBook = $idBook");

    $deletestatus = mysqli_query($connect, "DELETE FROM `books` WHERE Status = 0");

    if(!$setid) {
        exit("Ошибка смены статуса");
    };

    if(!$deletestatus) {
        exit("Ошибка удаления");
    };

?>