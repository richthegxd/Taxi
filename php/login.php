<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $connect = mysqli_connect("localhost", "root", '', "Taxi");

    $Login = $_POST['Login'];
    $Pass = $_POST['Password'];

    $datapass = mysqli_query($connect, "SELECT Password FROM Taxi.Admins WHERE Login = '$Login'");
    $datapass = mysqli_fetch_array($datapass)[0];

    if ($Pass !== $datapass) {
        exit("Wrong password");
    };
    setcookie(
        'login',
        "1",
        time() + 60 * 60 * 24 * 30,
        '/'
    );

    echo "Success";
?>