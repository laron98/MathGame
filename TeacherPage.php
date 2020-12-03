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


<table style="width:100%">
  <tr>
    <th>Car Math Game</th>
    <th><button>Easy</button></th> 
    <th><button>Hard</button></th>
  </tr>
  <tr>
    <th>Safari Math Game</th>
    <th><button>Easy</button></th> 
    <th><button>Hard</button></th> 
  </tr>
  
</table>

</body>
</html>


<?php
