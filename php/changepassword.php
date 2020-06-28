<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $Name = $_POST['Login'];
    $OldPass = $_POST['OldPassword'];
    $NewPass = $_POST['NewPassword'];

    $connect = mysqli_connect('localhost', 'root', '', 'Taxi');

    $checkpass = mysqli_query($connect, "SELECT `Password` FROM `admins` WHERE Login = '$Name'");
    $checkpass = mysqli_fetch_array($checkpass)[0];

    if($OldPass !== $checkpass) {
        exit("Wrong old password");
    }

    if($OldPass == $NewPass) {
        exit("Passwords must not match");
    }

    $insertnewpass = mysqli_query($connect,"UPDATE `admins` SET `Password`= '$NewPass' WHERE Login = '$Name'");

    if(!$insertnewpass) {
        exit("Error");
    }

    echo "Success";
?>