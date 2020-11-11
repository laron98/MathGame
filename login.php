<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    *{
        padding: 0; 
        margin: 0;
    }
    .input_title{
        display: inline-block;
        color: Red;
        width: 70px;
    }
    #container{
        margin-left: 10px;
        position: relative;
        top: 150px;
        left: 500px;
        width: 250px;
        padding: 15px;
        background-color: white;
    }
    input[type="submit"]{
			background-color: rgb(102, 0, 0);
			color: white;
			display: block;
			margin-top: 15px;
			width: 242px;
			height: 25px;
	}
    body{
			background-color: grey;
	}
    #message{
			display:none;
			margin-bottom: 10px;
	}
    img{
			width: 100px;
			margin-bottom: 25px;
			/* border: 1px solid; */
			margin-left: 77px;
		}


    
    </style>
</head>
<body>
    <div id="container"> 
        <h2 id="greeting">Welcom to Math Game</h2>
        <div>
        <img src="MathIcon.png" alt="UPS">
        </div>
        <form action="check_login.php" method = "post" id="form_id">
            <div id="message"></div>
            <span class="input_title">Username:</span>
            <input type="text" name="username" id="username" placeholder="Name" />
            <br><br>
            <span class="input_title">Password:</span>
		    <input type="password" name="pw" id="password" placeholder="Password" />
            <input type="submit" name="action_name" id="login" value="login" />
        </div>

    </form>

    
</body>
</html>
