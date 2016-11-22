<?php require 'connections/connections.php' ?>
<?php 
    session_start();
    print_r($_SESSION);
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Register</title>
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