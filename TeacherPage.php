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