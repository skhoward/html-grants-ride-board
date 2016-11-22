<?php require 'connections/connections.php'; ?>

<?php 
    print_r($_POST);
    
    if(isset($_POST['Login'])) {
        $Email = $_POST['Email'];
        $PW = $_POST['Password'];
        $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cost' => 10));
        $result = $local->query("SELECT * FROM users WHERE Email='$Email' AND Password='$PW'"); // Password='$PW'
        
        # look to see that we got a UserID
        $row_cnt = $result->num_rows;
        if($row_cnt == 1){
            $row = $result->fetch_array(MYSQLI_BOTH);
            $_SESSION["UserID"] = $row['UserID'];
            #echo 'UserId'.$row['UserID'];
            header('Location:account');
        
        # We did not find a UserId so we echo an error
        } else {
            echo 'User not found';
        }
        
    }
?>
 
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <meta charset="UTF-8">
    <title>Login</title>
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
            <form action="" method="post" name="LoginForm" id="LoginForm">
                <div class="formElement">
                    <input type="text" name="Email" required="required" class="TField" id="Email" placeholder="Email"/>
                </div>
                <div class="formElement">
                    <input type="text" name="Password" required="required" class="TField" id="Password" placeholder="Password"/>
                </div>
                <div class="formElement">
                    <input name="Login" type="submit" class="button" id="Login" value="Login" />
                </div>
            </form>
        </div>
        <div class="footer">
       
        </div>
    </div>
    

</body>
</html>