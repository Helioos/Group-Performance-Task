<?php
    $serverName = "localhost";
    $databaseUser = "root";
    $databasePass = "";
    $database = "stationary_supplies";

    $conn = mysqli_connect( $serverName, $databaseUser, $databasePass, $database );

    
    if($conn == TRUE) {
        echo "<h1><center>Customer Information!</center></h1>";
    }
    
?>