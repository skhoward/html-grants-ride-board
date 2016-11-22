<?php 
require 'connections/connections.php';
print_r($_SESSION);
 
    //session_start();
    if(isset($_SESSION["UserID"])) {
        
    } else {
        header('Location: login.php');
    }
    
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Account</title>
</head>
<body>

    <div class="container">
        <div class="header">
            
        </div>
        <div class="menu">
            <div id="menu">
                <nav>
                    <ul id="cssmenu">
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="left-body">
            
        </div>
        <div class="right-body">
            Your Account: <br>
            <?php echo $_SESSION["UserID"]; ?>
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>