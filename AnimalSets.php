<?php
     //logging user in: prompt for and retrieve username, password, email?

     //select game: 
     echo "Which math skills would you like to practice?<br>";
     //display two buttons with graphics of the games
     echo "Addition and subtraction OR Identifying ones, tens, and hundreds places<br>";

     //safari set
     

     $difficulty = "medium";

     function assignSet($difficulty) {
          
          $easySet = range(1, 55);
          $mediumSet = range(55, 99);
          $hardSet = range(100, 555);
          $extremeSet = range(555, 999);

          if ($difficulty === "easy") {
               return $easySet;
          } elseif ($difficulty === "medium") {
               return $mediumSet;
          } elseif ($difficulty === "hard") {
               return $hardSet;
          } elseif ($difficulty === "extreme") {
               return $extremeSet;
          } 
     }
     $studentSet = assignSet($difficulty);
     print_r($studentSet);
     

?>
