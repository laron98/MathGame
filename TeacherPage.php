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
    <td>null</td>
    <td>null</td>
  </tr>
  <tr>
    <td>Max</td>
    <td>null</td>
    <td>null</td>
  </tr>
  <tr>
    <td>Langsotn</td>
    <td>null</td>
    <td>null</td>
  </tr>
</table>

</body>
</html>

<html>
<body>

<h3>Change Difficulty:</h3>
//Add image

</body>
</html>


</style>
</head>
<body>


<table style="width:100%">
  <tr>
    <th>Car Math Game</th>
    <th>Safari Math Game</th> 
  </tr>
  <tr>
    <td><button>Easy</button></td>
    <td><button>Easy</button></td>
  </tr>
  <tr>
    <td><button>Medium</button></td>
    <td><button>Medium</button></td>
     <tr>
    <td><button>Hard</button></td>
    <td><button>Hard</button></td>
</table>

</body>
</html>


<?php

//destroy session method
// Logout
if(isset($_GET['method'])){
    if($_GET[',ethod'] === 'logout'){
        destroy_session();
        }
    }
}


//print "- Student Scores -"
//Print Array from Both games (carArray, animalArray)
//Print key and value, then use key to find second value from other array and print that

//  EX:
name        Car Game        Animal Game 
John        87              89
Emily       93              84

//$cars=array("Volvo","BMW","Toyota");
//I need to make the diplay put the arrays next to each other.
//The arrays need a contructor to make blank array so it has values
//not matter what to print out

function display($studentArray, $carGameArray, $safariGameArray)
{
$stuLength = count($studentArray)
$carLength = count($carGameArray)
$safariLength = count($safariGameArray)

for($x = 0; $x < $stuLength; $x++)
    {   
    echo $studentArray[$x];
    echo "<br>";
    }
    for($x = 0; $x < $carLength; $x++)
    {   
    echo $carGameArray[$x];
    echo "<br>";
    }
    for($x = 0; $x < $safariLength; $x++)
    {   
    echo $safariGameArray[$x];
    echo "<br>";
    }
}


//Below this will be difficulty changes
Car Game:       -Easy   -Med    -Hard
Animal Game:    -East   -Med    -Hard

//if user clicks this set variable to 0  1 or  2, so when the game calls for the difficulty it finds a value
//and uses that to set the range of values. 

function changeDifficulty()
{
$carGameDiff = 0;
$safariGameDiff = 0;

}
