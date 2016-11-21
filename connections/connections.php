<?php

    $host = "127.0.0.1";
    $user = "zrsmith75";
    $pass = "";
    $db = "rideBoard";
    $port = 3306;


    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
    }

?>