<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
</head>
<body>
    <?php
       include_once "MyFunctions.php";
       if(session_status() !==PHP_SESSION_ACTIVE){
            session_start();
        }
       if(isset($_SESSION['uname'])){
           header("Location: index.php");
        }	
    ?>

   <form action="CheckLogin.php" method="post" id="form_id">
    <h2>Welcome to the Math Game</h2>
    Username:
    <input type="text" name="username" id="username" placeholder="Name" />
    <br><br>
    Password:
    <input type="password" name="pw" id="password" placeholder="Password" />
    <input type="submit" name="action_name" id="login" value="login" /> 
   </form>

</body>
</html>