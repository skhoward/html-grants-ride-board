<?php require 'connections/connections.php' ?>
<?php 
    session_start();
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
                        <li><a href="register">Register</a></li>
                        <li><a href="login">Log In</a></li>
                        <li><a href="faq">FAQ</a></li>
                    </ul>
                    <ul  id="cssmenu">
                        <li><a href="logout">Log out</a></a></li>    
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
            
       
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>