<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $Name = $_POST['Login'];

    foreach($_POST as $k => $v) {
        if($v == ''){
            exit("Check the fields for completion");
        };
    };


    $connect = mysqli_connect('localhost', 'root', '', 'Taxi');


    $checklogin = mysqli_query($connect, "SELECT `Login` FROM `admins` WHERE Login = '$Name'");
    $checklogin = mysqli_fetch_array($checklogin)[0];

    if($checklogin == ''){
        exit("This admin does not exist");
    };

    $deleteadmin = mysqli_query($connect, "DELETE FROM `admins` WHERE Login = '$Name'");

    if(!$deleteadmin) {
        exit ("Error");
    }

    echo "Success";
?>