
<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "zrsmith75";                     
    $pass = "";                                  
    $db = "c9";                                  
    $port = 3306;                                
    
    // $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    $local = new mysqli($host, $user, $pass, $db);
    @session_start();

    // //And now to perform a simple query to make sure it's working
    // $query = "SELECT * FROM users";
    // $result = mysqli_query($connection, $query);

    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo "The ID is: " . $row['UserID'] . " and the Username is: " . $row['Fname'] . $row['Lname'];
    // }

?>