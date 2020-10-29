<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /**
         * This page will be changed to idex to redirect users depending on which 
         * user type
         */
        include_once "my_functions.php";
        my_session_start();
        if(!isset($_SESSION['uname'])){
          header("Location:loginPage.php");
        }
    
        echo $_SESSION['uname'].", which game would you like to play?";
    ?> 

    
</body>
</html>
