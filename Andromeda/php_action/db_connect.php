
<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "andromeda";

    //session_start();

    // create connection
    $connect = new mysqli($serverName, $username, $password, $dbname);

    // filas afectadas
    $affectedRow = 0;

    // check connection
    if($connect->connect_error) {
        die("connection failed : " . $connect->connect_error);
    } else {
        //echo "Successfully Connected";
    }


?>
