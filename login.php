<?php 
require 'connections/connections.php'; 
@session_start();
    // print_r($_POST);

if(isset($_POST['Login'])) {

    $Email = $_POST['Email'];
    $PW = $_POST['Password'];
   
//   $query = "INSERT INTO users (Fname, Lname, Email, Password) VALUES ('$FName', '$LName','$Email', '$PW')";
//   $results = $local->query($query) or die($local->error);

    $result =$local->query("SELECT UserID FROM users WHERE Email='$Email' AND Password='$PW' LIMIT 1");
    $row_cnt = $result->num_rows;
    
    if($row_cnt == 1){
        
        #$row = $result->fetch_array(MYSQLI_BOTH);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo 'userId = '.$row['UserID'];
           
        $_SESSION["UserID"] = $row['UserID'];
        #header('Location: account.php');
    
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