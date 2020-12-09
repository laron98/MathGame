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
    <td><?php 
    check_CGscore("alan") ?>
  </td>
    <td>c<?php 
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
    <td>c<?php 
    check_SGscore("langston") ?></td>
  </tr>
</table>

</body>
</html>
