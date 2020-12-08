function check_CGscore($username){
	$tempo = getData(USERFILE);
	print($tempo[$username]['carGameScore']);
    }
function check_SGscore($username){
	$tempo = getData(USERFILE);
	print($tempo[$username]['ASGameScore']);
    }
    
// need to add function for difficulties


<!DOCTYPE html>
<html>
<body>

<button>Logout</button>

<h1>Welcome to the Teacher Homepage</h1>

<h3>Student Data:</h3>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>

table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>


<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Car Math Game</th> 
    <th>Safari Math Game</th>
  </tr>
  <tr>
    <td>Alan</td>
    <td>check_CGscore(Alan)</td>
    <td>check_SGscore(Alan)</td>
  </tr>
  <tr>
    <td>Max</td>
    <td>check_CGscore(Max)</td>
    <td>check_SGscore(Max)</td>
  </tr>
  <tr>
    <td>Langston</td>
    <td>check_CGscore(Langston)</td>
    <td>check_SGscore(Langston)</td>
  </tr>
</table>

</body>
</html>

<html>
<body>

<h3>Change Difficulty:</h3>
</body>
</html>


</style>
</head>
<body>

<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>

<?php
	function difficutlyCG(){
    difficulty = 0;
    if(isset($_POST['easy1'])) { 
            return 0; 
        } 
        if(isset($_POST['hard1'])) { 
            return 1; 
        } 
    return difficulty;
    }
    
    function difficutlySG(){
    difficulty = 0;
    if(isset($_POST['easy2'])) { 
            return 0; 
        } 
        if(isset($_POST['hard2'])) { 
            return 1; 
        } 
    return difficulty;
    }
?> 

<table style="width:100%">
  <tr>
    <th>Car Math Game</th>
    <th><form method="post"> 
        <input type="submit" name="easy1"
                value="Easy"/> 
    </form></th> 
    <th><form method="post"> 
        <input type="submit" name="hard1"
                value="Hard"/></th>
  </tr>
  <tr>
    <th>Safari Math Game</th>
    <th><form method="post"> 
        <input type="submit" name="easy2"
                value="Easy"/></th> 
    <th><form method="post"> 
        <input type="submit" name="hard2"
                value="Hard"/></th> 
  </tr>
  
</table>

</body>
</html>


<?php
