<?php
  include_once "files.php";

  function check_CGscore($username){
    $tempo = getData(USERFILE);
      print($tempo[$username]['carGameScore']);
    }

  function check_SGscore($username){
      $tempo = getData(USERFILE);
      print($tempo[$username]['ASGameScore']);
  }
  
?>

<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">

<button>Logout</button>

<h1 style="text-align:center;">Welcome to the Teacher Homepage</h1>

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
    <td><?php 
    check_CGscore("alan") ?>
  </td>
    <td><?php 
    check_SGscore("alan") ?></td>
  </tr>
  <tr>
    <td>Max</td>
    <td><?php 
    check_CGscore("max") ?></td>
    <td><?php 
    check_SGscore("max") ?></td>
  </tr>
  <tr>
    <td>Langston</td>
    <td><?php 
    check_CGscore("langston") ?></td>
    <td><?php 
    check_SGscore("langston") ?></td>
  </tr>
</table>
  
  <table style="width:100%">
  <tr>
    <th>Change Difficulty</th>
    <td>
        <input type="submit" name="easy" id="easy"
                value="Easy"/> 
  </td> 
    <td>
        <input type="submit" name="hard" id ="hard"
                value="Hard"/></td>
  </tr>
  <table>
  
  
  
  <script src="base.js"></script>
<script>
    var btn2 = document.getElementById("easy")
    btn2.onclick = function (){
      $ajax({
					method: 'post',
					url: 'SafariGame.php',
					data: {'difficult': 0, 'game': "Game"},
					success: function(result){
            console.log(result)
						// var res = JSON.parse(result)
						// console.log(res)
					}
				}
				)

    }
</script>



  
  <script src="base.js"></script>
<script>
    var btn2 = document.getElementById("hard")
    btn2.onclick = function (){
      $ajax({
					method: 'post',
					url: 'SafariGame.php',
					data: {'difficult': 1, 'game': "Game"},
					success: function(result){
            console.log(result)
						// var res = JSON.parse(result)
						// console.log(res)
					}
				}
				)

    }
</script>

</body>
</html>
