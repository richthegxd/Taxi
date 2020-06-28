<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $Name = $_POST['Login'];
    $Pass = $_POST['Password'];

    foreach($_POST as $k => $v) {
        if($v == ''){
            exit("Check the fields for completion");
        };
    };

    $connect = mysqli_connect('localhost', 'root', '', 'Taxi');

    $checklogin = mysqli_query($connect, "SELECT `Login` FROM `admins` WHERE Login = '$Name'");
    $checklogin = mysqli_fetch_array($checklogin)[0];

    if($checklogin == "$Name"){
        exit("This admin already exists");
    };
    
    $insertadmin = mysqli_query($connect, "INSERT INTO Taxi.Admins (Login, Password)
    VALUES('$Name', '$Pass')");
    
    if(!$insertadmin) {
        exit("Error");
    }
    echo "Success";
?>